<?php

class SJB_Admin_Miscellaneous_UpdateToNewVersion extends SJB_Function
{
	public function isAccessible()
	{
		return true;
	}

	public function execute()
	{
		$action = SJB_Request::getVar('action', null);
		switch ($action) {
			case 'updatingToNewVersion':
				$this->updatingProcess();
				break;
			default :
				$this->updateToNewVersion();
		}
		
		if ($action) {
			exit();
		}
	}
	
	private function updateToNewVersion()
	{
		ini_set('max_execution_time', 0);
		$tp     = SJB_System::getTemplateProcessor();
		$errors = array();
		
		$isZipExtLoaded = extension_loaded('zip');
		$tp->assign('zip_extension_loaded', $isZipExtLoaded);
		
		$updatesDir  = SJB_System::getSystemSettings('SJB_UPDATES_DIR');
		$updateToVer = SJB_Request::getVar('to_version');
		if (!empty($updateToVer)) {
			// remove all path elements
			$updateToVer = basename($updateToVer);
			$startPath = $updatesDir . $updateToVer . DIRECTORY_SEPARATOR . "updater.php";

			if (file_exists($startPath)) {
				include_once $startPath;
			} else {
				echo '<p class="error">' . SJB_I18N::getInstance()->gettext(null, 'Update package files are missing') . '</p>';
			}
			$tp->display('updater_starts.tpl');
		} else {
			$formSubmitted = SJB_Request::getVar('update_to_version');
			$wayToUpdate = SJB_Request::getVar('way_to_update');

			if (!$isZipExtLoaded) {
				$errors[] = "The update process cannot be continued. There is no Zip-extension for PHP installed on your server.\nPlease install it and try again.";
			}

			if (!empty($formSubmitted) && $isZipExtLoaded) {
				// OK. we need to create Zend_Rest_Client, check user and get available updates if allowed
				$client = new Zend_Rest_Client(SJB_System::getSystemSettings('SJB_UPDATE_SERVER_URL'));

				$result = $client->getUpdateLink(
					SJB_Request::getVar('auth_username'),
					SJB_Request::getVar('auth_password'),
					SJB_System::getSystemSettings('version'))->get();

				if ($result->isSuccess()) {
					if (isset($result->error)) {
						$errors[] = (string) $result->error;
						$tp->assign("wayToUpdate", $wayToUpdate);
					}
					if (isset($result->update)) {
						$updateLink = (string) $result->update;
						$downloadedFileName = basename($updateLink);
						$unzipDirname       = basename($updateLink, '.zip');
						$downloadedFilePath = $updatesDir . $downloadedFileName;
						// download update file to cache/updates folder
						if ($wayToUpdate == 'makeArchive') {
							$this->sendArchiveToUser($updateLink,$downloadedFileName);
							exit();
						} elseif ($wayToUpdate == 'autoUpdate') {
							$result = copy($updateLink, $downloadedFilePath);
							if ($result) {
								if ($isZipExtLoaded) {
									$zip = new ZipArchive;
									$res = $zip->open($downloadedFilePath);
									if ($res === true) {
										$zip->extractTo($updatesDir . DIRECTORY_SEPARATOR . $unzipDirname . DIRECTORY_SEPARATOR);
										$zip->close();
										SJB_HelperFunctions::redirect(SJB_System::getSystemSettings('ADMIN_SITE_URL') . '/update-to-new-version/?to_version=' . urlencode($unzipDirname));
									} else {
										$errors[] = 'Failed to extract upgrade package files';
									}
								} else {
									$errors[] = "The update process cannot be continued. There is no Zip-extension for PHP installed on your server.\nPlease install it and try again.";
								}
							} else {
								$errors[] = 'Failed to download upgrade package';
							}
						}
					}
				}
			}
			$tp->assign('errors', $errors);
			$tp->display('update_to_new_version.tpl');
		}
	}

	/**
	 * @param string $updateLink
	 * @param string $downloadedFileName
	 */
	public function sendArchiveToUser($updateLink, $downloadedFileName)
	{
		for ($i = 0; $i < ob_get_level(); $i++) {
			ob_end_clean();
		}
		ini_set('max_execution_time', 0);
		header("Content-Type: application/octet-stream");
		header("Accept-Ranges: bytes");
		$fileSize = $this->getCurlFileSize($updateLink);
		if ($fileSize > 0) {
			header('Content-Length: ' . $fileSize);
		}
		header("Content-Disposition: attachment; filename=" . $downloadedFileName);

		readfile($updateLink);
	}

	private function getCurlFileSize($url)
	{
		$result = -1;
		$curl = curl_init($url);

		curl_setopt($curl, CURLOPT_NOBODY, true);
		curl_setopt($curl, CURLOPT_HEADER, true);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);

		$data = curl_exec($curl);
		curl_close($curl);

		if ($data) {
			$contentLength = 'unknown';
			$status = 'unknown';

			if (preg_match( "/^HTTP\/1\.[01] (\d\d\d)/", $data, $matches)) {
				$status = (int)$matches[1];
			}

			if (preg_match( "/Content-Length: (\d+)/", $data, $matches)) {
				$contentLength = (int)$matches[1];
			}

			// http://en.wikipedia.org/wiki/List_of_HTTP_status_codes
			if ($status == 200 || ($status > 300 && $status <= 308)) {
				$result = $contentLength;
			}
		}

		return $result;
	}

	private function updatingProcess()
	{
		$response = array();
		
		$status = SJB_Request::getVar('status', null);
		if (!$status) {
			$response['success'] = false;
			$response['message'] = 'Status not set.';
		} else {
			$response = $this->updatingProcessController($status);
			if (!isset($response['success'])) {
				$response['success'] = true;
			}
		}
		
		echo json_encode($response);
	}

	private function updatingProcessController($status)
	{
		$response = array();
		
		switch ($status) {
			case 'prepareForUpdate':
				$response['status'] = 'prepareForUpdateCompleted';
				break;
			case 'updateFiles':
				$this->lockPatchDatabaseOnlyUsingSJB();
				$response['status'] = 'updateFilesShowPreloader';
				break;
			case 'updateFilesStart':
				$_REQUEST['updateFilesStart'] = true;
				$this->updateToNewVersion();
				$response['status'] = 'updateFilesCompleted';
				break;
			case 'updateDatabase':
				$response['percentagePerPatch'] = SJB_UpdateManager::updateDatabasePercentagePerPatch();
				$response['status']             = 'updateDatabaseShowPreloader';
				break;
			case 'updateDatabaseStart':
				$_REQUEST['updateDatabaseStart'] = true;
				$this->updateToNewVersion();
				if ($GLOBALS['updateDatabasePatched'] === true) {
					$response['status'] = 'updateDatabasePatchSet';
				}
				else if ($GLOBALS['updateDatabasePatched'] === false) {
					$response['status'] = 'updateDatabaseCompleted';
					SJB_UpdateManager::removeDatabasePatchFile();
					$this->unlockPatchDatabaseOnlyUsingSJB();
				} else {
					$response['message'] = $GLOBALS['updateDatabasePatched'];
					$response['success'] = false;
				}
				break;
			case 'updateRestPart':
				$response['status'] = 'updateRestPartShowPreloader';
				break;
			case 'updateRestPartStart':
				$_REQUEST['updateRestPart'] = true;
				$this->updateToNewVersion();
				$response['status'] = 'updateRestPartCompleted';
				break;
		}
		
		return $response;
	}

	private function lockPatchDatabaseOnlyUsingSJB()
	{
		$patchDatabaseOnlyUsingSJB = SJB_Settings::getSettingByName('patchDatabaseOnlyUsingSJB');
		if ($patchDatabaseOnlyUsingSJB === false) {
			SJB_Settings::addSetting('patchDatabaseOnlyUsingSJB', '1');
		}
		else if (!$patchDatabaseOnlyUsingSJB) {
			SJB_Settings::updateSetting('patchDatabaseOnlyUsingSJB', '1');
		}
	}

	private function unlockPatchDatabaseOnlyUsingSJB()
	{
		SJB_Settings::updateSetting('patchDatabaseOnlyUsingSJB', '0');
	}
}

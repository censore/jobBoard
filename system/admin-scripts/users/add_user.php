<?php

class SJB_Admin_Users_AddUser extends SJB_Function
{
	public function isAccessible()
	{
		preg_match('/add-([^.]*)\//',  SJB_Navigator::getURI(), $match);
		$this->setPermissionLabel('manage_' . $match[1]);
		return parent::isAccessible();
	}

	public function execute()
	{
		$tp = SJB_System::getTemplateProcessor();
		$user_group_id = SJB_Request::getVar('user_group_id', null);
		$user_group_sid = SJB_Request::getVar('user_group_sid', null);
		$extUserID = SJB_Request::getVar('extUserID', null);

		if (is_null($user_group_id) && is_null($user_group_sid)) {
			$user_groups_info = SJB_UserGroupManager::getAllUserGroupsInfo();
			$tp->assign('user_groups_info', $user_groups_info);
			$tp->display('add_user_choose_user_group.tpl');
		} else {
			if (!$user_group_sid)
				$user_group_sid = SJB_UserGroupManager::getUserGroupSIDByID($user_group_id);
			$user_group_info = SJB_UserGroupManager::getUserGroupInfoBySID($user_group_sid);
			$user = SJB_ObjectMother::createUser($_REQUEST, $user_group_sid);
			$user->deleteProperty('active');
			$user->addExtUserIDProperty($extUserID);
			$registration_form = SJB_ObjectMother::createForm($user);
			$registration_form->registerTags($tp);
			$form_submitted = SJB_Request::getVar('action', '') == 'add';
			$errors = array();

			if (SJB_UserGroupManager::isUserEmailAsUsernameInUserGroup($user_group_sid) && $form_submitted) {
				$email = $user->getPropertyValue('email');
				if (is_array($email))
					$email = $email['original'];
				$user->setPropertyValue('username', $email);
			}

			if ($form_submitted && $registration_form->isDataValid($errors)) {
				SJB_UserManager::saveUser($user);

				// >>> SJB-1197
				// needs to check session for ajax-uploaded files, and set it to user profile
				$tmpUploadsStorage = SJB_Session::getValue('tmp_uploads_storage');
				$formToken         = SJB_Request::getVar('form_token');
				if (!empty($formToken)) {
					$tmpUploadedFields = SJB_Array::getPath($tmpUploadsStorage, $formToken);

					if (!is_null($tmpUploadsStorage) && is_array($tmpUploadedFields)) {
						// prepare user profile fields array
						$userProfileFieldsInfo = SJB_UserProfileFieldManager::getAllFieldsInfo();
						$userProfileFields     = array();
						foreach ($userProfileFieldsInfo as $field) {
							$userProfileFields[$field['id']] = $field;
						}

						// look for temporary values
						foreach ($tmpUploadedFields as $fieldId => $fieldInfo) {
							// check field ID for valid ID in user profile fields
							if (!array_key_exists($fieldId, $userProfileFields) || empty($fieldInfo)) {
								continue;
							}

							$fieldType         = $userProfileFields[$fieldId]['type'];
							$profilePropertyId = $fieldId . '_' . $user->getSID();

							switch ( strtolower($fieldType)) {
								case 'video':
								case 'file':
									// change temporary file ID
									SJB_DB::query("UPDATE `uploaded_files` SET `id` = ?s WHERE `id` = ?s", $profilePropertyId, $fieldInfo['file_id']);

									// set value of user property to new uploaded file
									$user->setPropertyValue($fieldId, $profilePropertyId);
									break;

								case 'logo':
									// change temporary file ID and thumb ID
									SJB_DB::query("UPDATE `uploaded_files` SET `id` = ?s WHERE `id` = ?s", $profilePropertyId, $fieldInfo['file_id']);
									SJB_DB::query("UPDATE `uploaded_files` SET `id` = ?s WHERE `id` = ?s", $profilePropertyId . '_thumb', $fieldInfo['file_id'] . '_thumb');

									// set value of user property to new uploaded file
									$user->setPropertyValue($fieldId, $profilePropertyId);
									break;

								default:
									break;
							}
							$tmpUploadsStorage = SJB_Array::unsetValueByPath($tmpUploadsStorage, "{$formToken}/{$fieldId}");
						}

						// and save user with new fields data
						SJB_UserManager::saveUser($user);
						// clean temporary storage
						$tmpUploadsStorage = SJB_Array::unsetValueByPath($tmpUploadsStorage, "{$formToken}");
						// CLEAR TEMPORARY SESSION STORAGE
						SJB_Session::setValue('tmp_uploads_storage', $tmpUploadsStorage);
					}
				}
				// <<< SJB-1197

				SJB_UserManager::activateUserByUserName($user->getUserName());
				$defaultProduct = SJB_UserGroupManager::getDefaultProduct($user_group_sid);
				$availableProductIDs = SJB_ProductsManager::getProductsIDsByUserGroupSID($user_group_sid);
				if ($defaultProduct && in_array($defaultProduct, $availableProductIDs)) {
					$contract = new SJB_Contract(array('product_sid' => $defaultProduct));
					$contract->setUserSID($user->getSID());
					$contract->saveInDB();
				}
				if (in_array($user_group_info['id'], array('JobSeeker', 'Employer')))
					SJB_HelperFunctions::redirect(SJB_System::getSystemSettings('SITE_URL') . "/manage-".strtolower($user_group_info['id']).'s/');
				else
					SJB_HelperFunctions::redirect(SJB_System::getSystemSettings('SITE_URL') . "/manage-".strtolower($user_group_info['id']).'-users/');
			}
			else {
				if (SJB_UserGroupManager::isUserEmailAsUsernameInUserGroup($user_group_sid))
					$user->deleteProperty('username');
				$registration_form = SJB_ObjectMother::createForm($user);
				$registration_form->registerTags($tp);
				$tp->assign("errors", $errors);
				$tp->assign("user_group", $user_group_info);
				$tp->assign('userTree', true);
				$tp->assign("form_fields", $registration_form->getFormFieldsInfo());
				$tp->assign("uploadMaxFilesize", SJB_UploadFileManager::getIniUploadMaxFilesize());
				$tp->display("add_user.tpl");
			}
		}
	}
}

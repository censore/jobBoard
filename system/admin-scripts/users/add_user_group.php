<?php

class SJB_Admin_Users_AddUserGroup extends SJB_Function
{
	public function isAccessible()
	{
		$this->setPermissionLabel(array('manage_user_groups'));
		return parent::isAccessible();
	}

	public function execute()
	{
		$user_group = new SJB_UserGroup($_REQUEST);
		$add_user_group_form = new SJB_Form($user_group);
		$form_is_submitted = (isset($_REQUEST['action']) && $_REQUEST['action'] == 'add');
		$errors = null;
		$tp = SJB_System::getTemplateProcessor();

		if ($form_is_submitted && $add_user_group_form->isDataValid($errors)) {
			SJB_UserGroupManager::saveUserGroup($user_group);
			$pages = array(
				array(
					'uri' => '/manage-'.strtolower($user_group->getPropertyValue('id')).'-users/',
					'module' => 'users',
					'function' => 'users',
					'access_type' => 'admin',
					'parameters' => 'user_group_sid='.$user_group->getSID(),
				),
				array(
					'uri' => '/add-'.strtolower($user_group->getPropertyValue('id')).'/',
					'module' => 'users',
					'function' => 'add_user',
					'access_type' => 'admin',
					'parameters' => 'user_group_sid='.$user_group->getSID(),
				),
				array(
						'uri' => '/'.strtolower($user_group->getPropertyValue('id')).'-products/',
						'module' => 'payment',
						'function' => 'user_products',
						'access_type' => 'user',
						'parameters' => 'userGroupID='.$user_group->getID(),
				),
			);
			$userPage = new SJB_UserPage();
			foreach ($pages as $page) {
				$page_data = SJB_UserPage::extractPageData($page);
				$userPage->setPageData($page_data);
				$userPage->save();
			}
			$this->addLocationField($user_group->getSID());
			SJB_HelperFunctions::redirect(SJB_System::getSystemSettings('SITE_URL') . "/user-groups/");
		} else {
			$add_user_group_form->registerTags($tp);
			$tp->assign('notifications', $user_group->getNotifications());
			$tp->assign('notificationGroups', $user_group->getNotificationsGroups());
			$tp->assign('form_fields', $add_user_group_form->getFormFieldsInfo());
			$tp->assign('errors', $errors);
			$tp->display('add_user_group.tpl');
		}
	}

	private function addLocationField($userGroupSid)
	{
		$locationFieldDetails = array(
			'id'          => 'Location',
			'caption'     => 'Location',
			'type'        => 'location',
			'is_required' => '0',
		);
		$locationField = new SJB_UserProfileField($locationFieldDetails);
		$locationField->setUserGroupSID($userGroupSid);
		SJB_UserProfileFieldManager::saveUserProfileField($locationField);
	}
}

<?php
require_once 'phpbb_bridge_plugin.php';
$bridgeSession = PhpBBBridgePlugin::sessionDecode(SessionStorage::read(SJB_Session::getSessionId()));
if (!empty($bridgeSession) && !SJB_Session::getValue('current_user')) {
	SJB_Session::setValue('current_user',  $bridgeSession);
}

SJB_Event::handle('Login', array('PhpBBBridgePlugin', 'login'));
SJB_Event::handle('Logout', array('PhpBBBridgePlugin', 'logout'));

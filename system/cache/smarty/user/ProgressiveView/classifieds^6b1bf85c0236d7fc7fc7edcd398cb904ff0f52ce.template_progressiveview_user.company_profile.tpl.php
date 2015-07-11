<?php /* Smarty version Smarty-3.1.13, created on 2015-07-09 21:08:13
         compiled from "template_progressiveview_user:company_profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7745559efedd5d3fb0-04455438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b1bf85c0236d7fc7fc7edcd398cb904ff0f52ce' => 
    array (
      0 => 'template_progressiveview_user:company_profile.tpl',
      1 => 1393251428,
      2 => 'template_progressiveview_user',
    ),
  ),
  'nocache_hash' => '7745559efedd5d3fb0-04455438',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tmp_listing' => 0,
    'userInfo' => 0,
    'allowViewContactInfo' => 0,
    'acl' => 0,
    'GLOBALS' => 0,
    'listing' => 0,
    'picture' => 0,
    'companyName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_559efedd6ea7d4_50678888',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559efedd6ea7d4_50678888')) {function content_559efedd6ea7d4_50678888($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["listing"] = new Smarty_variable($_smarty_tpl->tpl_vars['tmp_listing']->value, null, 0);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['title'][0][0]->_tpl_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['CompanyName'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['title'][0][0]->_tpl_title(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="text-center"><h1><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Company Profile<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1></div>
<!-- PROFILE BLOCK -->
<div class="userInfo">
	<div class="compProfileTitle"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Company Info<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
	<div class="compProfileInfo">
		<?php if ($_smarty_tpl->tpl_vars['userInfo']->value['Logo']['file_url']){?>
			<div class="text-center"><img src="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['Logo']['file_url'];?>
" alt="" /></div><br/>
		<?php }?>
		<span class="strong"><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['CompanyName'];?>
</span>
		<?php if (!$_smarty_tpl->tpl_vars['userInfo']->value['isJobg8']){?>
		<?php if ($_smarty_tpl->tpl_vars['allowViewContactInfo']->value){?><br /><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['Location']['Address'];?>
<?php }?>
		<br /><?php echo SJB_LocationManager::locationFormat(array('location'=>$_smarty_tpl->tpl_vars['userInfo']->value['Location'],'format'=>"long"),$_smarty_tpl);?>

		<?php }?>
		<br/><br/>
		<?php if (!$_smarty_tpl->tpl_vars['userInfo']->value['isJobg8']){?>
			<?php if ($_smarty_tpl->tpl_vars['allowViewContactInfo']->value){?>
				<span class="strong"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Phone<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>: <span class="longtext-25"><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['PhoneNumber'];?>
</span><br/>
				<span class="strong"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Web Site<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>: <a href="<?php if (strpos($_smarty_tpl->tpl_vars['userInfo']->value['WebSite'],'http://')===false){?>http://<?php }?><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['WebSite'];?>
" target="_blank"><span class="longtext-25"><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['WebSite'];?>
</span></a><br /><br />
			<?php }elseif($_smarty_tpl->tpl_vars['acl']->value->getPermissionParams('view_job_contact_info')=="message"){?>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"miscellaneous",'function'=>"access_denied",'permission'=>"view_job_contact_info"),$_smarty_tpl);?>
<br/>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['acl']->value->isAllowed('use_private_messages')){?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/private-messages/send/?to=<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['id'];?>
" onclick="popUpWindow('<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/private-messages/aj-send/?to=<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['id'];?>
&ajaxRelocate=1', 700, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Send private message<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', true, <?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['logged_in']){?>true<?php }else{ ?>false<?php }?>); return false;" class="pm_send_link"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Send private message<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
			<?php }elseif($_smarty_tpl->tpl_vars['acl']->value->getPermissionParams('use_private_messages')=="message"){?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/private-messages/send/?to=<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['id'];?>
" onclick="popUpWindow('<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/access-denied/?permission=use_private_messages', 400, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Send private message<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'); return false;"  class="pm_send_link"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Send private message<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
			<?php }?>
			<br/>
		<?php }?>

		<script type="text/javascript"><!--

		function windowMessage() {
			$("#messageBox").dialog( 'destroy' ).html('<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You already applied<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
			$("#messageBox").dialog({
				bgiframe: true,
				modal: true,
				title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Error<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
				buttons: {
					Ok: function() {
						$(this).dialog('close');
					}
				}
			});
		}

		--></script>
	</div>
	<div class="compProfileBottom"></div>
	<div class="text-center">
	<?php  $_smarty_tpl->tpl_vars['picture'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['picture']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['listing']->value['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['picture']->key => $_smarty_tpl->tpl_vars['picture']->value){
$_smarty_tpl->tpl_vars['picture']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['picture']->key;
?>
		<a target="_black" href="<?php echo $_smarty_tpl->tpl_vars['picture']->value['picture_url'];?>
"> <img src="<?php echo $_smarty_tpl->tpl_vars['picture']->value['thumbnail_url'];?>
" border="0" title="<?php echo $_smarty_tpl->tpl_vars['picture']->value['caption'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['picture']->value['caption'];?>
" /></a><br />
	<?php } ?>
	</div>
</div>
<!-- END PROFILE BLOCK -->

<div class="listingInfo">
	<h2><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Company Description<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</h2>
	<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['CompanyDescription'];?>

	<div class="clr"><br/></div>
	<div id="company-profile-video"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>"video"),$_smarty_tpl);?>
</div>
</div>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"social",'function'=>"company_insider_widget",'companyName'=>$_smarty_tpl->tpl_vars['companyName']->value),$_smarty_tpl);?>

<div class="clr"><br /></div><?php }} ?>
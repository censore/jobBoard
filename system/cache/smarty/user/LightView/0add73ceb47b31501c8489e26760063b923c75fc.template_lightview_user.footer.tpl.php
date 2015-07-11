<?php /* Smarty version Smarty-3.1.13, created on 2015-07-10 08:08:56
         compiled from "template_lightview_user:../menu/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11296559f99b83c2b23-26896568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0add73ceb47b31501c8489e26760063b923c75fc' => 
    array (
      0 => 'template_lightview_user:../menu/footer.tpl',
      1 => 1387364152,
      2 => 'template_lightview_user',
    ),
  ),
  'nocache_hash' => '11296559f99b83c2b23-26896568',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_559f99b84140c7_15016500',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559f99b84140c7_15016500')) {function content_559f99b84140c7_15016500($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\OpenServer\\domains\\board\\system\\ext\\Smarty\\libs\\plugins\\modifier.date_format.php';
?>	<div class="clr"><br/></div>
	<div id="footer">2008-<?php echo smarty_modifier_date_format(time(),"%Y");?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Powered by<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <a target="_blank" href="http://www.smartjobboard.com" title="Job Board Software, Script">SmartJobBoard Job Board Software</a> &nbsp; &nbsp; <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/about/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
About Us<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a> &nbsp;  <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/site-map/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sitemap<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
		<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['cookieLaw']){?>
			&nbsp;  <a href="#" onClick="return cookiePreferencesPopupOpen();"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cookie Preferences<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['GLOBALS']->value['mobileUrl'])){?>
			&nbsp;  <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['mobileUrl'];?>
<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['SessionId']){?>?authId=<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['SessionId'];?>
<?php }?>"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Mobile Version<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
		<?php }?>
	</div>
</div><?php }} ?>
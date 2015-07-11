<?php /* Smarty version Smarty-3.1.13, created on 2015-07-10 08:08:53
         compiled from "template_lightview_user:templates/_system/social/login_buttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20077559f99b58e0da2-40480005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '193d966b65e70d25e4d4d3a4a6ee5635bdf20ba5' => 
    array (
      0 => 'template_lightview_user:templates/_system/social/login_buttons.tpl',
      1 => 1386834802,
      2 => 'template_lightview_user',
    ),
  ),
  'nocache_hash' => '20077559f99b58e0da2-40480005',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aSocPlugins' => 0,
    'GLOBALS' => 0,
    'plugin' => 0,
    'user_group_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_559f99b590c2f0_36303443',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559f99b590c2f0_36303443')) {function content_559f99b590c2f0_36303443($_smarty_tpl) {?><div class="social_plugins_div">
	<span class="login_buttons_txt"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Connect with social network<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</span>
	<?php  $_smarty_tpl->tpl_vars["plugin"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["plugin"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aSocPlugins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["plugin"]->key => $_smarty_tpl->tpl_vars["plugin"]->value){
$_smarty_tpl->tpl_vars["plugin"]->_loop = true;
?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/social/?network=<?php echo $_smarty_tpl->tpl_vars['plugin']->value['id'];?>
<?php if ($_smarty_tpl->tpl_vars['user_group_id']->value){?>&amp;user_group_id=<?php echo $_smarty_tpl->tpl_vars['user_group_id']->value;?>
<?php }?>" class="social_login_button slb_<?php echo $_smarty_tpl->tpl_vars['plugin']->value['id'];?>
" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Connect using $plugin.name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"></a>
	<?php } ?>
	<div style="clear:both;"></div>
</div>
<?php }} ?>
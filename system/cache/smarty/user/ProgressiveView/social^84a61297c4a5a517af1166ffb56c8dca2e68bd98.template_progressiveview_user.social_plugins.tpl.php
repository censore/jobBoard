<?php /* Smarty version Smarty-3.1.13, created on 2015-07-09 19:27:51
         compiled from "template_progressiveview_user:templates/_system/social/social_plugins.tpl" */ ?>
<?php /*%%SmartyHeaderCode:494559ee7579c5378-90444334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84a61297c4a5a517af1166ffb56c8dca2e68bd98' => 
    array (
      0 => 'template_progressiveview_user:templates/_system/social/social_plugins.tpl',
      1 => 1386834802,
      2 => 'template_progressiveview_user',
    ),
  ),
  'nocache_hash' => '494559ee7579c5378-90444334',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'label' => 0,
    'social_plugins' => 0,
    'GLOBALS' => 0,
    'plugin' => 0,
    'user_group_id' => 0,
    'shoppingCart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_559ee757a14116_49789656',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559ee757a14116_49789656')) {function content_559ee757a14116_49789656($_smarty_tpl) {?><div class="social_plugins_div">
	<span class="login_buttons_txt">
		<?php if ($_smarty_tpl->tpl_vars['label']->value=='link'){?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Social network you want to link your account with<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:
		<?php }elseif($_smarty_tpl->tpl_vars['label']->value=='login'){?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Social network you want to login with<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:
		<?php }else{ ?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Social network you want to login/join with<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:
		<?php }?>
	</span>
	<span class="social-buttons">
		<?php  $_smarty_tpl->tpl_vars["plugin"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["plugin"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['social_plugins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["plugin"]->key => $_smarty_tpl->tpl_vars["plugin"]->value){
$_smarty_tpl->tpl_vars["plugin"]->_loop = true;
?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/social/?network=<?php echo $_smarty_tpl->tpl_vars['plugin']->value['id'];?>
<?php if ($_smarty_tpl->tpl_vars['user_group_id']->value){?>&amp;user_group_id=<?php echo $_smarty_tpl->tpl_vars['user_group_id']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['shoppingCart']->value){?>&amp;returnToShoppingCart=1<?php }?>" class="social_login_button slb_<?php echo $_smarty_tpl->tpl_vars['plugin']->value['id'];?>
" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Connect using $plugin.name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"></a>
		<?php }
if (!$_smarty_tpl->tpl_vars["plugin"]->_loop) {
?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sorry, there are no active plugins<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php } ?>
	</span>
	<div class="clr"></div>
</div><?php }} ?>
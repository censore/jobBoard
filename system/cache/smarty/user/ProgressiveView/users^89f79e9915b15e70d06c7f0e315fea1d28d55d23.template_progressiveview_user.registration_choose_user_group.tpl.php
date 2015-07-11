<?php /* Smarty version Smarty-3.1.13, created on 2015-07-09 21:08:29
         compiled from "template_progressiveview_user:templates/_system/users/registration_choose_user_group.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18388559efeed412438-77252381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89f79e9915b15e70d06c7f0e315fea1d28d55d23' => 
    array (
      0 => 'template_progressiveview_user:templates/_system/users/registration_choose_user_group.tpl',
      1 => 1354190984,
      2 => 'template_progressiveview_user',
    ),
  ),
  'nocache_hash' => '18388559efeed412438-77252381',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_groups_info' => 0,
    'user_group_info' => 0,
    'METADATA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_559efeed48e1c1_52748475',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559efeed48e1c1_52748475')) {function content_559efeed48e1c1_52748475($_smarty_tpl) {?><h1><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Registration<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
<?php echo $_smarty_tpl->getSubTemplate ("errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please select the appropriate user group<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:
<?php  $_smarty_tpl->tpl_vars['user_group_info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user_group_info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_groups_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user_group_info']->key => $_smarty_tpl->tpl_vars['user_group_info']->value){
$_smarty_tpl->tpl_vars['user_group_info']->_loop = true;
?>
	<p><a href="?user_group_id=<?php echo $_smarty_tpl->tpl_vars['user_group_info']->value['id'];?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['user_group_info']['name'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['user_group_info']['name']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['user_group_info']->value['name'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['user_group_info']['name']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></p>
<?php } ?><?php }} ?>
<?php /* Smarty version Smarty-3.1.13, created on 2015-07-09 21:01:03
         compiled from "template_progressiveview_user:../field_types/display/multilist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9201559efd2f6516c4-16556494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8bc9722bb3fc86fe936126e50e902c754572815' => 
    array (
      0 => 'template_progressiveview_user:../field_types/display/multilist.tpl',
      1 => 1378281714,
      2 => 'template_progressiveview_user',
    ),
  ),
  'nocache_hash' => '9201559efd2f6516c4-16556494',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
    'list_value' => 0,
    'display_list_values' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_559efd2f69e945_14740998',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559efd2f69e945_14740998')) {function content_559efd2f69e945_14740998($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['list_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['value']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['list_value']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['list_value']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['list_value']->key => $_smarty_tpl->tpl_vars['list_value']->value){
$_smarty_tpl->tpl_vars['list_value']->_loop = true;
 $_smarty_tpl->tpl_vars['list_value']->iteration++;
 $_smarty_tpl->tpl_vars['list_value']->last = $_smarty_tpl->tpl_vars['list_value']->iteration === $_smarty_tpl->tpl_vars['list_value']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["multifor"]['last'] = $_smarty_tpl->tpl_vars['list_value']->last;
?>
	<?php if ($_smarty_tpl->tpl_vars['display_list_values']->value[$_smarty_tpl->tpl_vars['list_value']->value]){?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['display_list_values']->value[$_smarty_tpl->tpl_vars['list_value']->value];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['multifor']['last']){?>, <?php }?>
	<?php }else{ ?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['list_value']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['multifor']['last']){?>, <?php }?>
	<?php }?>
<?php } ?><?php }} ?>
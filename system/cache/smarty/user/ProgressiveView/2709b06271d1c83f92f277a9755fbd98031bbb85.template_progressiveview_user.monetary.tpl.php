<?php /* Smarty version Smarty-3.1.13, created on 2015-07-09 21:01:03
         compiled from "template_progressiveview_user:../field_types/display/monetary.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20055559efd2f7bbf17-97325432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2709b06271d1c83f92f277a9755fbd98031bbb85' => 
    array (
      0 => 'template_progressiveview_user:../field_types/display/monetary.tpl',
      1 => 1387450194,
      2 => 'template_progressiveview_user',
    ),
  ),
  'nocache_hash' => '20055559efd2f7bbf17-97325432',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
    'list_currency' => 0,
    'list_currency_item' => 0,
    'amount' => 0,
    'currentCurrencySign' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_559efd2f806f26_81712580',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559efd2f806f26_81712580')) {function content_559efd2f806f26_81712580($_smarty_tpl) {?><?php if (is_numeric($_smarty_tpl->tpl_vars['value']->value['value'])){?><?php  $_smarty_tpl->tpl_vars["list_currency_item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["list_currency_item"]->_loop = false;
 $_smarty_tpl->tpl_vars["list_currency_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list_currency']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["list_currency_item"]->key => $_smarty_tpl->tpl_vars["list_currency_item"]->value){
$_smarty_tpl->tpl_vars["list_currency_item"]->_loop = true;
 $_smarty_tpl->tpl_vars["list_currency_key"]->value = $_smarty_tpl->tpl_vars["list_currency_item"]->key;
?><?php if ($_smarty_tpl->tpl_vars['list_currency_item']->value['sid']==$_smarty_tpl->tpl_vars['value']->value['currency']){?><?php $_smarty_tpl->_capture_stack[0][] = array('default', "currentCurrencySign", null); ob_start(); ?><?php echo $_smarty_tpl->tpl_vars['list_currency_item']->value['currency_sign'];?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php }?><?php } ?><?php $_smarty_tpl->_capture_stack[0][] = array('default', "amount", null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('type'=>"float")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"float"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['value'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"float"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['currencyFormat'][0][0]->currencyFormat(array('amount'=>$_smarty_tpl->tpl_vars['amount']->value,'sign'=>$_smarty_tpl->tpl_vars['currentCurrencySign']->value),$_smarty_tpl);?>
<?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php }} ?>
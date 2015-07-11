<?php /* Smarty version Smarty-3.1.13, created on 2015-07-09 21:01:02
         compiled from "template_progressiveview_user:templates/_system/classifieds/../builder/bf_displaylisting_fieldset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29279559efd2ea192c0-17994355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '602cb0d16dbc36976f297885f7da29ec5ead8776' => 
    array (
      0 => 'template_progressiveview_user:templates/_system/classifieds/../builder/bf_displaylisting_fieldset.tpl',
      1 => 1379512052,
      2 => 'template_progressiveview_user',
    ),
  ),
  'nocache_hash' => '29279559efd2ea192c0-17994355',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fieldsHolderID' => 0,
    'fields_active' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_559efd2ea2f768_72533183',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559efd2ea2f768_72533183')) {function content_559efd2ea2f768_72533183($_smarty_tpl) {?><fieldset id="<?php echo $_smarty_tpl->tpl_vars['fieldsHolderID']->value;?>
" class="active-fields sortable-column">
	<legend class="fh-legend"><?php echo $_smarty_tpl->tpl_vars['fieldsHolderID']->value;?>
&nbsp;</legend>
	<span class="fh-status">&nbsp;</span>
	<?php  $_smarty_tpl->tpl_vars['theField'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theField']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields_active']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theField']->key => $_smarty_tpl->tpl_vars['theField']->value){
$_smarty_tpl->tpl_vars['theField']->_loop = true;
?>
		<?php echo $_smarty_tpl->getSubTemplate ("../builder/bf_displaylisting_fieldsblocks.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php } ?>
</fieldset>
<div class="clr"></div>

<?php }} ?>
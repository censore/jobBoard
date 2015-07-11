<?php /* Smarty version Smarty-3.1.13, created on 2015-07-09 21:01:02
         compiled from "template_progressiveview_user:../builder/bf_displaylisting_fieldsblocks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21676559efd2ea915c7-77309607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ab1524d74e4a6e67e8f0cd610049508462f3d77' => 
    array (
      0 => 'template_progressiveview_user:../builder/bf_displaylisting_fieldsblocks.tpl',
      1 => 1385360834,
      2 => 'template_progressiveview_user',
    ),
  ),
  'nocache_hash' => '21676559efd2ea915c7-77309607',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theField' => 0,
    'listing' => 0,
    'newCustomHtml' => 0,
    'evalResult' => 0,
    'listingTypeID' => 0,
    'METADATA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_559efd2ed12229_67323925',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559efd2ed12229_67323925')) {function content_559efd2ed12229_67323925($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include 'C:\\OpenServer\\domains\\board\\system\\ext\\Smarty\\libs\\plugins\\modifier.regex_replace.php';
?><?php if ($_smarty_tpl->tpl_vars['theField']->value['type']=="complex"){?>
	<?php if ($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['theField']->value['id']]){?>
		<div class="displayFieldBlock">
			<h3><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['theField']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</h3>
			<div class="displayField"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>$_smarty_tpl->tpl_vars['theField']->value['id'],'customHtml'=>$_smarty_tpl->tpl_vars['theField']->value['html']),$_smarty_tpl);?>
</div>
		</div>
	<?php }?>
<?php }elseif($_smarty_tpl->tpl_vars['theField']->value['type']=="geo"&&$_smarty_tpl->tpl_vars['theField']->value['parentID']){?>
<?php if (!empty($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['theField']->value['parentID']][$_smarty_tpl->tpl_vars['theField']->value['id']])){?>
<div class="displayFieldBlock">
	<h3><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['theField']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</h3>
	<div class="displayField"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>$_smarty_tpl->tpl_vars['theField']->value['id'],'parent'=>$_smarty_tpl->tpl_vars['theField']->value['parentID']),$_smarty_tpl);?>
</div>
</div>
<?php }?>
<?php }elseif($_smarty_tpl->tpl_vars['theField']->value['type']=="location"){?>
	<?php if ($_smarty_tpl->tpl_vars['theField']->value['html']){?>
	<div class="displayFieldBlock">
		<h3><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['theField']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</h3>
		<div class="displayField">
			<?php $_smarty_tpl->_capture_stack[0][] = array('EvalReplacePattern', null, null); ob_start(); ?>/{([\w\d.]+)}/i<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('EvalReplaceReplacement', null, null); ob_start(); ?>{display property="\1" parent=$theField.id}<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php $_smarty_tpl->tpl_vars["newCustomHtml"] = new Smarty_variable(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['theField']->value['html'],Smarty::$_smarty_vars['capture']['EvalReplacePattern'],Smarty::$_smarty_vars['capture']['EvalReplaceReplacement']), null, 0);?>
			<?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['newCustomHtml']->value, $_smarty_tpl->smarty, $_smarty_tpl);$_smarty_tpl->assign('evalResult',$_template->fetch()); ?>
			<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['evalResult']->value,"/(^[\,\s]+)|(\s,)|([\,\s]+"."$".")/im",'');?>
&nbsp;
		</div>
	</div>
	<?php }?>
<?php }elseif($_smarty_tpl->tpl_vars['theField']->value['b_field_sid']=="location"||$_smarty_tpl->tpl_vars['theField']->value['id']=="location"){?>
	<?php if ($_smarty_tpl->tpl_vars['theField']->value['html']){?>
	<div class="displayFieldBlock">
		<h3><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Location<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</h3>
		<div class="displayField">
			<?php $_smarty_tpl->_capture_stack[0][] = array('EvalReplacePattern', null, null); ob_start(); ?>/{([\w\d.]+)}/i<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('EvalReplaceReplacement', null, null); ob_start(); ?>{display property="\1"}<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php $_smarty_tpl->tpl_vars["newCustomHtml"] = new Smarty_variable(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['theField']->value['html'],Smarty::$_smarty_vars['capture']['EvalReplacePattern'],Smarty::$_smarty_vars['capture']['EvalReplaceReplacement']), null, 0);?>
			<?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['newCustomHtml']->value, $_smarty_tpl->smarty, $_smarty_tpl);$_smarty_tpl->assign('evalResult',$_template->fetch()); ?>
			<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['evalResult']->value,"/(^[\,\s]+)|(\s,)|([\,\s]+"."$".")/im",'');?>
&nbsp;
		</div>
	</div>
	<?php }?>
<?php }elseif($_smarty_tpl->tpl_vars['listingTypeID']->value=='Resume'&&($_smarty_tpl->tpl_vars['theField']->value['b_field_sid']=="desiredSalary"||$_smarty_tpl->tpl_vars['theField']->value['id']=="desiredSalary")&&(!empty($_smarty_tpl->tpl_vars['listing']->value['DesiredSalaryType'])||!empty($_smarty_tpl->tpl_vars['listing']->value['DesiredSalary']['value']))){?>
	<?php if ($_smarty_tpl->tpl_vars['theField']->value['html']){?>
	<div class="displayFieldBlock">
		<h3><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Desired Salary<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</h3>
		<div class="displayField">
			<?php $_smarty_tpl->_capture_stack[0][] = array('EvalReplacePattern', null, null); ob_start(); ?>/{([\w\d.]+)}/i<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('EvalReplaceReplacement', null, null); ob_start(); ?>{display property="\1"}<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php $_smarty_tpl->tpl_vars["newCustomHtml"] = new Smarty_variable(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['theField']->value['html'],Smarty::$_smarty_vars['capture']['EvalReplacePattern'],Smarty::$_smarty_vars['capture']['EvalReplaceReplacement']), null, 0);?>
			<?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['newCustomHtml']->value, $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>
		</div>
	</div>
	<?php }?>
<?php }elseif($_smarty_tpl->tpl_vars['listingTypeID']->value=='Job'&&($_smarty_tpl->tpl_vars['theField']->value['b_field_sid']=="customSalary"||$_smarty_tpl->tpl_vars['theField']->value['id']=="customSalary")&&(!empty($_smarty_tpl->tpl_vars['listing']->value['SalaryType'])||!empty($_smarty_tpl->tpl_vars['listing']->value['Salary']['value']))){?>
	<?php if ($_smarty_tpl->tpl_vars['theField']->value['html']){?>
	<div class="displayFieldBlock">
		<h3><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Salary<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</h3>
		<div class="displayField">
			<?php $_smarty_tpl->_capture_stack[0][] = array('EvalReplacePattern', null, null); ob_start(); ?>/{([\w\d.]+)}/i<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('EvalReplaceReplacement', null, null); ob_start(); ?>{display property="\1"}<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php $_smarty_tpl->tpl_vars["newCustomHtml"] = new Smarty_variable(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['theField']->value['html'],Smarty::$_smarty_vars['capture']['EvalReplacePattern'],Smarty::$_smarty_vars['capture']['EvalReplaceReplacement']), null, 0);?>
			<?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['newCustomHtml']->value, $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>
		</div>
	</div>
	<?php }?>
<?php }elseif($_smarty_tpl->tpl_vars['theField']->value['html']||substr($_smarty_tpl->tpl_vars['theField']->value['b_field_sid'],0,9)=="htmlBlock"){?>
	<?php if ($_smarty_tpl->tpl_vars['theField']->value['html']){?>
	<div class="displayFieldBlock">
		<?php $_smarty_tpl->_capture_stack[0][] = array('EvalReplacePattern', null, null); ob_start(); ?>/{([\w\d.]+)}/i<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php $_smarty_tpl->_capture_stack[0][] = array('EvalReplaceReplacement', null, null); ob_start(); ?>{display property="\1"}<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php $_smarty_tpl->tpl_vars["newCustomHtml"] = new Smarty_variable(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['theField']->value['html'],Smarty::$_smarty_vars['capture']['EvalReplacePattern'],Smarty::$_smarty_vars['capture']['EvalReplaceReplacement']), null, 0);?>
		<?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['newCustomHtml']->value, $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>
	</div>
	<?php }?>
<?php }elseif($_smarty_tpl->tpl_vars['theField']->value['b_field_sid']=="id"||$_smarty_tpl->tpl_vars['theField']->value['id']=="id"){?>
	<div class="displayFieldBlock">
		<h3><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['listingTypeID']->value;?>
 ID<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</h3>
		<div class="displayField"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['listing']['id'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['listing']['id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['listing']['id']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
	</div>
<?php }elseif($_smarty_tpl->tpl_vars['theField']->value['b_field_sid']=="views"||$_smarty_tpl->tpl_vars['theField']->value['id']=="views"){?>
	<div class="displayFieldBlock">
		<h3><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['listingTypeID']->value;?>
 Views<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</h3>
		<div class="displayField"><?php echo $_smarty_tpl->tpl_vars['listing']->value['views'];?>
</div>
	</div>
<?php }elseif($_smarty_tpl->tpl_vars['theField']->value['b_field_sid']=="posted"||$_smarty_tpl->tpl_vars['theField']->value['id']=="posted"){?>
	<div class="displayFieldBlock">
		<h3><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Posted<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</h3>
		<div class="displayField"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['listing']['activation_date'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['listing']['activation_date']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['listing']->value['activation_date'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['listing']['activation_date']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
	</div>
<?php }else{ ?>
	<?php if ((!empty($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['theField']->value['id']])&&!is_array($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['theField']->value['id']]))||(is_array($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['theField']->value['id']])&&in_array($_smarty_tpl->tpl_vars['theField']->value['type'],array('video','file'))&&!empty($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['theField']->value['id']]['file_url']))||(!empty($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['theField']->value['id']])&&is_array($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['theField']->value['id']])&&!in_array($_smarty_tpl->tpl_vars['theField']->value['type'],array('video','file')))){?>
		<div class="displayFieldBlock">
			<h3><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['theField']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</h3>
			<div class="displayField"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>$_smarty_tpl->tpl_vars['theField']->value['id']),$_smarty_tpl);?>
</div>
		</div>
	<?php }?>
<?php }?>
<?php }} ?>
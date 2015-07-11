<?php /* Smarty version Smarty-3.1.13, created on 2015-07-09 19:27:49
         compiled from "template_progressiveview_user:../field_types/search/location.like.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25586559ee755949135-98157236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4c3e18921ce5845865dd5e90441ac957519b61e' => 
    array (
      0 => 'template_progressiveview_user:../field_types/search/location.like.tpl',
      1 => 1390977516,
      2 => 'template_progressiveview_user',
    ),
  ),
  'nocache_hash' => '25586559ee755949135-98157236',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'radiusArr' => 0,
    'radius' => 0,
    'GLOBALS' => 0,
    'value' => 0,
    'enable_search_by_radius' => 0,
    'searchWithin' => 0,
    'select_box_field_distance' => 0,
    'useAutocomplete' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_559ee7559eda42_97877381',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559ee7559eda42_97877381')) {function content_559ee7559eda42_97877381($_smarty_tpl) {?><?php $_smarty_tpl->_capture_stack[0][] = array("select_box_field_distance", null, null); ob_start(); ?>
	<?php $_smarty_tpl->tpl_vars['radiusArr'] = new Smarty_variable(explode(',','0,10,20,30,40,50'), null, 0);?>
	<select class="searchGeoDistance" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[location][radius]">
		<?php  $_smarty_tpl->tpl_vars['radius'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['radius']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['radiusArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['radius']->key => $_smarty_tpl->tpl_vars['radius']->value){
$_smarty_tpl->tpl_vars['radius']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['radius']->value==0){?>
				<option value=""><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Within $radius <?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['radius_search_unit'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
			<?php }else{ ?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['radius']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value['location']['radius']==$_smarty_tpl->tpl_vars['radius']->value){?>selected="selected"<?php }?> ><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Within $radius <?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['radius_search_unit'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
			<?php }?>
		<?php } ?>
	</select>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->tpl_vars["select_box_field_distance"] = new Smarty_variable(((string)Smarty::$_smarty_vars['capture']['select_box_field_distance']), null, 0);?>

<input type="text"  id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[location][value]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['location']['value'];?>
" />
<?php if ($_smarty_tpl->tpl_vars['enable_search_by_radius']->value){?>
	<?php if ($_smarty_tpl->tpl_vars['searchWithin']->value){?>
		<?php echo $_smarty_tpl->tpl_vars['select_box_field_distance']->value;?>

	<?php }else{ ?>
		<input type="hidden"  name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[location][radius]" value="10" />
	<?php }?>
<?php }?>

<script type="text/javascript">
$(function() {
	var defaultInputTextFieldValue = "<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
City, State or Zip Code<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo strtr(ob_get_clean(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));} array_pop($_smarty_tpl->smarty->_tag_stack);?>
";
	var inputTextFieldId           = "<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
";
	
	if ($("#" + inputTextFieldId).val() == "") {
		$("#" + inputTextFieldId).val(defaultInputTextFieldValue);
		$("#" + inputTextFieldId).addClass("location");
	}
	$("#" + inputTextFieldId).focus(function() {
		if ($("#" + inputTextFieldId).val() == defaultInputTextFieldValue) {
			$("#" + inputTextFieldId).val("");
		}
	});

	$("#" + inputTextFieldId).blur(function() {
		$("#" + inputTextFieldId).removeClass("location");
		if ($("#" + inputTextFieldId).val() == "") {
			$("#" + inputTextFieldId).val(defaultInputTextFieldValue);
			$("#" + inputTextFieldId).addClass("location");
		}
	});

	$("#search_form").submit(function() {
		if ($("#Location").val() == defaultInputTextFieldValue) {
			$("#Location").val("");
		}
	});

	$("#quickSearch").submit(function() {
		if ($("#Location").val() == defaultInputTextFieldValue) {
			$("#Location").val("");
		}
	});

	$("#quickSearchForm").submit(function() {
		if ($("#Location").val() == defaultInputTextFieldValue) {
			$("#Location").val("");
		}
	});
});
</script>


<?php if ($_smarty_tpl->tpl_vars['useAutocomplete']->value==1){?>
	<?php $_smarty_tpl->tpl_vars["parentID"] = new Smarty_variable(false, null, 0);?>
	<?php echo $_smarty_tpl->getSubTemplate ('../field_types/search/autocomplete.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>

<?php }} ?>
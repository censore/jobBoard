<?php /* Smarty version Smarty-3.1.13, created on 2015-07-09 21:01:02
         compiled from "template_progressiveview_user:../builder/bf_displaylisting_fieldsholders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13746559efd2e7ebf18-55880435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c92b056a5fb68f5991d590d2375dcc4957011dd7' => 
    array (
      0 => 'template_progressiveview_user:../builder/bf_displaylisting_fieldsholders.tpl',
      1 => 1377698508,
      2 => 'template_progressiveview_user',
    ),
  ),
  'nocache_hash' => '13746559efd2e7ebf18-55880435',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_layout' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_559efd2e885901_62267504',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559efd2e885901_62267504')) {function content_559efd2e885901_62267504($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['display_layout']->value=="2cols-wide"){?>
	<div class="narrow-col-wrapper">
		<div  class="narrow-col">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"builder",'function'=>"get_fields",'fieldsHolderID'=>"col-narrow-left"),$_smarty_tpl);?>

		</div>
		<div  class="narrow-col">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"builder",'function'=>"get_fields",'fieldsHolderID'=>"col-narrow-right"),$_smarty_tpl);?>

		</div>
		<div class="clr"></div>
	</div>
	<div class="clr"></div>
	<?php echo Smarty::$_smarty_vars['capture']['middleFHContent'];?>

	<div class="clr"></div>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"builder",'function'=>"get_fields",'fieldsHolderID'=>"col-wide"),$_smarty_tpl);?>


<?php }elseif($_smarty_tpl->tpl_vars['display_layout']->value=="1col-2rows"){?>
	<div class="narrow-col narrow-1col">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"builder",'function'=>"get_fields",'fieldsHolderID'=>"col-narrow"),$_smarty_tpl);?>

	</div>
	<?php echo Smarty::$_smarty_vars['capture']['middleFHContent'];?>

	<div class="clr"></div>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"builder",'function'=>"get_fields",'fieldsHolderID'=>"col-wide"),$_smarty_tpl);?>


<?php }elseif($_smarty_tpl->tpl_vars['display_layout']->value=="wide-2cols"){?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"builder",'function'=>"get_fields",'fieldsHolderID'=>"col-wide"),$_smarty_tpl);?>

	<div class="clr"></div>
	<?php echo Smarty::$_smarty_vars['capture']['middleFHContent'];?>

	<div class="clr"></div>
	<div class="narrow-col-wrapper wrap-2">
		<div class="narrow-col">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"builder",'function'=>"get_fields",'fieldsHolderID'=>"col-narrow-left"),$_smarty_tpl);?>

		</div>
		<div class="narrow-col">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"builder",'function'=>"get_fields",'fieldsHolderID'=>"col-narrow-right"),$_smarty_tpl);?>

		</div>
		<div class="clr"></div>
	</div>

<?php }elseif($_smarty_tpl->tpl_vars['display_layout']->value=="2cols"){?>
	<div class="clr"></div>
	<?php echo Smarty::$_smarty_vars['capture']['middleFHContent'];?>

	<div class="clr"></div>
	<div class="narrow-col-wrapper">
		<div class="narrow-col">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"builder",'function'=>"get_fields",'fieldsHolderID'=>"col-narrow-left"),$_smarty_tpl);?>

		</div>
		<div class="narrow-col">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"builder",'function'=>"get_fields",'fieldsHolderID'=>"col-narrow-right"),$_smarty_tpl);?>

		</div>
		<div class="clr"></div>
	</div>

<?php }else{ ?>
	<div class="clr"></div>
	<?php echo Smarty::$_smarty_vars['capture']['middleFHContent'];?>

	<div class="clr"></div>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"builder",'function'=>"get_fields",'fieldsHolderID'=>"col-wide"),$_smarty_tpl);?>


<?php }?><?php }} ?>
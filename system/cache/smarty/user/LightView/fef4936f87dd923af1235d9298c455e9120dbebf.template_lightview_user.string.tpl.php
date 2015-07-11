<?php /* Smarty version Smarty-3.1.13, created on 2015-07-10 08:08:52
         compiled from "template_lightview_user:../field_types/search/string.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24625559f99b46af135-78796893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fef4936f87dd923af1235d9298c455e9120dbebf' => 
    array (
      0 => 'template_lightview_user:../field_types/search/string.tpl',
      1 => 1389340098,
      2 => 'template_lightview_user',
    ),
  ),
  'nocache_hash' => '24625559f99b46af135-78796893',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'value' => 0,
    'useAutocomplete' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_559f99b46d6c19_93757654',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559f99b46d6c19_93757654')) {function content_559f99b46d6c19_93757654($_smarty_tpl) {?><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[equal]" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="searchString" value="<?php if ($_smarty_tpl->tpl_vars['value']->value['multi_like_and'][0]){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['multi_like_and'][0], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['equal'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"/>

<?php if ($_smarty_tpl->tpl_vars['useAutocomplete']->value==1){?>
	<?php echo $_smarty_tpl->getSubTemplate ('../field_types/search/autocomplete.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?><?php }} ?>
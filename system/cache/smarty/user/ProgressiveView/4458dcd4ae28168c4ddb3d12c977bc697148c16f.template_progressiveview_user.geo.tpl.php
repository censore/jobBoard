<?php /* Smarty version Smarty-3.1.13, created on 2015-07-09 21:08:39
         compiled from "template_progressiveview_user:../field_types/input/geo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16330559efef799cd38-70992535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4458dcd4ae28168c4ddb3d12c977bc697148c16f' => 
    array (
      0 => 'template_progressiveview_user:../field_types/input/geo.tpl',
      1 => 1389340098,
      2 => 'template_progressiveview_user',
    ),
  ),
  'nocache_hash' => '16330559efef799cd38-70992535',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'parentID' => 0,
    'id' => 0,
    'complexField' => 0,
    'value' => 0,
    'complexStep' => 0,
    'useAutocomplete' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_559efef79f1143_86431405',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559efef79f1143_86431405')) {function content_559efef79f1143_86431405($_smarty_tpl) {?><input id="<?php if ($_smarty_tpl->tpl_vars['parentID']->value){?><?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>" type="text" class="inputGeo <?php if ($_smarty_tpl->tpl_vars['complexField']->value){?>complexField<?php }?>" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value){?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
]<?php }elseif($_smarty_tpl->tpl_vars['parentID']->value){?><?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
]<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>" />

<?php if ($_smarty_tpl->tpl_vars['useAutocomplete']->value==1){?>
	<?php echo $_smarty_tpl->getSubTemplate ('../field_types/search/autocomplete.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?><?php }} ?>
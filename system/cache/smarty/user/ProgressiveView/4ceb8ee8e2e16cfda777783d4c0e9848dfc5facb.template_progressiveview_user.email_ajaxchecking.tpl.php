<?php /* Smarty version Smarty-3.1.13, created on 2015-07-09 21:08:39
         compiled from "template_progressiveview_user:../field_types/input/email_ajaxchecking.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21625559efef72bf853-92185440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ceb8ee8e2e16cfda777783d4c0e9848dfc5facb' => 
    array (
      0 => 'template_progressiveview_user:../field_types/input/email_ajaxchecking.tpl',
      1 => 1373907704,
      2 => 'template_progressiveview_user',
    ),
  ),
  'nocache_hash' => '21625559efef72bf853-92185440',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
    'complexField' => 0,
    'id' => 0,
    'complexStep' => 0,
    'isRequireConfirmation' => 0,
    'editProfile' => 0,
    'confirmed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_559efef732a698_80676073',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559efef732a698_80676073')) {function content_559efef732a698_80676073($_smarty_tpl) {?><input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="inputString <?php if ($_smarty_tpl->tpl_vars['complexField']->value){?>complexField<?php }?>" name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value){?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
][original]<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[original]<?php }?>" onblur="checkField($(this), '<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
')"/><span class="aMessage" id="am_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"></span>
<?php if ($_smarty_tpl->tpl_vars['isRequireConfirmation']->value==1){?>
<br/><input type="text" <?php if ($_smarty_tpl->tpl_vars['editProfile']->value==1){?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php }else{ ?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['confirmed']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php }?> class="inputString" name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value){?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
][confirmed]<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[confirmed]<?php }?>" style="margin-top:2px;"/><br />
<span style="font-size:11px"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Confirm E-mail<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
<?php }?><?php }} ?>
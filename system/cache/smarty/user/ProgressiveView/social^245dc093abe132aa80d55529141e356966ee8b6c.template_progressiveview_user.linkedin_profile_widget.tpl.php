<?php /* Smarty version Smarty-3.1.13, created on 2015-07-09 21:01:04
         compiled from "template_progressiveview_user:templates/_system/social/linkedin_profile_widget.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27489559efd30160d52-09604970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '245dc093abe132aa80d55529141e356966ee8b6c' => 
    array (
      0 => 'template_progressiveview_user:templates/_system/social/linkedin_profile_widget.tpl',
      1 => 1359986370,
      2 => 'template_progressiveview_user',
    ),
  ),
  'nocache_hash' => '27489559efd30160d52-09604970',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'companyName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_559efd3016bb01_40930968',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559efd3016bb01_40930968')) {function content_559efd3016bb01_40930968($_smarty_tpl) {?><div class="in_ProfileWidget">
    <script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
    <script type="IN/CompanyProfile" data-id="<?php echo $_smarty_tpl->tpl_vars['companyName']->value;?>
" data-format="hover"></script>
</div>
<div class="clr"></div><?php }} ?>
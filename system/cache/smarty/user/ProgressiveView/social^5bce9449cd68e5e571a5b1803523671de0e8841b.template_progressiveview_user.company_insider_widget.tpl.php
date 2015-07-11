<?php /* Smarty version Smarty-3.1.13, created on 2015-07-09 21:08:13
         compiled from "template_progressiveview_user:templates/_system/social/company_insider_widget.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6439559efedd9df737-23063653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bce9449cd68e5e571a5b1803523671de0e8841b' => 
    array (
      0 => 'template_progressiveview_user:templates/_system/social/company_insider_widget.tpl',
      1 => 1359986370,
      2 => 'template_progressiveview_user',
    ),
  ),
  'nocache_hash' => '6439559efedd9df737-23063653',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'companyName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_559efedd9e6880_33113322',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559efedd9e6880_33113322')) {function content_559efedd9e6880_33113322($_smarty_tpl) {?><div class="in_CompanyInsiderWidget">
    <script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
    <script type="IN/CompanyInsider" data-id="<?php echo $_smarty_tpl->tpl_vars['companyName']->value;?>
" data-modules="innetwork,newhires,jobchanges"></script>
</div><?php }} ?>
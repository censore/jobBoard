<?php /* Smarty version Smarty-3.1.13, created on 2015-07-09 21:01:04
         compiled from "template_progressiveview_user:templates/_system/social/facebook_like_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30342559efd302a6790-96499941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcd6bce174f9f193aaa2b79c801d2ac5e49f8ac0' => 
    array (
      0 => 'template_progressiveview_user:templates/_system/social/facebook_like_button.tpl',
      1 => 1379082198,
      2 => 'template_progressiveview_user',
    ),
  ),
  'nocache_hash' => '30342559efd302a6790-96499941',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_559efd302ae6d0_57528754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559efd302ae6d0_57528754')) {function content_559efd302ae6d0_57528754($_smarty_tpl) {?><div class="in_share">
	<div id="fb-root"></div>
	<script type="text/javascript" src="https://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" layout="button_count" show_faces="false" width="72" font="arial"></fb:like>
</div><?php }} ?>
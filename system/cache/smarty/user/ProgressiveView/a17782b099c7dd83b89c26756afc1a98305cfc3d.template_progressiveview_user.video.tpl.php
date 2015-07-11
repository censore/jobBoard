<?php /* Smarty version Smarty-3.1.13, created on 2015-07-09 21:08:13
         compiled from "template_progressiveview_user:../field_types/display/video.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24550559efedd92ebe6-93703884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a17782b099c7dd83b89c26756afc1a98305cfc3d' => 
    array (
      0 => 'template_progressiveview_user:../field_types/display/video.tpl',
      1 => 1378720756,
      2 => 'template_progressiveview_user',
    ),
  ),
  'nocache_hash' => '24550559efedd92ebe6-93703884',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_559efedd965b76_16021789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559efedd965b76_16021789')) {function content_559efedd965b76_16021789($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['value']->value['file_id'])&&!empty($_smarty_tpl->tpl_vars['value']->value['file_url'])){?>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/files/video/flowplayer-3.2.12.min.js"></script>
	<a href="<?php echo rawurlencode($_smarty_tpl->tpl_vars['value']->value['file_url']);?>
" id="player_<?php echo $_smarty_tpl->tpl_vars['value']->value['file_id'];?>
" class="player"></a>
	<script type="text/javascript">
		$f("player_<?php echo $_smarty_tpl->tpl_vars['value']->value['file_id'];?>
", "<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/files/video/flowplayer-3.2.16.swf",  {
			clip: {
				url: "<?php echo rawurlencode($_smarty_tpl->tpl_vars['value']->value['file_url']);?>
",
				autoPlay: false,
				autoBuffering: true,
				scaling: "fit"
			},
			plugins: {
				// default controls with the same background color as the page background
				controls:  {
					backgroundColor: '#1c1c1c',
					backgroundGradient: 'none',
					all:false,
					scrubber:true,
					fullscreen:true,
					play:true,
					volume:true,
					mute:true,
					height:30,
					progressColor: '#6d9e6b',
					bufferColor: '#333333',
					autoHide: false
				},
				// time display positioned into upper right corner
				time: {
					url: "<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/files/video/flowplayer.controls-3.2.15.swf",
					top:0,
					backgroundGradient: 'none',
					backgroundColor: 'transparent',
					buttonColor: '#ffffff',
					all: false,
					time: true,
					height:20,
					right:0,
					width:100,
					autoHide: false
				}
			},
			// canvas coloring and custom gradient setting
			canvas: {
				backgroundColor:'#000000',
				backgroundGradient: [0.1, 0]
			}
		});
	</script>
<?php }?><?php }} ?>
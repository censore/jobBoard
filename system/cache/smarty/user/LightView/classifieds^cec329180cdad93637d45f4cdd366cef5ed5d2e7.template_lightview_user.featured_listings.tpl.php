<?php /* Smarty version Smarty-3.1.13, created on 2015-07-10 08:08:55
         compiled from "template_lightview_user:templates/_system/classifieds/featured_listings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14241559f99b7438687-06753039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cec329180cdad93637d45f4cdd366cef5ed5d2e7' => 
    array (
      0 => 'template_lightview_user:templates/_system/classifieds/featured_listings.tpl',
      1 => 1387805226,
      2 => 'template_lightview_user',
    ),
  ),
  'nocache_hash' => '14241559f99b7438687-06753039',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listings' => 0,
    'GLOBALS' => 0,
    'listing' => 0,
    'number_of_cols' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_559f99b74ba3c5_57904571',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559f99b74ba3c5_57904571')) {function content_559f99b74ba3c5_57904571($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include 'C:\\OpenServer\\domains\\board\\system\\ext\\Smarty\\libs\\plugins\\modifier.regex_replace.php';
?><?php if ($_smarty_tpl->tpl_vars['listings']->value){?>
	<?php  $_smarty_tpl->tpl_vars['listing'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listing']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['listings_block']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['listing']->key => $_smarty_tpl->tpl_vars['listing']->value){
$_smarty_tpl->tpl_vars['listing']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['listings_block']['iteration']++;
?>
		<div class="featuredListings">
			<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/display-job/<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
/<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['listing']->value['Title'],"/[\\/\\\:*?\"<>|%#"."$"."\s]/","-");?>
.html"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['Title'], ENT_QUOTES, 'UTF-8', true);?>
</a><br />
			<span class="green">
				<?php echo SJB_LocationManager::locationFormat(array('location'=>$_smarty_tpl->tpl_vars['listing']->value['Location'],'format'=>"short"),$_smarty_tpl);?>

				<br /><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['user']['CompanyName'], ENT_QUOTES, 'UTF-8', true);?>

			</span>
		</div>
		<?php if (!($_smarty_tpl->getVariable('smarty')->value['foreach']['listings_block']['iteration'] % $_smarty_tpl->tpl_vars['number_of_cols']->value)){?><div class="clr"><br/></div><?php }?>
	<?php } ?>
<?php }else{ ?>
	<div class="text-center"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
There are no listings with requested parameters in the system.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
<?php }?><?php }} ?>
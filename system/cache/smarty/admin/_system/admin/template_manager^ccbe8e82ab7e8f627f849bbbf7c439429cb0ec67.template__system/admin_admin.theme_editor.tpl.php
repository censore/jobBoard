<?php /* Smarty version Smarty-3.1.13, created on 2015-07-10 08:08:37
         compiled from "template__system/admin_admin:c:\openserver\domains\board\templates\_system\admin\template_manager\theme_editor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19983559f99a59591a4-20551288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccbe8e82ab7e8f627f849bbbf7c439429cb0ec67' => 
    array (
      0 => 'template__system/admin_admin:c:\\openserver\\domains\\board\\templates\\_system\\admin\\template_manager\\theme_editor.tpl',
      1 => 1381852694,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '19983559f99a59591a4-20551288',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme' => 0,
    'ERROR' => 0,
    'theme_list' => 0,
    'theme_name' => 0,
    'counter' => 0,
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_559f99a5ace074_31016959',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559f99a5ace074_31016959')) {function content_559f99a5ace074_31016959($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Themes<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>



	<script>
		function not(){
		document.img1.src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
themes/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
.png"
		}
		function imgOn(imgName) {
		if (document.images) {
		document.img1.src = imgName;        }}
	</script>


<h1><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
/icons/wand32.png" border="0" alt="" class="titleicon"/>Themes</h1>
	<?php if ($_smarty_tpl->tpl_vars['ERROR']->value=="ALREADY_EXISTS"){?>
		<p class="error">Theme already exists.</p>
	<?php }elseif($_smarty_tpl->tpl_vars['ERROR']->value=="EMPTY_NAME"){?>
		<p class="error">Please enter a name of the New Theme</p>
	<?php }elseif($_smarty_tpl->tpl_vars['ERROR']->value=="ACCESS_DENIED"){?>
		<p class="error">You don't have permissions for it. This is a Demo version of the software.</p>
	<?php }?>
	
	<form onsubmit="disableSubmitButton('submitCreate');">
		<fieldset>
			<legend>Create Theme</legend>
			<input type="hidden" name="action" value="copy_theme" />
			<table>
				<tr>
					<td>
						New Theme Name<br/>
						<input type="text" name="new_theme" value="" />
					</td>
					<td>
						Copy from<br/>
						<select name="copy_from_theme">
							<?php  $_smarty_tpl->tpl_vars["theme_name"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["theme_name"]->_loop = false;
 $_smarty_tpl->tpl_vars["theme_system_name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['theme_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["theme_name"]->key => $_smarty_tpl->tpl_vars["theme_name"]->value){
$_smarty_tpl->tpl_vars["theme_name"]->_loop = true;
 $_smarty_tpl->tpl_vars["theme_system_name"]->value = $_smarty_tpl->tpl_vars["theme_name"]->key;
?>
								<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['theme']->value==$_smarty_tpl->tpl_vars['theme_name']->value){?> SELECTED<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
							<?php } ?>
						</select>
					</td>
					<td valign="bottom">
						<input type="submit" value="Create" class="greenButton" id="submitCreate" />
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
	<div class="clr"><br/></div>
	
	<div id="themes">
	<table>
		<thead>
			<tr>
				<th>Theme Name</th>
				<th>Current Theme</th>
				<th class="actions">Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php $_smarty_tpl->tpl_vars["counter"] = new Smarty_variable(0, null, 0);?>
			<?php  $_smarty_tpl->tpl_vars["theme_name"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["theme_name"]->_loop = false;
 $_smarty_tpl->tpl_vars["theme_system_name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['theme_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["theme_name"]->key => $_smarty_tpl->tpl_vars["theme_name"]->value){
$_smarty_tpl->tpl_vars["theme_name"]->_loop = true;
 $_smarty_tpl->tpl_vars["theme_system_name"]->value = $_smarty_tpl->tpl_vars["theme_name"]->key;
?>
				<?php $_smarty_tpl->tpl_vars["counter"] = new Smarty_variable($_smarty_tpl->tpl_vars['counter']->value+1, null, 0);?>
				<tr class="<?php if ((1 & $_smarty_tpl->tpl_vars['counter']->value)){?>oddrow<?php }else{ ?>evenrow<?php }?>" onmouseover="document.getElementById('pic').src='<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/templates/<?php echo $_smarty_tpl->tpl_vars['theme_name']->value;?>
/main/images/<?php echo $_smarty_tpl->tpl_vars['theme_name']->value;?>
.png'" onmouseout="document.getElementById('pic').src='<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/templates/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/main/images/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
.png'">
					<td><?php echo $_smarty_tpl->tpl_vars['theme_name']->value;?>
</td>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['theme']->value!=$_smarty_tpl->tpl_vars['theme_name']->value){?>
							<a href="?theme=<?php echo $_smarty_tpl->tpl_vars['theme_name']->value;?>
" class="grayButton">Make current</a>
						<?php }else{ ?>
							<strong>Current</strong>
						<?php }?>
					</td>
					<td><?php if ($_smarty_tpl->tpl_vars['theme_name']->value!='default'){?><a href="?action=delete_theme&theme_name=<?php echo $_smarty_tpl->tpl_vars['theme_name']->value;?>
" onclick="return confirm('Are you sure you want to delete this Theme?')" title="Delete" class="deletebutton">Delete</a><?php }?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	</div>
	<div id="themesPic"><img src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/templates/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/main/images/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
.png" id="pic" /></div><?php }} ?>
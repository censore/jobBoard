<?php /* Smarty version Smarty-3.1.13, created on 2015-07-09 19:28:02
         compiled from "template__system/admin_admin:c:\openserver\domains\board\templates\_system\admin\menu\admin_left_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2017559ee762b553c7-29211450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89b030e3ecb43307dfc1ef84d5dc4e3c24734746' => 
    array (
      0 => 'template__system/admin_admin:c:\\openserver\\domains\\board\\templates\\_system\\admin\\menu\\admin_left_menu.tpl',
      1 => 1359707440,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '2017559ee762b553c7-29211450',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'left_admin_menu' => 0,
    'section_items' => 0,
    'section' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_559ee762bc9df0_82279117',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559ee762bc9df0_82279117')) {function content_559ee762bc9df0_82279117($_smarty_tpl) {?><script language="JavaScript" type="text/javascript">
	
	function trim(str)
	{
		while (str.substring(0, 1) == " ")
			str = str.substring(1, str.length);
		while (str.substring(str.length, 1) == " ")
			str = str.substr(0, str.length - 1);
		return str;
	}

	function get_cookie(rname)
	{
		var tmp = "" + document.cookie;
		var result = "";
		while (tmp.length) {
			splitter = tmp.indexOf(";");
			if (splitter < 0)
				splitter = tmp.length + 1;
			subject = tmp.substring(0, splitter);
			if (decodeURIComponent(trim(subject.substring(0, subject.indexOf('=')))) == rname)
				result = subject.substring(subject.indexOf('=') + 1, subject.length);
			tmp = tmp.substring(splitter + 1, tmp.length);
		}
		return result;
	}

	function set_cookie(name, value)
	{
		document.cookie = encodeURIComponent(name) + "=" + encodeURIComponent(value) + "; path=/;";
	}

	function Show(cur_id)
	{
		set_cookie(cur_id, 'v');
		document.getElementById('v' + cur_id).style.display = 'block';
			document.getElementById('s' + cur_id).innerHTML = "<img src='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
menu_opened.png' style='margin-top:13px;' border='0' alt=''/>&nbsp;";
		document.getElementById('ImgId' + cur_id).className = "leftMenuOpen";
	}

	function highlight_menu_title(title_id)
	{
		document.getElementById(title_id).style.color = '#fffff';
	}

	function Hide(cur_id)
	{
		set_cookie(cur_id, 'h');
		document.getElementById('v' + cur_id).style.display = 'none';
			document.getElementById('s' + cur_id).innerHTML = "<img src='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
menu_closed.png' style='margin-top:13px' border='0' alt=''/>&nbsp;";
		document.getElementById('ImgId' + cur_id).className = "leftMenu";
	}

	function ShowHide(cur_id, obj)
	{
		if (document.getElementById('v' + cur_id).style.display != 'none') {
			Hide(cur_id);
			$(obj).removeClass('leftMenuOpen');
			$(obj).addClass('leftMenu');
		} else {
			Show(cur_id);
			$(obj).removeClass('leftMenu');
			$(obj).addClass('leftMenuOpen');
		}
	}

	function Restore(cur_id, hide_def)
	{
		if (get_cookie(cur_id) == 'h')
			Hide(cur_id);
		else if (get_cookie(cur_id) == 'v')
			Show(cur_id);
		else {
			if (hide_def)
				Hide(cur_id);
			else
				Show(cur_id);
		}
	}
	

</script>

<?php  $_smarty_tpl->tpl_vars["section_items"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["section_items"]->_loop = false;
 $_smarty_tpl->tpl_vars["section"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['left_admin_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["section_items"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['menu_block']['total'] = $_smarty_tpl->tpl_vars["section_items"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['menu_block']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["section_items"]->key => $_smarty_tpl->tpl_vars["section_items"]->value){
$_smarty_tpl->tpl_vars["section_items"]->_loop = true;
 $_smarty_tpl->tpl_vars["section"]->value = $_smarty_tpl->tpl_vars["section_items"]->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['menu_block']['iteration']++;
?>
	<div onclick="ShowHide('<?php echo $_smarty_tpl->tpl_vars['section_items']->value['id'];?>
', this)" id="ImgId<?php echo $_smarty_tpl->tpl_vars['section_items']->value['id'];?>
" class="leftMenu">
		<span id="st<?php echo $_smarty_tpl->tpl_vars['section_items']->value['id'];?>
" class="menuName"><span class="borders"><?php echo $_smarty_tpl->tpl_vars['section']->value;?>
</span></span>
		<span id="s<?php echo $_smarty_tpl->tpl_vars['section_items']->value['id'];?>
" class="menuArrow"></span>
	</div>

	<div id="v<?php echo $_smarty_tpl->tpl_vars['section_items']->value['id'];?>
">
		<div class="menuItems">
			<?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['section_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value){
$_smarty_tpl->tpl_vars["item"]->_loop = true;
?>
				<?php if (is_array($_smarty_tpl->tpl_vars['item']->value)){?>
					<div class="<?php if ($_smarty_tpl->tpl_vars['item']->value['active']){?>lmsih<?php }else{ ?>lmsi<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['reference'];?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></div>
				<?php }?>
			<?php } ?>
		</div>
	</div>
	<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['menu_block']['iteration']!=$_smarty_tpl->getVariable('smarty')->value['foreach']['menu_block']['total']){?><?php }?>
	<script type="text/javascript">Restore('<?php echo $_smarty_tpl->tpl_vars['section_items']->value['id'];?>
',true); </script>
	<?php if ($_smarty_tpl->tpl_vars['section_items']->value['active']){?><script type="text/javascript">Show('<?php echo $_smarty_tpl->tpl_vars['section_items']->value['id'];?>
')</script><?php }?>
<?php } ?>
<?php }} ?>
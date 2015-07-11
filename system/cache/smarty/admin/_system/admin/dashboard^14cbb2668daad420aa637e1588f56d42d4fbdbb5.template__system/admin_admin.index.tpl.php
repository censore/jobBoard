<?php /* Smarty version Smarty-3.1.13, created on 2015-07-09 19:28:00
         compiled from "template__system/admin_admin:c:\openserver\domains\board\templates\_system\admin\dashboard\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15339559ee760d65634-87979528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14cbb2668daad420aa637e1588f56d42d4fbdbb5' => 
    array (
      0 => 'template__system/admin_admin:c:\\openserver\\domains\\board\\templates\\_system\\admin\\dashboard\\index.tpl',
      1 => 1387264708,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '15339559ee760d65634-87979528',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'invoicesInfo' => 0,
    'invoicePeriod' => 0,
    'invoiceInfo' => 0,
    'GLOBALS' => 0,
    'key' => 0,
    'today' => 0,
    'weekAgo' => 0,
    'monthAgo' => 0,
    'Info' => 0,
    'earningsForPeriod' => 0,
    'totalInvoices' => 0,
    'totalEarnings' => 0,
    'groupsInfo' => 0,
    'groupInfo' => 0,
    'listingsInfo' => 0,
    'listingInfo' => 0,
    'totalFlagsNum' => 0,
    'onlineUsers' => 0,
    'totalOnlineUsers' => 0,
    'value' => 0,
    'key1' => 0,
    'paymentAmount' => 0,
    'totalPaidInvoices' => 0,
    'unpaidInvoices' => 0,
    'totalUnpaidInvoices' => 0,
    'usersInfo' => 0,
    'users_url' => 0,
    'period' => 0,
    'group' => 0,
    'totalPostings' => 0,
    'listingType' => 0,
    'file' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_559ee7613ab1a7_44600944',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559ee7613ab1a7_44600944')) {function content_559ee7613ab1a7_44600944($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\OpenServer\\domains\\board\\system\\ext\\Smarty\\libs\\plugins\\function.cycle.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Dashboard<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div id="stats">
	<div id="statblocks">
		<?php  $_smarty_tpl->tpl_vars['invoicePeriod'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['invoicePeriod']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['invoicesInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['invoicePeriod']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['invoicePeriod']->iteration=0;
 $_smarty_tpl->tpl_vars['invoicePeriod']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['invoicePeriod']->key => $_smarty_tpl->tpl_vars['invoicePeriod']->value){
$_smarty_tpl->tpl_vars['invoicePeriod']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['invoicePeriod']->key;
 $_smarty_tpl->tpl_vars['invoicePeriod']->iteration++;
 $_smarty_tpl->tpl_vars['invoicePeriod']->index++;
 $_smarty_tpl->tpl_vars['invoicePeriod']->first = $_smarty_tpl->tpl_vars['invoicePeriod']->index === 0;
 $_smarty_tpl->tpl_vars['invoicePeriod']->last = $_smarty_tpl->tpl_vars['invoicePeriod']->iteration === $_smarty_tpl->tpl_vars['invoicePeriod']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['outer']['first'] = $_smarty_tpl->tpl_vars['invoicePeriod']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['outer']['last'] = $_smarty_tpl->tpl_vars['invoicePeriod']->last;
?>
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['outer']['last']){?>
				<div class="statblock">
					<?php  $_smarty_tpl->tpl_vars['invoiceInfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['invoiceInfo']->_loop = false;
 $_smarty_tpl->tpl_vars['key1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['invoicePeriod']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['invoiceInfo']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['invoiceInfo']->key => $_smarty_tpl->tpl_vars['invoiceInfo']->value){
$_smarty_tpl->tpl_vars['invoiceInfo']->_loop = true;
 $_smarty_tpl->tpl_vars['key1']->value = $_smarty_tpl->tpl_vars['invoiceInfo']->key;
 $_smarty_tpl->tpl_vars['invoiceInfo']->index++;
 $_smarty_tpl->tpl_vars['invoiceInfo']->first = $_smarty_tpl->tpl_vars['invoiceInfo']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["invoiceInfo"]['first'] = $_smarty_tpl->tpl_vars['invoiceInfo']->first;
?>
						<?php  $_smarty_tpl->tpl_vars['Info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Info']->_loop = false;
 $_smarty_tpl->tpl_vars['key2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['invoiceInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Info']->key => $_smarty_tpl->tpl_vars['Info']->value){
$_smarty_tpl->tpl_vars['Info']->_loop = true;
 $_smarty_tpl->tpl_vars['key2']->value = $_smarty_tpl->tpl_vars['Info']->key;
?>
							<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['invoiceInfo']['first']){?>
								<h2>
									<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-invoices/?date%5Bnot_less%5D=<?php if ($_smarty_tpl->tpl_vars['key']->value=="Today"){?><?php echo $_smarty_tpl->tpl_vars['today']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['key']->value=="This Week"){?><?php echo $_smarty_tpl->tpl_vars['weekAgo']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['key']->value=="This Month"){?><?php echo $_smarty_tpl->tpl_vars['monthAgo']->value;?>
<?php }?>&amp;date%5Bnot_more%5D=<?php echo $_smarty_tpl->tpl_vars['today']->value;?>
&amp;action=search&amp;status%5Bequal%5D=Paid">
										<?php $_smarty_tpl->_capture_stack[0][] = array('default', "earningsForPeriod", null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('type'=>"float")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"float"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['Info']->value['payment'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"float"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
										<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['currencyFormat'][0][0]->currencyFormat(array('amount'=>$_smarty_tpl->tpl_vars['earningsForPeriod']->value),$_smarty_tpl);?>

									</a>
								</h2>
							<?php }?>
						<?php } ?>
					<?php } ?>
					<p><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</p>
				</div>
			<?php }?>
		<?php } ?>
		<div class="statblock">
			<h2>
				<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-invoices/?date%5Bnot_less%5D=&amp;date%5Bnot_more%5D=&amp;action=search&amp;status%5Bequal%5D=Paid">
					<?php $_smarty_tpl->_capture_stack[0][] = array('default', "totalEarnings", null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('type'=>"float")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"float"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['totalInvoices']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"float"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['currencyFormat'][0][0]->currencyFormat(array('amount'=>$_smarty_tpl->tpl_vars['totalEarnings']->value),$_smarty_tpl);?>

				</a>
			</h2>
			<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Total Earnings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		</div>


		<?php  $_smarty_tpl->tpl_vars['groupInfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['groupInfo']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groupsInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['groupInfo']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['groupInfo']->iteration=0;
 $_smarty_tpl->tpl_vars['groupInfo']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['groupInfo']->key => $_smarty_tpl->tpl_vars['groupInfo']->value){
$_smarty_tpl->tpl_vars['groupInfo']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['groupInfo']->key;
 $_smarty_tpl->tpl_vars['groupInfo']->iteration++;
 $_smarty_tpl->tpl_vars['groupInfo']->index++;
 $_smarty_tpl->tpl_vars['groupInfo']->first = $_smarty_tpl->tpl_vars['groupInfo']->index === 0;
 $_smarty_tpl->tpl_vars['groupInfo']->last = $_smarty_tpl->tpl_vars['groupInfo']->iteration === $_smarty_tpl->tpl_vars['groupInfo']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['outer']['first'] = $_smarty_tpl->tpl_vars['groupInfo']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['outer']['last'] = $_smarty_tpl->tpl_vars['groupInfo']->last;
?>
			<div class="statblock">
				<h2>
					<?php if (in_array($_smarty_tpl->tpl_vars['key']->value,array('JobSeeker','Employer'))){?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-<?php echo mb_strtolower($_smarty_tpl->tpl_vars['key']->value, 'UTF-8');?>
s/?user_group%5Bequal%5D=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
&amp;action=search"><?php echo $_smarty_tpl->tpl_vars['groupInfo']->value['total']['count'];?>
</a>
					<?php }else{ ?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-<?php echo mb_strtolower($_smarty_tpl->tpl_vars['key']->value, 'UTF-8');?>
-users/?user_group%5Bequal%5D=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
&amp;action=search"><?php echo $_smarty_tpl->tpl_vars['groupInfo']->value['total']['count'];?>
</a>
					<?php }?>
				</h2>
				<p><?php echo $_smarty_tpl->tpl_vars['groupInfo']->value['caption'];?>
s</p>
			</div>
		<?php } ?>

		<?php  $_smarty_tpl->tpl_vars['listingInfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listingInfo']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['listingsInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['listingInfo']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['listingInfo']->iteration=0;
 $_smarty_tpl->tpl_vars['listingInfo']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['listingInfo']->key => $_smarty_tpl->tpl_vars['listingInfo']->value){
$_smarty_tpl->tpl_vars['listingInfo']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['listingInfo']->key;
 $_smarty_tpl->tpl_vars['listingInfo']->iteration++;
 $_smarty_tpl->tpl_vars['listingInfo']->index++;
 $_smarty_tpl->tpl_vars['listingInfo']->first = $_smarty_tpl->tpl_vars['listingInfo']->index === 0;
 $_smarty_tpl->tpl_vars['listingInfo']->last = $_smarty_tpl->tpl_vars['listingInfo']->iteration === $_smarty_tpl->tpl_vars['listingInfo']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['outer']['first'] = $_smarty_tpl->tpl_vars['listingInfo']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['outer']['last'] = $_smarty_tpl->tpl_vars['listingInfo']->last;
?>
			<div class="statblock">
				<h2>
					<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-<?php if ($_smarty_tpl->tpl_vars['key']->value!='Job'&&$_smarty_tpl->tpl_vars['key']->value!='Resume'){?><?php echo mb_strtolower($_smarty_tpl->tpl_vars['key']->value, 'UTF-8');?>
-listings<?php }else{ ?><?php echo mb_strtolower($_smarty_tpl->tpl_vars['key']->value, 'UTF-8');?>
s<?php }?>/?action=search&amp;active%5Bequal%5D=1"><?php echo $_smarty_tpl->tpl_vars['listingInfo']->value['total']['active'];?>
</a>
				</h2>
				<p><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
s</p>
			</div>
		<?php } ?>

		<?php  $_smarty_tpl->tpl_vars['listingInfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listingInfo']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['listingsInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['listingInfo']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['listingInfo']->iteration=0;
 $_smarty_tpl->tpl_vars['listingInfo']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['listingInfo']->key => $_smarty_tpl->tpl_vars['listingInfo']->value){
$_smarty_tpl->tpl_vars['listingInfo']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['listingInfo']->key;
 $_smarty_tpl->tpl_vars['listingInfo']->iteration++;
 $_smarty_tpl->tpl_vars['listingInfo']->index++;
 $_smarty_tpl->tpl_vars['listingInfo']->first = $_smarty_tpl->tpl_vars['listingInfo']->index === 0;
 $_smarty_tpl->tpl_vars['listingInfo']->last = $_smarty_tpl->tpl_vars['listingInfo']->iteration === $_smarty_tpl->tpl_vars['listingInfo']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['outer']['first'] = $_smarty_tpl->tpl_vars['listingInfo']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['outer']['last'] = $_smarty_tpl->tpl_vars['listingInfo']->last;
?>
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['outer']['first']){?>
				<?php if ($_smarty_tpl->tpl_vars['totalFlagsNum']->value[$_smarty_tpl->tpl_vars['key']->value]>0){?>
					<div class="statblock">
						<h2><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/flagged-listings/?listing_type_id=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
								<strong style="color: #C00;"><?php echo $_smarty_tpl->tpl_vars['totalFlagsNum']->value[$_smarty_tpl->tpl_vars['key']->value];?>
</strong></a></h2>
						<p>Flagged Listings</p>
					</div>
				<?php }?>
			<?php }?>
		<?php } ?>
	</div>
</div>

<div id="dashboard">
<div class="dashboardBlocks">
	<div class="box">
		<div class="box-header"><h1 class="usersOnline">Users online</h1></div>
		<div class="innerpadding">
			<table width="100%">
				<tbody>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow','advance'=>true),$_smarty_tpl);?>
">
					<td><strong>Total Users</strong></td>
					<?php if ($_smarty_tpl->tpl_vars['onlineUsers']->value){?>
						<td align="center"><?php echo $_smarty_tpl->tpl_vars['totalOnlineUsers']->value;?>
 online</td>
					<?php }else{ ?>
						<td align="center">0</td>
					<?php }?>
				</tr>
				<?php if ($_smarty_tpl->tpl_vars['onlineUsers']->value){?>
					<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['onlineUsers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['value']->iteration=0;
 $_smarty_tpl->tpl_vars['value']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
 $_smarty_tpl->tpl_vars['value']->iteration++;
 $_smarty_tpl->tpl_vars['value']->index++;
 $_smarty_tpl->tpl_vars['value']->first = $_smarty_tpl->tpl_vars['value']->index === 0;
 $_smarty_tpl->tpl_vars['value']->last = $_smarty_tpl->tpl_vars['value']->iteration === $_smarty_tpl->tpl_vars['value']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['outer']['first'] = $_smarty_tpl->tpl_vars['value']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['outer']['last'] = $_smarty_tpl->tpl_vars['value']->last;
?>
						<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow','advance'=>true),$_smarty_tpl);?>
">
							<td><strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</strong></td>
							<td align="center">
								<?php if (in_array($_smarty_tpl->tpl_vars['key']->value,array('JobSeeker','Employer'))){?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-<?php echo mb_strtolower($_smarty_tpl->tpl_vars['key']->value, 'UTF-8');?>
s/?user_group%5Bequal%5D=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
&amp;online=1&amp;action=search"><?php echo $_smarty_tpl->tpl_vars['value']->value['count'];?>
 online</a>
								<?php }else{ ?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-<?php echo mb_strtolower($_smarty_tpl->tpl_vars['key']->value, 'UTF-8');?>
-users/?user_group%5Bequal%5D=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
&amp;online=1&amp;action=search"><?php echo $_smarty_tpl->tpl_vars['value']->value['count'];?>
 online</a>
								<?php }?>
							</td>
						</tr>
					<?php } ?>
				<?php }else{ ?>
					<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow','advance'=>false),$_smarty_tpl);?>
">
						<td colspan="2"><strong>No online users</strong></td>
					</tr>
				<?php }?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="dashboardBlocks">
	<div class="box">
		<div class="box-header">
			<h1 class="payments">
				<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-invoices/?date%5Bnot_less%5D=&amp;date%5Bnot_more%5D=&amp;action=search&amp;status%5Bequal%5D="><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Payments<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
			</h1>
		</div>
		<div class="innerpadding">
			<table width="100%">
				<thead>
				<tr>
					<th align="center"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Period<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
					<th align="center"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Paid<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
					<th align="center"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Unpaid<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				</tr>
				</thead>
				<tbody>
				<?php  $_smarty_tpl->tpl_vars['invoicePeriod'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['invoicePeriod']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['invoicesInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['invoicePeriod']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['invoicePeriod']->iteration=0;
 $_smarty_tpl->tpl_vars['invoicePeriod']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['invoicePeriod']->key => $_smarty_tpl->tpl_vars['invoicePeriod']->value){
$_smarty_tpl->tpl_vars['invoicePeriod']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['invoicePeriod']->key;
 $_smarty_tpl->tpl_vars['invoicePeriod']->iteration++;
 $_smarty_tpl->tpl_vars['invoicePeriod']->index++;
 $_smarty_tpl->tpl_vars['invoicePeriod']->first = $_smarty_tpl->tpl_vars['invoicePeriod']->index === 0;
 $_smarty_tpl->tpl_vars['invoicePeriod']->last = $_smarty_tpl->tpl_vars['invoicePeriod']->iteration === $_smarty_tpl->tpl_vars['invoicePeriod']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['outer']['first'] = $_smarty_tpl->tpl_vars['invoicePeriod']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['outer']['last'] = $_smarty_tpl->tpl_vars['invoicePeriod']->last;
?>
					<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow','advance'=>true),$_smarty_tpl);?>
">
						<td><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
						<?php  $_smarty_tpl->tpl_vars['invoiceInfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['invoiceInfo']->_loop = false;
 $_smarty_tpl->tpl_vars['key1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['invoicePeriod']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['invoiceInfo']->key => $_smarty_tpl->tpl_vars['invoiceInfo']->value){
$_smarty_tpl->tpl_vars['invoiceInfo']->_loop = true;
 $_smarty_tpl->tpl_vars['key1']->value = $_smarty_tpl->tpl_vars['invoiceInfo']->key;
?>
							<?php  $_smarty_tpl->tpl_vars['Info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Info']->_loop = false;
 $_smarty_tpl->tpl_vars['key2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['invoiceInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Info']->key => $_smarty_tpl->tpl_vars['Info']->value){
$_smarty_tpl->tpl_vars['Info']->_loop = true;
 $_smarty_tpl->tpl_vars['key2']->value = $_smarty_tpl->tpl_vars['Info']->key;
?>
								<td align="center">
									<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-invoices/?date%5Bnot_less%5D=<?php if ($_smarty_tpl->tpl_vars['key']->value=="Today"){?><?php echo $_smarty_tpl->tpl_vars['today']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['key']->value=="This Week"){?><?php echo $_smarty_tpl->tpl_vars['weekAgo']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['key']->value=="This Month"){?><?php echo $_smarty_tpl->tpl_vars['monthAgo']->value;?>
<?php }?>&amp;date%5Bnot_more%5D=<?php echo $_smarty_tpl->tpl_vars['today']->value;?>
&amp;action=search&amp;status%5Bequal%5D=<?php if ($_smarty_tpl->tpl_vars['key1']->value=="paid"){?>Paid<?php }else{ ?>Unpaid<?php }?>">
										<?php $_smarty_tpl->_capture_stack[0][] = array('default', "paymentAmount", null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('type'=>"float")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"float"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['Info']->value['payment'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"float"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
										<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['currencyFormat'][0][0]->currencyFormat(array('amount'=>$_smarty_tpl->tpl_vars['paymentAmount']->value),$_smarty_tpl);?>

									</a>
								</td>
							<?php } ?>
						<?php } ?>
					</tr>
				<?php } ?>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow','advance'=>false),$_smarty_tpl);?>
">
					<td><strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Total<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</strong></td>
					<td align="center">
						<strong>
							<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-invoices/?date%5Bnot_less%5D=&amp;date%5Bnot_more%5D=&amp;action=search&amp;status%5Bequal%5D=Paid">
								<?php $_smarty_tpl->_capture_stack[0][] = array('default', "totalPaidInvoices", null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('type'=>"float")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"float"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['totalInvoices']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"float"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
								<b><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['currencyFormat'][0][0]->currencyFormat(array('amount'=>$_smarty_tpl->tpl_vars['totalPaidInvoices']->value),$_smarty_tpl);?>
</b>
							</a>
						</strong>
					</td>
					<td align="center">
						<strong>
							<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-invoices/?date%5Bnot_less%5D=&amp;date%5Bnot_more%5D=&amp;action=search&amp;status%5Bequal%5D=Unpaid">
								<?php $_smarty_tpl->_capture_stack[0][] = array('default', "totalUnpaidInvoices", null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('type'=>"float")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"float"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['unpaidInvoices']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"float"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
								<b><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['currencyFormat'][0][0]->currencyFormat(array('amount'=>$_smarty_tpl->tpl_vars['totalUnpaidInvoices']->value),$_smarty_tpl);?>
</b>
							</a>
						</strong>
					</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class="clr"><br/></div>

<div class="dashboardBlocks">
	<div class="box">
		<div class="box-header"><h1 class="registered">Registered Users: <?php echo $_smarty_tpl->tpl_vars['usersInfo']->value['count'];?>
</h1></div>
		<div class="innerpadding">
			<?php  $_smarty_tpl->tpl_vars['groupInfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['groupInfo']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groupsInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['groupInfo']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['groupInfo']->iteration=0;
 $_smarty_tpl->tpl_vars['groupInfo']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['groupInfo']->key => $_smarty_tpl->tpl_vars['groupInfo']->value){
$_smarty_tpl->tpl_vars['groupInfo']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['groupInfo']->key;
 $_smarty_tpl->tpl_vars['groupInfo']->iteration++;
 $_smarty_tpl->tpl_vars['groupInfo']->index++;
 $_smarty_tpl->tpl_vars['groupInfo']->first = $_smarty_tpl->tpl_vars['groupInfo']->index === 0;
 $_smarty_tpl->tpl_vars['groupInfo']->last = $_smarty_tpl->tpl_vars['groupInfo']->iteration === $_smarty_tpl->tpl_vars['groupInfo']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['outer']['first'] = $_smarty_tpl->tpl_vars['groupInfo']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['outer']['last'] = $_smarty_tpl->tpl_vars['groupInfo']->last;
?>
				<?php if (in_array($_smarty_tpl->tpl_vars['key']->value,array('JobSeeker','Employer'))){?>
					<?php $_smarty_tpl->_capture_stack[0][] = array("users_url", null, null); ob_start(); ?>manage-<?php echo mb_strtolower($_smarty_tpl->tpl_vars['key']->value, 'UTF-8');?>
s<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php }else{ ?>
					<?php $_smarty_tpl->_capture_stack[0][] = array("users_url", null, null); ob_start(); ?>manage-<?php echo mb_strtolower($_smarty_tpl->tpl_vars['key']->value, 'UTF-8');?>
-users<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php }?>
				<?php $_smarty_tpl->tpl_vars["users_url"] = new Smarty_variable(Smarty::$_smarty_vars['capture']['users_url'], null, 0);?>
				<?php if ($_smarty_tpl->tpl_vars['groupInfo']->value['approveInfo']!=''){?>
					<?php if ($_smarty_tpl->tpl_vars['groupInfo']->value['approveInfo']['Pending']!=''){?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['users_url']->value;?>
/?approval%5Bequal%5D=pending"><strong>Waiting for approval: <?php echo $_smarty_tpl->tpl_vars['groupInfo']->value['approveInfo']['Pending'];?>
</strong></a>
					<?php }else{ ?>
						<strong>Waiting for approval: 0</strong>
					<?php }?>
				<?php }?>
				<table width="100%">
					<thead>
					<tr>
						<th><b><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['groupInfo']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</b></th>
						<th align="center">Active</th>
						<th align="center">Not active</th>
						<th align="center">Total</th>
					</tr>
					</thead>
					<tbody>
					<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['period'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groupInfo']->value['periods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['period']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
						<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow','advance'=>true),$_smarty_tpl);?>
">
							<td><?php echo $_smarty_tpl->tpl_vars['period']->value;?>
</td>
							<td align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['users_url']->value;?>
/?action=search&amp;active%5Bequal%5D=1&amp;registration_date%5Bnot_less%5D=<?php if ($_smarty_tpl->tpl_vars['period']->value=="Today"){?><?php echo $_smarty_tpl->tpl_vars['today']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['period']->value=="This Week"){?><?php echo $_smarty_tpl->tpl_vars['weekAgo']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['period']->value=="This Month"){?><?php echo $_smarty_tpl->tpl_vars['monthAgo']->value;?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['group']->value['active'];?>
</a></td>
							<td align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['users_url']->value;?>
/?action=search&amp;active%5Bequal%5D=0&amp;registration_date%5Bnot_less%5D=<?php if ($_smarty_tpl->tpl_vars['period']->value=="Today"){?><?php echo $_smarty_tpl->tpl_vars['today']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['period']->value=="This Week"){?><?php echo $_smarty_tpl->tpl_vars['weekAgo']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['period']->value=="This Month"){?><?php echo $_smarty_tpl->tpl_vars['monthAgo']->value;?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['group']->value['count']-$_smarty_tpl->tpl_vars['group']->value['active'];?>
</a></td>
							<td align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['users_url']->value;?>
/?action=search&amp;registration_date%5Bnot_less%5D=<?php if ($_smarty_tpl->tpl_vars['period']->value=="Today"){?><?php echo $_smarty_tpl->tpl_vars['today']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['period']->value=="This Week"){?><?php echo $_smarty_tpl->tpl_vars['weekAgo']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['period']->value=="This Month"){?><?php echo $_smarty_tpl->tpl_vars['monthAgo']->value;?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['group']->value['count'];?>
</a></td>
						</tr>
					<?php } ?>
					<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow','advance'=>false),$_smarty_tpl);?>
">
						<td><strong>Totals</strong></td>
						<td align="center"><strong><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['users_url']->value;?>
/?action=search&amp;active%5Bequal%5D=1"><?php echo $_smarty_tpl->tpl_vars['groupInfo']->value['total']['active'];?>
</a></strong></td>
						<td align="center"><strong><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['users_url']->value;?>
/?action=search&amp;active%5Bequal%5D=0"><?php echo $_smarty_tpl->tpl_vars['groupInfo']->value['total']['count']-$_smarty_tpl->tpl_vars['groupInfo']->value['total']['active'];?>
</a></strong></td>
						<td align="center"><strong><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['users_url']->value;?>
/?action=search"><?php echo $_smarty_tpl->tpl_vars['groupInfo']->value['total']['count'];?>
</a></strong></td>
					</tr>
					</tbody>
				</table>
				<br/>
			<?php } ?>
		</div>
	</div>
</div>

<div class="dashboardBlocks">
	<div class="box">
		<?php $_smarty_tpl->tpl_vars["totalPostings"] = new Smarty_variable("0", null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['listingInfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listingInfo']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['listingsInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['listingInfo']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['listingInfo']->iteration=0;
 $_smarty_tpl->tpl_vars['listingInfo']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['listingInfo']->key => $_smarty_tpl->tpl_vars['listingInfo']->value){
$_smarty_tpl->tpl_vars['listingInfo']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['listingInfo']->key;
 $_smarty_tpl->tpl_vars['listingInfo']->iteration++;
 $_smarty_tpl->tpl_vars['listingInfo']->index++;
 $_smarty_tpl->tpl_vars['listingInfo']->first = $_smarty_tpl->tpl_vars['listingInfo']->index === 0;
 $_smarty_tpl->tpl_vars['listingInfo']->last = $_smarty_tpl->tpl_vars['listingInfo']->iteration === $_smarty_tpl->tpl_vars['listingInfo']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['outer']['first'] = $_smarty_tpl->tpl_vars['listingInfo']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['outer']['last'] = $_smarty_tpl->tpl_vars['listingInfo']->last;
?>
			<?php $_smarty_tpl->tpl_vars["totalPostings"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['listingInfo']->value['total']['count']+$_smarty_tpl->tpl_vars['totalPostings']->value), null, 0);?>
		<?php } ?>

		<div class="box-header"><h1 class="postings">Postings: <?php echo $_smarty_tpl->tpl_vars['totalPostings']->value;?>
</h1></div>
		<div class="innerpadding">
			<?php  $_smarty_tpl->tpl_vars['listingInfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listingInfo']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['listingsInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['listingInfo']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['listingInfo']->iteration=0;
 $_smarty_tpl->tpl_vars['listingInfo']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['listingInfo']->key => $_smarty_tpl->tpl_vars['listingInfo']->value){
$_smarty_tpl->tpl_vars['listingInfo']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['listingInfo']->key;
 $_smarty_tpl->tpl_vars['listingInfo']->iteration++;
 $_smarty_tpl->tpl_vars['listingInfo']->index++;
 $_smarty_tpl->tpl_vars['listingInfo']->first = $_smarty_tpl->tpl_vars['listingInfo']->index === 0;
 $_smarty_tpl->tpl_vars['listingInfo']->last = $_smarty_tpl->tpl_vars['listingInfo']->iteration === $_smarty_tpl->tpl_vars['listingInfo']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['outer']['first'] = $_smarty_tpl->tpl_vars['listingInfo']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['outer']['last'] = $_smarty_tpl->tpl_vars['listingInfo']->last;
?>
				<?php $_smarty_tpl->tpl_vars["totalPostings"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['listingInfo']->value['total']['count']+$_smarty_tpl->tpl_vars['totalPostings']->value), null, 0);?>
			<?php } ?>

			<?php  $_smarty_tpl->tpl_vars['listingInfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listingInfo']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['listingsInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['listingInfo']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['listingInfo']->iteration=0;
 $_smarty_tpl->tpl_vars['listingInfo']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['listingInfo']->key => $_smarty_tpl->tpl_vars['listingInfo']->value){
$_smarty_tpl->tpl_vars['listingInfo']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['listingInfo']->key;
 $_smarty_tpl->tpl_vars['listingInfo']->iteration++;
 $_smarty_tpl->tpl_vars['listingInfo']->index++;
 $_smarty_tpl->tpl_vars['listingInfo']->first = $_smarty_tpl->tpl_vars['listingInfo']->index === 0;
 $_smarty_tpl->tpl_vars['listingInfo']->last = $_smarty_tpl->tpl_vars['listingInfo']->iteration === $_smarty_tpl->tpl_vars['listingInfo']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['outer']['first'] = $_smarty_tpl->tpl_vars['listingInfo']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['outer']['last'] = $_smarty_tpl->tpl_vars['listingInfo']->last;
?>
				<?php if ($_smarty_tpl->tpl_vars['key']->value!='Job'&&$_smarty_tpl->tpl_vars['key']->value!='Resume'){?>
					<?php $_smarty_tpl->_capture_stack[0][] = array("listingType", null, null); ob_start(); ?><?php echo mb_strtolower($_smarty_tpl->tpl_vars['key']->value, 'UTF-8');?>
-listings<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php }else{ ?>
					<?php $_smarty_tpl->_capture_stack[0][] = array("listingType", null, null); ob_start(); ?><?php echo mb_strtolower($_smarty_tpl->tpl_vars['key']->value, 'UTF-8');?>
s<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['listingInfo']->value['approveInfo']!=''){?>
					<?php if ($_smarty_tpl->tpl_vars['listingInfo']->value['approveInfo']['pending']!=''){?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-<?php echo Smarty::$_smarty_vars['capture']['listingType'];?>
/?action=search&amp;status%5Bequal%5D=pending"><strong>Waiting for approval: <?php echo $_smarty_tpl->tpl_vars['listingInfo']->value['approveInfo']['pending'];?>
</strong></a>
					<?php }else{ ?>
						<strong>Waiting for approval: 0</strong>
					<?php }?>
				<?php }?>
				<table width="100%">
					<thead>
					<tr class="headrow">
						<th>
							<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
<br/>
							<?php if ($_smarty_tpl->tpl_vars['totalFlagsNum']->value[$_smarty_tpl->tpl_vars['key']->value]>0){?><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/flagged-listings/?listing_type_id=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><strong>Flagged: <?php echo $_smarty_tpl->tpl_vars['totalFlagsNum']->value[$_smarty_tpl->tpl_vars['key']->value];?>
</strong></a><?php }?>
						</th>
						<th>Active</th>
						<th>Not active</th>
						<th>Total</th>
					</tr>
					</thead>
					<tbody>
					<?php  $_smarty_tpl->tpl_vars['listingType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listingType']->_loop = false;
 $_smarty_tpl->tpl_vars['period'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['listingInfo']->value['periods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['listingType']->key => $_smarty_tpl->tpl_vars['listingType']->value){
$_smarty_tpl->tpl_vars['listingType']->_loop = true;
 $_smarty_tpl->tpl_vars['period']->value = $_smarty_tpl->tpl_vars['listingType']->key;
?>
						<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow','advance'=>true),$_smarty_tpl);?>
">
							<td><?php echo $_smarty_tpl->tpl_vars['period']->value;?>
</td>
							<td align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-<?php echo Smarty::$_smarty_vars['capture']['listingType'];?>
/?active[equal]=1&amp;action=search&amp;activation_date[not_less]=<?php if ($_smarty_tpl->tpl_vars['period']->value=="Today"){?><?php echo $_smarty_tpl->tpl_vars['today']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['period']->value=="This Week"){?><?php echo $_smarty_tpl->tpl_vars['weekAgo']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['period']->value=="This Month"){?><?php echo $_smarty_tpl->tpl_vars['monthAgo']->value;?>
<?php }?>"><b><?php echo $_smarty_tpl->tpl_vars['listingType']->value['active'];?>
</b></a></td>
							<td align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-<?php echo Smarty::$_smarty_vars['capture']['listingType'];?>
/?active[equal]=0&amp;action=search&amp;activation_date[not_less]=<?php if ($_smarty_tpl->tpl_vars['period']->value=="Today"){?><?php echo $_smarty_tpl->tpl_vars['today']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['period']->value=="This Week"){?><?php echo $_smarty_tpl->tpl_vars['weekAgo']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['period']->value=="This Month"){?><?php echo $_smarty_tpl->tpl_vars['monthAgo']->value;?>
<?php }?>"><b><?php echo $_smarty_tpl->tpl_vars['listingType']->value['count']-$_smarty_tpl->tpl_vars['listingType']->value['active'];?>
</b></a></td>
							<td align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-<?php echo Smarty::$_smarty_vars['capture']['listingType'];?>
/?action=search&amp;activation_date[not_less]=<?php if ($_smarty_tpl->tpl_vars['period']->value=="Today"){?><?php echo $_smarty_tpl->tpl_vars['today']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['period']->value=="This Week"){?><?php echo $_smarty_tpl->tpl_vars['weekAgo']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['period']->value=="This Month"){?><?php echo $_smarty_tpl->tpl_vars['monthAgo']->value;?>
<?php }?>"><b><?php echo $_smarty_tpl->tpl_vars['listingType']->value['count'];?>
</b></a></td>
						</tr>
					<?php } ?>
					<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow','advance'=>false),$_smarty_tpl);?>
">
						<td><strong>Totals</strong></td>
						<td align="center"><strong><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-<?php echo Smarty::$_smarty_vars['capture']['listingType'];?>
/?action=search&amp;active%5Bequal%5D=1"><?php echo $_smarty_tpl->tpl_vars['listingInfo']->value['total']['active'];?>
</a></strong></td>
						<td align="center"><strong><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-<?php echo Smarty::$_smarty_vars['capture']['listingType'];?>
/?action=search&amp;active%5Bequal%5D=0"><?php echo $_smarty_tpl->tpl_vars['listingInfo']->value['total']['count']-$_smarty_tpl->tpl_vars['listingInfo']->value['total']['active'];?>
</a></strong></td>
						<td align="center"><strong><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-<?php echo Smarty::$_smarty_vars['capture']['listingType'];?>
/?action=search"><?php echo $_smarty_tpl->tpl_vars['listingInfo']->value['total']['count'];?>
</a></strong></td>
					</tr>
					</tbody>
				</table>
				<br/>
			<?php } ?>
		</div>
	</div>
</div>

<div class="clr"><br/></div>

<div class="dashboardBlocks">
	<div class="box">
		<div class="box-header"><h1 class="quickLinks">Quick links</h1></div>
		<div class="innerpadding">
			<table width="100%">
				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow','advance'=>true),$_smarty_tpl);?>
">
					<td><a href="http://wiki.smartjobboard.com/" target="_blank"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User Manual<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></td>
				</tr>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow','advance'=>true),$_smarty_tpl);?>
">
					<td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/upload-logo/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Upload your logo<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></td>
				</tr>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow','advance'=>true),$_smarty_tpl);?>
">
					<td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-listing-field/edit-list/?field_sid=198"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit job categories list<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></td>
				</tr>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow','advance'=>true),$_smarty_tpl);?>
">
					<td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/countries/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit countries list<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></td>
				</tr>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow','advance'=>true),$_smarty_tpl);?>
">
					<td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-templates/?module_name=main&amp;template_name=main.tpl"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit Home page template<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></td>
				</tr>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow','advance'=>true),$_smarty_tpl);?>
">
					<td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-templates/?module_name=main&amp;template_name=index.tpl"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit all pages template<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></td>
				</tr>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow','advance'=>true),$_smarty_tpl);?>
">
					<td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-css/?action=edit&amp;file=<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit CSS file<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></td>
				</tr>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow','advance'=>true),$_smarty_tpl);?>
">
					<td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-css/?action=edit&amp;file=../templates/_system/main/images/css/form.css"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit Forms CSS file<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></td>
				</tr>
			</table>
		</div>
	</div>
</div>


<div class="dashboardBlocks">
	<div class="box">
		<div class="box-header"><h1 class="updates">Updates</h1></div>
		<div class="innerpadding">
			<table width="100%">
				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow','advance'=>true),$_smarty_tpl);?>
">
					<td>Current version</td>
					<td><?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['version']['major'];?>
.<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['version']['minor'];?>
 build <?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['version']['build'];?>
</td>
				</tr>

				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow','advance'=>true),$_smarty_tpl);?>
">
					<td>New update available</td>
					<td id="updateInfoBlockDashboard">N/A</td>
				</tr>

				<tr>
					<td colspan="2" id="updateButtonBlockDashboard">
						<div style="text-align: center; position: relative;" id="updateProgress">
							<img src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/templates/_system/main/images/ajax_preloader_circular_16.gif" alt="Please wait ..." />
						</div>
						<small id="updateNone" style="color: green; display: none;">You have the latest version of SJB installed. No need to update.</small>
						<small id="updateDeprecated" style="color: red; display: none;">Your current version is outdated and doesn't have fresh updates. Please upgrade to the latest version of Smart Job Board</small>
						<small id="updateError" style="color: red; display: none;">Update check failed</small>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>

<div class="clr"><br/></div>
<br />
</div><?php }} ?>
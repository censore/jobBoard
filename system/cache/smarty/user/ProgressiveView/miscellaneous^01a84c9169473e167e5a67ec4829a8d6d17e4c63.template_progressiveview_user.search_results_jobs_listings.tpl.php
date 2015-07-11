<?php /* Smarty version Smarty-3.1.13, created on 2015-07-09 21:00:55
         compiled from "template_progressiveview_user:c:\openserver\domains\board\templates\progressiveview\classifieds\search_results_jobs_listings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26199559efd27c2ce49-75602809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01a84c9169473e167e5a67ec4829a8d6d17e4c63' => 
    array (
      0 => 'template_progressiveview_user:c:\\openserver\\domains\\board\\templates\\progressiveview\\classifieds\\search_results_jobs_listings.tpl',
      1 => 1393414710,
      2 => 'template_progressiveview_user',
    ),
  ),
  'nocache_hash' => '26199559efd27c2ce49-75602809',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listing_search' => 0,
    'listings' => 0,
    'listing' => 0,
    'api' => 0,
    'METADATA' => 0,
    'show_brief_or_detailed' => 0,
    'GLOBALS' => 0,
    'searchId' => 0,
    'acl' => 0,
    'currentIndeedPage' => 0,
    'totalIndeedPages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_559efd2808f2c8_24848316',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559efd2808f2c8_24848316')) {function content_559efd2808f2c8_24848316($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\OpenServer\\domains\\board\\system\\ext\\Smarty\\libs\\plugins\\function.cycle.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:\\OpenServer\\domains\\board\\system\\ext\\Smarty\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_regex_replace')) include 'C:\\OpenServer\\domains\\board\\system\\ext\\Smarty\\libs\\plugins\\modifier.regex_replace.php';
?><?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable($_smarty_tpl->tpl_vars['listing_search']->value['current_page']*$_smarty_tpl->tpl_vars['listing_search']->value['listings_per_page']-$_smarty_tpl->tpl_vars['listing_search']->value['listings_per_page'], null, 0);?>
<?php  $_smarty_tpl->tpl_vars['listing'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listing']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['listings']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['listing']->key => $_smarty_tpl->tpl_vars['listing']->value){
$_smarty_tpl->tpl_vars['listing']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['listings']['iteration']++;
?>
	<?php if ($_smarty_tpl->tpl_vars['listing']->value['api']){?>
		<?php if ($_smarty_tpl->tpl_vars['api']->value!=$_smarty_tpl->tpl_vars['listing']->value['api']){?>
			<tr class="<?php echo $_smarty_tpl->tpl_vars['listing']->value['api'];?>
Block api-jobs-plugin">
				<td colspan="6"><?php echo $_smarty_tpl->tpl_vars['listing']->value['code'];?>
</td>
			</tr>
			<?php $_smarty_tpl->tpl_vars["api"] = new Smarty_variable($_smarty_tpl->tpl_vars['listing']->value['api'], null, 0);?>
			<?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['foreach']['listings']['iteration']-1, null, 0);?>

			<?php if ($_smarty_tpl->tpl_vars['api']->value=='indeed'){?>
				<?php $_smarty_tpl->tpl_vars['currentIndeedPage'] = new Smarty_variable($_smarty_tpl->tpl_vars['listing']->value['pageNumber'], null, 0);?>
				<?php $_smarty_tpl->tpl_vars['totalIndeedPages'] = new Smarty_variable($_smarty_tpl->tpl_vars['listing']->value['totalPages'], null, 0);?>
			<?php }?>
		<?php }?>
		<tr <?php if ($_smarty_tpl->tpl_vars['listing']->value['priority']==1){?>class="priorityListing <?php echo $_smarty_tpl->tpl_vars['listing']->value['api'];?>
Block"<?php }else{ ?>class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow','advance'=>true),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['listing']->value['api'];?>
Block"<?php }?>>
			<td>
				<div class="listing-section">
					<div class="listing-title">
						<a name="listing_<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
"></a>
						<a href="<?php echo $_smarty_tpl->tpl_vars['listing']->value['url'];?>
" <?php echo $_smarty_tpl->tpl_vars['listing']->value['target'];?>
 <?php echo $_smarty_tpl->tpl_vars['listing']->value['onmousedown'];?>
 <?php echo $_smarty_tpl->tpl_vars['listing']->value['onclick'];?>
><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['Title'], ENT_QUOTES, 'UTF-8', true);?>
</strong></a>
					</div>
					<div class="listing-info">
						<div class="left-side">
							<span class="captions"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Location<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</span><span class="captions-field"><?php echo SJB_LocationManager::locationFormat(array('location'=>$_smarty_tpl->tpl_vars['listing']->value['Location'],'format'=>"short"),$_smarty_tpl);?>
</span><br/>
							<span class="captions"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Posted<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</span><span class="captions-field"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['listing']['activation_date'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['listing']['activation_date']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['listing']->value['activation_date'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['listing']['activation_date']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span><br/>
							<span class="captions"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Company<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</span><span class="captions-field"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['CompanyName'], ENT_QUOTES, 'UTF-8', true);?>
</span></span>
							<div class="show-brief">
								<?php if ($_smarty_tpl->tpl_vars['show_brief_or_detailed']->value!='brief'){?>
									<?php if ($_smarty_tpl->tpl_vars['api']->value=='indeed'){?>
										<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['listing']->value['JobDescription'],120);?>

									<?php }else{ ?>
										<?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['listing']->value['JobDescription']),120);?>

									<?php }?>
								<?php }?>
							</div>
						</div>
					</div>
				</div>
			</td>
		</tr>
	<?php }else{ ?>
		<tr <?php if ($_smarty_tpl->tpl_vars['listing']->value['priority']==1){?>class="priorityListing"<?php }else{ ?>class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow','advance'=>true),$_smarty_tpl);?>
"<?php }?>>
			<td>
				<div class="listing-section">
					<div class="listing-title">
						<a name="listing_<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
"></a>
						<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/display-job/<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
/<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['listing']->value['Title'],"/[\\/\\\:*?\"<>|%#"."$"."\s]/","-");?>
.html?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['listing_search']->value['current_page'];?>
"><?php echo $_smarty_tpl->tpl_vars['listing']->value['Title'];?>
</a>
					</div>
					<div class="listing-info">
						<div class="left-side">
							<span class="captions"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Location<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</span><span class="captions-field"><?php echo SJB_LocationManager::locationFormat(array('location'=>$_smarty_tpl->tpl_vars['listing']->value['Location'],'format'=>"short"),$_smarty_tpl);?>
</span><br/>
							<span class="captions"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Posted<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</span><span class="captions-field"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['listing']['activation_date'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['listing']['activation_date']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['listing']->value['activation_date'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['listing']['activation_date']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span><br/>
							<span class="captions"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Company<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</span><span class="captions-field">
								<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/company/<?php echo $_smarty_tpl->tpl_vars['listing']->value['user']['id'];?>
/<?php echo rawurlencode(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['listing']->value['user']['CompanyName'],"/[\s\/\\\\]/","-"));?>
/"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['user']['CompanyName'], ENT_QUOTES, 'UTF-8', true);?>
</a>
							</span>
						</div>
						<div class="right-side"><?php if ($_smarty_tpl->tpl_vars['listing']->value['user']['Logo']['file_url']){?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/company/<?php echo $_smarty_tpl->tpl_vars['listing']->value['user']['id'];?>
/<?php echo rawurlencode(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['listing']->value['user']['CompanyName'],"/[\s\/\\\\]/","-"));?>
/"><center><img src="<?php echo $_smarty_tpl->tpl_vars['listing']->value['user']['Logo']['file_url'];?>
" alt="" /></center></a>
							<?php }else{ ?>
								<center>&nbsp;</center>
							<?php }?>
						</div>
						<div class="clr"></div>
						<div class="show-brief">
							<?php if ($_smarty_tpl->tpl_vars['show_brief_or_detailed']->value!='brief'){?><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['listing']->value['JobDescription']),120);?>
<?php }?>
						</div>
					</div>
					<div class="listing-links">
						<ul>
							<?php if ($_smarty_tpl->tpl_vars['listing']->value['saved_listing']&&$_smarty_tpl->tpl_vars['acl']->value->isAllowed('save_job')){?>
								<?php if ($_smarty_tpl->tpl_vars['listing']->value['saved_listing']['note']&&$_smarty_tpl->tpl_vars['listing']->value['saved_listing']['note']!=''){?>
									<li class="saved2Ico edit-notes">
										<span id='notes_<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
'>
											<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-notes/?listing_id=<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
" onclick="SaveAd( 'formNote_<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-notes/?listing_sid=<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
'); return false;"  class="action"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit notes<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>&nbsp;&nbsp;
										</span>
									</li>
								<?php }else{ ?>
									<li class="saved2Ico add-notes">
										<span id='notes_<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
'>
											<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/add-notes/?listing_id=<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
" onclick="SaveAd( 'formNote_<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/add-notes/?listing_sid=<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
'); return false;"  class="action"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add notes<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>&nbsp;&nbsp;
										</span>
									</li>
								<?php }?>
							<?php }else{ ?>
								<?php if ($_smarty_tpl->tpl_vars['acl']->value->isAllowed('save_job')){?>
									<li class="saved2Ico save-ad">
										<span id='notes_<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
'>
											<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/saved-ads/?listing_id=<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
" onclick="<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['logged_in']){?>SaveAd('notes_<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/saved-ads/?listing_id=<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
&listing_type=job')<?php }else{ ?>popUpWindow('<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/saved-ads/?listing_id=<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
&listing_type=job', 300, 'Save this Job', true, <?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['logged_in']){?>true<?php }else{ ?>false<?php }?>)<?php }?>; return false;"  class="action"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save ad<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>&nbsp;&nbsp;
										</span>
									</li>
								<?php }elseif($_smarty_tpl->tpl_vars['acl']->value->getPermissionParams('save_job')=="message"){?>
									<li class="saved2Ico save-ad">
										<span id='notes_<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
'>
											<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/saved-ads/?listing_id=<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
" onclick="popUpWindow('<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/access-denied/?permission=save_job', 300, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save ad<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'); return false;" class="action"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save ad<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>&nbsp;&nbsp;
										</span>
									</li>
								<?php }?>
							<?php }?>
							<li class="viewDetails"><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/display-job/<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
/<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['listing']->value['Title'],"/[\\/\\\:*?\"<>|%#"."$"."\s]/","-");?>
.html?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['listing_search']->value['current_page'];?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
View job details<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
							<?php if ($_smarty_tpl->tpl_vars['listing']->value['video']['file_url']){?><li class="viewVideo"><a style="cursor: hand;" onclick="popUpWindow('<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/video-player/?listing_id=<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
&amp;field_id=video', 282, 'VideoPlayer'); return false;"  href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/video-player/?listing_id=<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
&amp;field_id=video"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Watch a video<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li><?php }?>
						</ul>
						<span id = 'formNote_<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
' class="form-note">
							<?php if ($_smarty_tpl->tpl_vars['listing']->value['saved_listing']&&$_smarty_tpl->tpl_vars['listing']->value['saved_listing']['note']&&$_smarty_tpl->tpl_vars['listing']->value['saved_listing']['note']!=''){?>
								<b><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
My notes<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</b><?php echo $_smarty_tpl->tpl_vars['listing']->value['saved_listing']['note'];?>

							<?php }?>
						</span>
					</div>
					<div class="clr"></div>
				</div>
			</td>
		</tr>
	<?php }?>
<?php } ?>


<?php if ($_smarty_tpl->tpl_vars['api']->value=='indeed'){?>
	<tr class="indeedBlock">
		<td colspan="6" style="text-align: right;">
			<span id="indeed_ajax_preloader_listings_results" class="preloader">&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/templates/_system/main/images/ajax_preloader_circular_16.gif" />&nbsp;</span>
			<?php if ($_smarty_tpl->tpl_vars['currentIndeedPage']->value>1){?><a onclick="requestToListingsProviders(<?php echo $_smarty_tpl->tpl_vars['currentIndeedPage']->value-1;?>
, 'indeed');return false;" href="#" style="text-decoration: none;">&lt;&lt;</a><?php }?>
			&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['currentIndeedPage']->value;?>
</b>&nbsp;
			<?php if ($_smarty_tpl->tpl_vars['currentIndeedPage']->value<$_smarty_tpl->tpl_vars['totalIndeedPages']->value){?><a onclick="requestToListingsProviders(<?php echo $_smarty_tpl->tpl_vars['currentIndeedPage']->value+1;?>
, 'indeed'); return false;" href="#" style="text-decoration: none;">&gt;&gt;</a><?php }?>
		</td>
	</tr>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['GLOBALS']->value['is_ajax']){?>
	<!-- preloader row here -->
	<tr id="ajax_preloader_listings_results" class="preloader">
		<td colspan="6">&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/templates/_system/main/images/ajax_preloader_circular_32.gif" /></td>
	</tr>
<?php }?>
<script type="text/javascript">
	function addStatisticsForSimplyHired() {
		var url = window.SJB_GlobalSiteUrl + '/partnersite/';
		$.get(url, { action: "simplyHired" } );
	}
</script><?php }} ?>
<?php /* Smarty version Smarty-3.1.13, created on 2015-07-09 19:28:01
         compiled from "template__system/admin_admin:index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19784559ee761db8a94-84519381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af6e5cbd5b1f33bde2021f2207054bb21170bfff' => 
    array (
      0 => 'template__system/admin_admin:index.tpl',
      1 => 1393401844,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '19784559ee761db8a94-84519381',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TITLE' => 0,
    'GLOBALS' => 0,
    'url' => 0,
    'params' => 0,
    'language' => 0,
    'ADMIN_BREADCRUMBS' => 0,
    'MAIN_CONTENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_559ee7623ab205_31272665',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559ee7623ab205_31272665')) {function content_559ee7623ab205_31272665($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>SmartJobBoard <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Admin Panel<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php if ($_smarty_tpl->tpl_vars['TITLE']->value!=''){?> :: <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php }?></title>

	<link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"design.css"),$_smarty_tpl);?>
" />
	<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['rightToLeft']){?><link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"designRight.css"),$_smarty_tpl);?>
" /><?php }?>
    <link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/themes/green/jquery-ui-1.7.2.custom.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"jquery-ui-1.8.custom.css"),$_smarty_tpl);?>
" />
	<link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/css/jquery-ui.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/css/jquery.multiselect.css" />
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/main.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/jquery.js"></script>
    <script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/jquery-ui.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/jquery.form.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/autoupload_functions.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/jquery.bgiframe.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/multilist/jquery.multiselect.min.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/multilist_functions.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/floatnumbers_functions.js"></script>
	<?php $_smarty_tpl->_capture_stack[0][] = array("displayProgressBar", null, null); ob_start(); ?><img style="vertical-align: middle;" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/progbar.gif" alt="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please wait ...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" /> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please wait ...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <script language="JavaScript" type="text/javascript">

		// Set global javascript value for page
		window.SJB_GlobalSiteUrl = '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
';
		window.SJB_AdminSiteUrl  = '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['admin_site_url'];?>
';
		window.SJB_UserSiteUrl   = '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
';

		currentSjbVersion = {
			major: "<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['version']['major'];?>
",
			minor: "<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['version']['minor'];?>
",
			build: "<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['version']['build'];?>
"
		};

		$(document).ready(function() {
			// create special service block on page, if not exists
			var n = $("#updateInfoBlockDashboard").length;
			if (n == 0) {
				$("body").append("<div id=\"updateInfoBlockDashboard\" style=\"display:none;\"></div>");
			}

			// check for availabled SJB updates
			$.getJSON(window.SJB_AdminSiteUrl + "/system/miscellaneous/update_check/", function(data) {
				$('#updateProgress').hide();
				if (data.updateStatus == 'available' && !data.closed_by_user) {
					$("#updateInfoBlock").show("slide", { direction: "up"}, 500);
				}

				switch (data.updateStatus) {
					case 'available':
						var updateVersion = data.availableVersion.major + "." + data.availableVersion.minor + " build " + data.availableVersion.build;
						$("#updateInfoBlockDashboard").html(updateVersion);
						$("#updateButtonBlockDashboard").html(
							'<form style="text-align: center;" name="update_to_version_form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/update-to-new-version/">' +
								'<input type="submit" name="go_to_update_page" value="Update to version ' + updateVersion + '" />' +
							'</form>'
						);
						break;

					case 'deprecated':
						$('#updateDeprecated').show();
						break;

					case 'none':
						$('#updateNone').show();
						break;

					default:
						$('#updateError').show();
						break;
				}
			});

			$("#closeUpdateInfoBlock").click(function() {
				$("#updateInfoBlock").hide("slide", { direction: "up"}, 500);
				$.post(window.SJB_AdminSiteUrl + "/system/miscellaneous/update_check/", { action: "mark_as_closed"});
			});
		});

		$.extend($.ui.dialog.prototype.options, {
			modal: true
		});

		function popUpWindow(url, widthWin, heightWin, title, iframe, callbackFunction) {
			$("#messageBox").dialog('destroy').html('<?php echo strtr(Smarty::$_smarty_vars['capture']['displayProgressBar'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
			$("#messageBox").dialog({
				width: widthWin,
				height: heightWin,
				modal: true,
				title: title,
				close: function(event, ui) {
					if (callbackFunction) {
						callbackFunction();
					}
				}
			}).dialog('open');
			if (iframe) {
				$("#messageBox").html('<iframe border="0" runat="server" width="100%" height="100%" frameborder="0" src="'+url+'"></iframe>');
			} else {
				$.get(url, function(data) {
					$("#messageBox").html(data);
				});
			}
			return false;
		}

		function popUpMessageWindow(widthWin, heightWin, title, message) {
			$("#messageBox").dialog("destroy" ).html(message);
			$("#messageBox").dialog({
				width: widthWin,
				height: heightWin,
				title: title
			}).dialog("open");
			return false;
		}
	</script>
</head><body>
	<?php $_smarty_tpl->_capture_stack[0][] = array('url_for_wiki', null, null); ob_start(); ?>
	
		<?php if ($_smarty_tpl->tpl_vars['url']->value==='/system/dashboard/view/'||$_smarty_tpl->tpl_vars['url']->value==='/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Dashboard
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/upload-logo'){?>
			http://wiki.smartjobboard.com/display/sjb42/Upload+Your+Logo
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/edit-css/'&&$_smarty_tpl->tpl_vars['params']->value){?>
			<?php if ($_smarty_tpl->tpl_vars['params']->value==='action=edit&amp;file=../templates/IntelligentView/main/images/design.css'){?>
				http://wiki.smartjobboard.com/display/sjb42/Edit+CSS+File
			<?php }elseif($_smarty_tpl->tpl_vars['params']->value==='action=edit&amp;file=../templates/_system/main/images/css/form.css'){?>
				http://wiki.smartjobboard.com/display/sjb42/Edit+Forms+CSS+file
			<?php }?>
	
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/listing-fields/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Common+Fields
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/add-listing-field/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Common+Fields#CommonFields-AddingaNewListingField
		<?php }elseif(strpos($_smarty_tpl->tpl_vars['url']->value,'/edit-listing-field/')!==false){?>
			http://wiki.smartjobboard.com/display/sjb42/Common+Fields
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/listing-types/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Listing+Types
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/add-listing-type/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Listing+Types#ListingTypes-AddinaNewListingType
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/edit-listing-type/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Listing+Types#ListingTypes-EditingaListingType
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/add-listing-type-field/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Listing+Types#ListingTypes-AddingaNewListingField
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/edit-listing-type-field/'){?>	
			http://wiki.smartjobboard.com/display/sjb42/Listing+Types#ListingTypes-EditingListingFields
		<?php }elseif(strpos($_smarty_tpl->tpl_vars['url']->value,'/posting-pages/job/new')!==false||strpos($_smarty_tpl->tpl_vars['url']->value,'/posting-pages/resume/new')!==false){?>
			http://wiki.smartjobboard.com/display/sjb42/Posting+Pages#PostingPages-AddingaNewPostingPage
		<?php }elseif(strpos($_smarty_tpl->tpl_vars['url']->value,'/posting-pages/')!==false){?>
			http://wiki.smartjobboard.com/display/sjb42/Posting+Pages
	
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value=='/manage-resumes/'||$_smarty_tpl->tpl_vars['GLOBALS']->value['wikiExtraParam']=='Resume'){?>
			http://wiki.smartjobboard.com/display/sjb42/Manage+Resumes
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value=='/manage-jobs/'||$_smarty_tpl->tpl_vars['GLOBALS']->value['wikiExtraParam']=='Job'){?>
			http://wiki.smartjobboard.com/display/sjb42/Manage+Jobs
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value=='/add-listing/'&&(strpos($_smarty_tpl->tpl_vars['params']->value,'listing_type_id=resume')!==false||strpos($_smarty_tpl->tpl_vars['params']->value,'listing_type_id=Resume')!==false)){?>
			http://wiki.smartjobboard.com/display/sjb42/Adding+New+Resumes
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value=='/add-listing/'&&(strpos($_smarty_tpl->tpl_vars['params']->value,'listing_type_id=job')!==false||strpos($_smarty_tpl->tpl_vars['params']->value,'listing_type_id=Job')!==false)){?>
			http://wiki.smartjobboard.com/display/sjb42/Adding+New+Jobs
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/import_listings/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Import+Listings
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/export-listings/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Export+Listings
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/listing-feeds/'){?>
			http://wiki.smartjobboard.com/display/sjb42/XML+Feeds
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/show-import/'){?>
			http://wiki.smartjobboard.com/display/sjb42/XML+Import
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/edit-import/'){?>
			http://wiki.smartjobboard.com/display/sjb42/XML+Import
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/flagged-listings/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Flagged+listings
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/import-listings/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Import+Listings
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/add-import/'){?>
			http://wiki.smartjobboard.com/display/sjb42/XML+Import
	
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/user-groups/'){?>
			http://wiki.smartjobboard.com/display/sjb42/User+Groups
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/add-user-group/'){?>
			http://wiki.smartjobboard.com/display/sjb42/User+Groups#UserGroups-AddingaNewUserGroup
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/edit-user-group/'){?>
			http://wiki.smartjobboard.com/display/sjb42/User+Groups#UserGroups-EditingaUserGroup
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/edit-user-profile/'){?>
			http://wiki.smartjobboard.com/display/sjb42/User+Groups
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/system/users/acl/'&&$_smarty_tpl->tpl_vars['params']->value){?>
			http://wiki.smartjobboard.com/display/sjb42/User+Groups
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/manage-jobseekers/'||$_smarty_tpl->tpl_vars['url']->value==='/add-jobseeker/'||$_smarty_tpl->tpl_vars['GLOBALS']->value['wikiExtraParam']=='JobSeeker'){?>
			http://wiki.smartjobboard.com/display/sjb42/Manage+Job+Seekers
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/manage-employers/'||$_smarty_tpl->tpl_vars['url']->value==='/add-employer/'||$_smarty_tpl->tpl_vars['GLOBALS']->value['wikiExtraParam']=='Employer'){?>
			http://wiki.smartjobboard.com/display/sjb42/Manage+Employers
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/mailing/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Mass+Mailing
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/banned-ips/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Banned+IPs
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/add-user-profile-field/'){?>
			http://wiki.smartjobboard.com/display/sjb42/User+Groups#UserGroups-EditUserGroupProfileFields
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/export-users/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Export+Users
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/guest-alerts/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Guest+Email+Alerts
	
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/edit-templates/'){?>
			http://wiki.smartjobboard.com/display/sjb42/System+Templates
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/edit_themes/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Themes
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/user-pages/'){?>
			<?php if (strpos($_smarty_tpl->tpl_vars['params']->value,'action=new_page')!==false){?>
				http://wiki.smartjobboard.com/display/sjb42/Site+Pages#SitePages-AddingaNewUserPage
			<?php }elseif(strpos($_smarty_tpl->tpl_vars['params']->value,'action=edit_page')!==false){?>
				http://wiki.smartjobboard.com/display/sjb42/Site+Pages#SitePages-EditingUserPages
			<?php }else{ ?>
				http://wiki.smartjobboard.com/display/sjb42/Site+Pages
			<?php }?>
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/stat-pages/'){?>
			<?php if (strpos($_smarty_tpl->tpl_vars['params']->value,'action=edit')!==false){?>
				http://wiki.smartjobboard.com/display/sjb42/Static+Content#StaticContent-EditingStaticContent
			<?php }else{ ?>
				http://wiki.smartjobboard.com/display/sjb42/Static+Content
			<?php }?>
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/manage-banner-groups/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Banners
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/add-banner-group/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Banners#Banners-AddingaNewBannerGroup
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/edit-banner-group/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Banners#Banners-EditingBannersGroup
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/edit-banner/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Banners#Banners-EditingaBanner
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/form-builders/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Form+Builder
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/edit-themes/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Themes
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/add-banner/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Banners#Banners-AddingaNewBannertoaGroup
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/news-categories/'&&!$_smarty_tpl->tpl_vars['params']->value){?>
			http://wiki.smartjobboard.com/display/sjb42/News
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/news-categories/'){?>
			<?php if (strpos($_smarty_tpl->tpl_vars['params']->value,'category_sid=1')!==false){?>
				http://wiki.smartjobboard.com/display/sjb42/News#News-Archive
			<?php }elseif(strpos($_smarty_tpl->tpl_vars['params']->value,'action=edit')!==false){?>
				http://wiki.smartjobboard.com/display/sjb42/News#News-NewsCategories
			<?php }?>
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/manage-news/'){?>
			<?php if (strpos($_smarty_tpl->tpl_vars['params']->value,'action=add')!==false){?>
				http://wiki.smartjobboard.com/display/sjb42/News#News-AddingaNews
			<?php }elseif(strpos($_smarty_tpl->tpl_vars['params']->value,'action=edit')!==false){?>
				http://wiki.smartjobboard.com/display/sjb42/News#News-EditingNews
			<?php }?>
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/manage-polls/'){?>
			<?php if (strpos($_smarty_tpl->tpl_vars['params']->value,'action=new')!==false){?>
				http://wiki.smartjobboard.com/display/sjb42/Polls#Polls-AddingaNewPoll
			<?php }elseif(strpos($_smarty_tpl->tpl_vars['params']->value,'action=edit')!==false){?>
				http://wiki.smartjobboard.com/display/sjb42/Polls#Polls-EditingPolls
			<?php }elseif(strpos($_smarty_tpl->tpl_vars['params']->value,'edit_answer')!==false){?>
				http://wiki.smartjobboard.com/display/sjb42/Polls#Polls-EditAnswers
			<?php }else{ ?>
				http://wiki.smartjobboard.com/display/sjb42/Polls
			<?php }?>
	
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/system/payment/gateways/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Payment+Gateways
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/configure-gateway/'&&$_smarty_tpl->tpl_vars['params']->value){?>
			<?php if ($_smarty_tpl->tpl_vars['params']->value==='gateway=2checkout'){?>
				http://wiki.smartjobboard.com/display/sjb42/2checkout
			<?php }elseif($_smarty_tpl->tpl_vars['params']->value==='gateway=authnet_sim'){?>
				http://wiki.smartjobboard.com/display/sjb42/Authorize.Net+SIM
			<?php }elseif($_smarty_tpl->tpl_vars['params']->value==='gateway=cash_gateway'){?>
				http://wiki.smartjobboard.com/display/sjb42/Cash+Payment
			<?php }elseif($_smarty_tpl->tpl_vars['params']->value==='gateway=paypal_standard'){?>
				http://wiki.smartjobboard.com/display/sjb42/Paypal+Standard
			<?php }elseif($_smarty_tpl->tpl_vars['params']->value==='gateway=wire_transfer'){?>
				http://wiki.smartjobboard.com/display/sjb42/Wire+Transfer
			<?php }elseif($_smarty_tpl->tpl_vars['params']->value==='gateway=paypal_pro'){?>
				http://wiki.smartjobboard.com/display/sjb42/PayPal+Pro
			<?php }?>
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/payments/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Transaction+History
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/payment-log/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Payment+Log
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/manage-taxes/'||$_smarty_tpl->tpl_vars['url']->value==='/add-tax/'||$_smarty_tpl->tpl_vars['url']->value==='/edit-tax/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Tax+Rules?moved=true
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/manage-invoices/'||$_smarty_tpl->tpl_vars['url']->value==='/add-invoice/'||$_smarty_tpl->tpl_vars['url']->value==='/edit-invoice/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Invoices
	
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/statistics/guest-alerts/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Guest+Alerts
	
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/adminpswd/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Admin+Password
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/settings/'){?>
			http://wiki.smartjobboard.com/display/sjb42/System+Settings
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/alphabet-letters/'){?>
			<?php if (strpos($_smarty_tpl->tpl_vars['params']->value,'action=edit')!==false){?>
				http://wiki.smartjobboard.com/pages/viewpage.action?pageId=327723#AlphabetLettersforSearchbyCompany-EditingAlphabet
			<?php }elseif(strpos($_smarty_tpl->tpl_vars['params']->value,'action=new')!==false){?>
				http://wiki.smartjobboard.com/pages/viewpage.action?pageId=327723#AlphabetLettersforSearchbyCompany-AddingaNewAlphabet
			<?php }else{ ?>
				http://wiki.smartjobboard.com/pages/viewpage.action?pageId=327723
			<?php }?>
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value=='/social-media/'){?>
			<?php if (strpos($_smarty_tpl->tpl_vars['params']->value,'soc_network=facebook')!==false){?>
				http://wiki.smartjobboard.com/display/sjb42/Facebook#Facebook-Addingnewfeed
			<?php }elseif(strpos($_smarty_tpl->tpl_vars['params']->value,'soc_network=linkedin')!==false){?>
				http://wiki.smartjobboard.com/display/sjb42/Linkedin#Linkedin-Addingnewfeed
			<?php }elseif(strpos($_smarty_tpl->tpl_vars['params']->value,'soc_network=twitter')!==false){?>
				http://wiki.smartjobboard.com/display/sjb42/Twitter#Twitter-Addingnewfeed
			<?php }else{ ?>
				http://wiki.smartjobboard.com/display/sjb42/Social+Media
			<?php }?>
		<?php }elseif(strpos($_smarty_tpl->tpl_vars['url']->value,'/social-media/facebook')!==false){?>
			http://wiki.smartjobboard.com/display/sjb42/Facebook
		<?php }elseif(strpos($_smarty_tpl->tpl_vars['url']->value,'/social-media/linkedin')!==false){?>
			http://wiki.smartjobboard.com/display/sjb42/Linkedin
		<?php }elseif(strpos($_smarty_tpl->tpl_vars['url']->value,'/social-media/twitter')!==false){?>
			http://wiki.smartjobboard.com/display/sjb42/Twitter
		<?php }elseif(strpos($_smarty_tpl->tpl_vars['url']->value,'/social-media/googleplus')!==false){?>
			http://wiki.smartjobboard.com/display/sjb42/Google+Plus
		<?php }elseif(strpos($_smarty_tpl->tpl_vars['url']->value,'/social-media/bitly')!==false){?>
			http://wiki.smartjobboard.com/display/sjb42/Bitly
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/geographic-data/'){?>
			http://wiki.smartjobboard.com/display/sjb42/ZipCode+Database
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/manage-breadcrumbs/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Breadcrumbs+Config
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/filters/'){?>
			http://wiki.smartjobboard.com/display/sjb42/HTML+filters
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/currency-list/'){?>
			<?php if (strpos($_smarty_tpl->tpl_vars['params']->value,'action=add')!==false){?>
				http://wiki.smartjobboard.com/display/sjb42/Manage+Currencies#ManageCurrencies-AddingaNewCurrency
			<?php }elseif(strpos($_smarty_tpl->tpl_vars['params']->value,'action=edit')!==false){?>
				http://wiki.smartjobboard.com/display/sjb42/Manage+Currencies#ManageCurrencies-EditingCurrencies
			<?php }else{ ?>
				http://wiki.smartjobboard.com/display/sjb42/Manage+Currencies
			<?php }?>
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/task-scheduler-settings/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Task+Scheduler
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/system/miscellaneous/plugins/'&&!$_smarty_tpl->tpl_vars['params']->value){?>
			http://wiki.smartjobboard.com/display/sjb42/Plugins
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/system/miscellaneous/plugins/'&&$_smarty_tpl->tpl_vars['params']->value){?>
			<?php if ($_smarty_tpl->tpl_vars['params']->value==='action=settings&amp;plugin=PhpBBBridgePlugin'){?>
				http://wiki.smartjobboard.com/display/sjb42/PhpBB+forum+integration+plugin
			<?php }elseif(strpos($_smarty_tpl->tpl_vars['params']->value,'WordPressBridgePlugin')!==false){?>
				http://wiki.smartjobboard.com/display/sjb42/Wordpress+integration+plugin
			<?php }elseif(strpos($_smarty_tpl->tpl_vars['params']->value,'TwitterIntegrationPlugin')!==false){?>
				<?php if (strpos($_smarty_tpl->tpl_vars['params']->value,'action=edit_feed')!==false){?>
					http://wiki.smartjobboard.com/display/sjb42/Twitter+Integration+Plugin
				<?php }elseif(strpos($_smarty_tpl->tpl_vars['params']->value,'action=add_feed')!==false){?>
					http://wiki.smartjobboard.com/display/sjb42/Twitter+Integration+Plugin#TwitterIntegrationPlugin-CreatingaNewFeed
				<?php }?>
			<?php }elseif(strpos($_smarty_tpl->tpl_vars['params']->value,'GooglePlusSocialPlugin')!==false){?>
				http://wiki.smartjobboard.com/display/sjb42/Google+Plus
			<?php }elseif(strpos($_smarty_tpl->tpl_vars['params']->value,'FacebookSocialPlugin')!==false){?>
				http://wiki.smartjobboard.com/display/sjb42/Facebook+Plugin
			<?php }elseif(strpos($_smarty_tpl->tpl_vars['params']->value,'LinkedinSocialPlugin')!==false){?>
				http://wiki.smartjobboard.com/display/sjb42/LinkedIn+Plugin
			<?php }elseif(strpos($_smarty_tpl->tpl_vars['params']->value,'ShareThisPlugin')!==false){?>
				http://wiki.smartjobboard.com/display/sjb42/ShareThis+Plugin
			<?php }elseif(strpos($_smarty_tpl->tpl_vars['params']->value,'ShareThisPlugin')!==false){?>
				http://wiki.smartjobboard.com/display/sjb42/ShareThis+Plugin
			<?php }elseif(strpos($_smarty_tpl->tpl_vars['params']->value,'CaptchaPlugin')!==false){?>
				http://wiki.smartjobboard.com/display/sjb42/CAPTCHA+Plugin
			<?php }elseif(strpos($_smarty_tpl->tpl_vars['params']->value,'BeyondPlugin')!==false){?>
				http://wiki.smartjobboard.com/display/sjb42/Beyond+Plugin
			<?php }elseif(strpos($_smarty_tpl->tpl_vars['params']->value,'IndeedPlugin')!==false){?>
				http://wiki.smartjobboard.com/display/sjb42/Indeed+Plugin
			<?php }elseif(strpos($_smarty_tpl->tpl_vars['params']->value,'SimplyHiredPlugin')!==false){?>
				http://wiki.smartjobboard.com/display/sjb42/SimplyHired+Plugin
			<?php }elseif(strpos($_smarty_tpl->tpl_vars['params']->value,'MailChimpPlugin')!==false){?>
				http://wiki.smartjobboard.com/display/sjb42/MailChimp+plug-in
			<?php }elseif(strpos($_smarty_tpl->tpl_vars['params']->value,'GoogleAnalyticsPlugin')!==false){?>
				http://wiki.smartjobboard.com/display/sjb42/Google+Analytics+Plugin
			<?php }?>
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/refine-search-settings/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Refine+Search+Settings
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/backup/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Backup-Restore
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/flag-listing-settings/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Flag+Listing+Settings
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/manage-subadmins/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Admin+Sub+Accounts
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/add-subadmin/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Admin+Sub+Accounts#AdminSubAccounts-CreatingaNewSub-Account
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/edit-subadmin/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Admin+Sub+Accounts
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/countries/'||$_smarty_tpl->tpl_vars['url']->value==='/add-country/'||$_smarty_tpl->tpl_vars['url']->value==='/edit-country/'||$_smarty_tpl->tpl_vars['url']->value==='/import-countries/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Countries 
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/states/'||$_smarty_tpl->tpl_vars['url']->value==='/add-state/'||$_smarty_tpl->tpl_vars['url']->value==='/edit-state/'||$_smarty_tpl->tpl_vars['url']->value==='/import-states/'){?>
			http://wiki.smartjobboard.com/pages/viewpage.action?pageId=6193229
	
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/manage-languages/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Manage+Languages
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/add-language/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Manage+Languages#ManageLanguages-AddingaNewLanguage
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/edit-language/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Manage+Languages#ManageLanguages-EditingLanguages
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/manage-phrases/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Translate+Phrases
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/import-language/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Import+Language
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/export-language/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Export+Language
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/add-phrase/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Translate+Phrases#TranslatePhrases-AddingaNewPhrase
	
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/products/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Products
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/add-product/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Products#Products-AddingaNewProduct
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/edit-product/'&&$_smarty_tpl->tpl_vars['params']->value){?>
			<?php if ($_smarty_tpl->tpl_vars['params']->value){?>
				http://wiki.smartjobboard.com/display/sjb42/Products#Products-EditingaProduct
			<?php }?>
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/promotions/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Promotions
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/add-promotion-code/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Promotions#Promotions-Addinganewpromotioncode
		<?php }elseif(strpos($_smarty_tpl->tpl_vars['url']->value,'/promotions/log/')!==false){?>
			http://wiki.smartjobboard.com/display/sjb42/Promotions
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value=='/statistics/promotions/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Promotions+Usage
		<?php }elseif(strpos($_smarty_tpl->tpl_vars['url']->value,'/edit-promotion-code/')!==false){?>
			http://wiki.smartjobboard.com/display/sjb42/Promotions
	
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/general-statistics/'){?>
			http://wiki.smartjobboard.com/display/sjb42/General+Statistics
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/listings-statistics/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Listings
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/applications-and-views/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Applications+and+Views
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/sales/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Sales
	
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/email-log/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Email+Log
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/edit-email-templates/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Email+Templates
		<?php }elseif($_smarty_tpl->tpl_vars['url']->value==='/update-to-new-version/'){?>
			http://wiki.smartjobboard.com/display/sjb42/Updates
		<?php }else{ ?>
			http://wiki.smartjobboard.com/display/sjb42/
		<?php }?>
	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<table border="0" cellpadding="0" cellspacing="0" width="100%" id="structure"  height="100%">
		<tr>
			<td id="left" valign="top" height="100%">
				<div id="leftHeader" style="text-align:right">
					<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
" id="logoLink"></a>
                    <span class="packageVersion">version <?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['version']['major'];?>
.<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['version']['minor'];?>
 build <?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['version']['build'];?>
</span>
				</div>
				<div class="clr"><br/></div>
				<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['subAdminSID']>0){?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"menu",'function'=>"show_subadmin_menu"),$_smarty_tpl);?>

				<?php }?>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"menu",'function'=>"show_left_menu"),$_smarty_tpl);?>

				<div class="clr"><br/></div>
			</td>
			<td valign="top" height="100%">
				<div class="manual">
					<a href="<?php echo Smarty::$_smarty_vars['capture']['url_for_wiki'];?>
" target="_blank"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Help for this page<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
question.png" border="0" class="helpicon" /> </a>
					<form id="langSwitcherForm" method="get" action="">
						<select name="lang" onchange="location.href='<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['admin_site_url'];?>
<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
?lang='+this.value+'&amp;<?php echo $_smarty_tpl->tpl_vars['params']->value;?>
'" style="margin-top:5px; width: 200px;">
						<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['GLOBALS']->value['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['language']->value['id']==$_smarty_tpl->tpl_vars['GLOBALS']->value['current_language']){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['language']->value['caption'];?>
</option>
						<?php } ?>
						</select>
					</form>
				</div>
				<div id="messageBox"></div>

				<div id="topGray">
					<div id="updateInfoBlock">
						<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/update-to-new-version/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
New update available<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
						<span id="closeUpdateInfoBlock">X</span>
					</div>
					<div id="breadCrumbs">
						<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['user_page_uri']!=="/"){?><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Dashboard<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a> &#187;<?php }?> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['ADMIN_BREADCRUMBS']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</div>
					<div id="topRight">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Welcome back<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
, <?php echo $_SESSION['username'];?>
<br/>
						<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Dashboard<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/users/logout/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Log out<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
					</div>
					<div id="suggest-feature">
						<a href="http://ideas.smartjobboard.com" target="_blank"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Suggest a Feature<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
					</div>
				</div>
				
				<div class="InContent">
					<div style="margin: 0 215px 0 0">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>'flash_messages','function'=>'display'),$_smarty_tpl);?>

					</div>
					<?php echo $_smarty_tpl->tpl_vars['MAIN_CONTENT']->value;?>

					<div class="clr"><br/></div>
				</div>
			
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div id="footer">
					Copyright &copy; 2013 Powered by <a href="http://www.smartjobboard.com/">SmartJobBoard</a> &#124; <a href="http://wiki.smartjobboard.com/display/sjb42/SmartJobBoard+v4.2+User+Manual">User Manual</a>
				</div>
			</td>
		</tr>
	</table>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"miscellaneous",'function'=>"profiler"),$_smarty_tpl);?>

</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.13, created on 2015-07-09 21:00:51
         compiled from "template_progressiveview_user:index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18328559efd23eb54f7-64164322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4129500d662fa668d28a0b493873cac51c502847' => 
    array (
      0 => 'template_progressiveview_user:index.tpl',
      1 => 1389706152,
      2 => 'template_progressiveview_user',
    ),
  ),
  'nocache_hash' => '18328559efd23eb54f7-64164322',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'METADATA' => 0,
    'KEYWORDS' => 0,
    'DESCRIPTION' => 0,
    'GLOBALS' => 0,
    'TITLE' => 0,
    'HEAD' => 0,
    'highlight_templates' => 0,
    'MAIN_CONTENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_559efd24187c01_50378679',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559efd24187c01_50378679')) {function content_559efd24187c01_50378679($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="keywords" content="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['KEYWORDS'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['KEYWORDS']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['KEYWORDS']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['KEYWORDS']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" />
	<meta name="description" content="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['DESCRIPTION'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['DESCRIPTION']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['DESCRIPTION']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['DESCRIPTION']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php if (!$_smarty_tpl->tpl_vars['GLOBALS']->value['page_not_found']){?><?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['site_title'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['TITLE']->value!=''){?><?php if (!$_smarty_tpl->tpl_vars['GLOBALS']->value['page_not_found']){?>:<?php }?> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['TITLE'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['TITLE']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['TITLE']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?></title>
	<link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/templates/_system/main/images/css/form.css" />
	<link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"design.css"),$_smarty_tpl);?>
" />
	<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['rightToLeft']){?><link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"designRight.css"),$_smarty_tpl);?>
" /><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['id']=='de'){?><link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"design-de.css"),$_smarty_tpl);?>
" /><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['id']=='fr'){?><link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"design-fr.css"),$_smarty_tpl);?>
" /><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['id']=='pt'){?><link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"design-pt.css"),$_smarty_tpl);?>
" /><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['id']=='hi'){?><link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"design-hi.css"),$_smarty_tpl);?>
" /><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['id']=='pl'){?><link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"design-pl.css"),$_smarty_tpl);?>
" /><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['id']=='ru'){?><link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"design-ru.css"),$_smarty_tpl);?>
" /><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['id']=='sr'){?><link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"design-sr.css"),$_smarty_tpl);?>
" /><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['id']=='zh'){?><link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"design-zh.css"),$_smarty_tpl);?>
" /><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['id']=='ro'){?><link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"design-ro.css"),$_smarty_tpl);?>
" /><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['id']=='es'){?><link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"design-es.css"),$_smarty_tpl);?>
" /><?php }?>
	<link rel="alternate" type="application/rss+xml" title="RSS2.0" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/rss/" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/lib/rating/style.css" type="text/css" />
	<link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/ext/jquery/css/jquery-ui.css"  />
	<link rel="StyleSheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/ext/jquery/css/jquery.autocomplete.css" />
	<link rel="Stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/ext/jquery/css/jquery.multiselect.css" />
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/main.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/ext/jquery/jquery.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/ext/jquery/jquery-ui.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/ext/jquery/jquery.form.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/ext/jquery/jquery.validate.min.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/ext/jquery/jquery.autocomplete.pack.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/autoupload_functions.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/ext/jquery/jquery.highlight.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/ext/jquery/imagesize.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array('src'=>"js/jquery.selectbox-0.2.min.js"),$_smarty_tpl);?>
"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/jquery.bgiframe.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/multilist/jquery.multiselect.min.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/multilist_functions.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/jquery.poshytip.min.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/floatnumbers_functions.js"></script>
	<!--[if IE 8]>
		<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/ext/jquery/pie-ie.js"></script>
		<script language="javascript" type="text/javascript">
			$(function() {
				$("#employers").addClass("ie-employers");
				if (window.PIE) {
					$('input, a.button, a.standart-button, .ie-employers, .pagging a, .sbOptions, #currentSearch, #refineResults, #listing-details-menu, .instruction .instr_cont, #contactInfo, .products, .productLinks, #reports-navigation-in, #reports-navigation-in-border').each(function() {
						PIE.attach(this);
					});
				}
			});
		</script>
	<![endif]-->
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['HEAD'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['HEAD']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['HEAD']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['HEAD']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<?php if (isset($_smarty_tpl->tpl_vars['GLOBALS']->value['available_datepicker_localizations'][$_smarty_tpl->tpl_vars['GLOBALS']->value['current_language']])){?>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/ext/jquery/datepicker/i18n/jquery.ui.datepicker-<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language'];?>
.js" ></script>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['highlight_templates']->value){?>
	<!-- AJAX EDIT TEMPLATE SECTION -->
	<script language="javascript" type="text/javascript">
	$(document).ready(function(){
		$("html").addClass("highlight-body");
	});
	$(function() {

		$("div.inner_div").bind("mouseenter", function(){
			var width	= $(this).parent().css('width');
			var height	= $(this).parent().css('height');
			var offset	= $(this).parent().offset();

			// inner_block css-class z-index = 11
			// set highlight z-index = 10
			$("#highlighterBlock").css({
				'display':'block',
				'position':'absolute',
				'top':offset.top,
				'left':offset.left,
				'width':width,
				'height':height,
				'z-index': 10
			});
		});
		$("div.inner_div").bind("mouseleave", function(){
			$("#highlighterBlock").css({
				'display':'none'
			});
		});

		// lets catch clicks on 'edit template' links
		$("a.editTemplateLink").click(function() {
			//alert( $(this).attr('title'));
			var templateName	= $(this).attr('title');
			var link			= $(this).attr('href');
			editTemplateMenu(templateName, link);
			return false;
		});

		$(".editTemplateMenu").live('click', function() {
			var url = $(this).attr('href');
			popUpWindow(url, 700, 'Edit Template', true);
			return false;
		});

		function editTemplateMenu(templateName, url) {
			var title = 'Template';
			$("#messageBox").dialog( 'destroy' ).html('<b>Template Name:</b><br />' + templateName + '<br /><br /><a class="editTemplateMenu" style="font-weight: bold; color: #00f;" href="'+url+'" target="_blank">Edit this template</a>');
			$("#messageBox").dialog({
				width: 300,
				height: 150,
				modal: true,
				title: title
			}).dialog( 'open' );

			return false;
		}

	});

	</script>
	<!-- END OF AJAX EDIT TEMPLATE SECTION -->
	<?php }?>

	<script language="javascript" type="text/javascript">

	// Set global javascript value for page
	window.SJB_GlobalSiteUrl = '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
';
	window.SJB_UserSiteUrl   = '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
';

	$.ui.dialog.prototype.options.bgiframe = true;

	function popUpWindow(url, widthWin, title, parentReload, userLoggedIn, callbackFunction) {
		reloadPage = false;
		$("#loading").show();
		$("#messageBox").dialog( 'destroy' ).html('<?php $_smarty_tpl->_capture_stack[0][] = array("displayJobProgressBar", null, null); ob_start(); ?><img style="vertical-align: middle;" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/ext/jquery/progbar.gif" alt="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please wait ...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" /> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please wait ...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php echo preg_replace("%(?<!\\\\)'%", "\'",Smarty::$_smarty_vars['capture']['displayJobProgressBar']);?>
');
		$("#messageBox").dialog({
			autoOpen: false,
			width: widthWin,
			height: 'auto',
			modal: true,
			title: title,
			close: function(event, ui) {
				if (callbackFunction) {
					callbackFunction();
				}
				if (parentReload == true && !userLoggedIn && reloadPage == true) {
					parent.document.location.reload();
				}
			}
		}).hide();

		$.get(url, function(data){
			$("#messageBox").html(data).dialog("open").show();
			$("#loading").hide();
		});

		return false;
	}
	</script>

	
	<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['user_page_uri']=='/search-results-jobs/'){?>
		<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['plugins']['IndeedPlugin']['active']==1){?>
			<script type="text/javascript" src="https://gdc.indeed.com/ads/apiresults.js"></script>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['plugins']['SimplyHiredPlugin']['active']==1){?>
			<script type="text/javascript" src="https://api.simplyhired.com/c/jobs-api/js/xml-v2.js"></script>
		<?php }?>
	<?php }?>
</head>
<body>
	<div class="main-wrapper">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"users",'function'=>"cookie_preferences"),$_smarty_tpl);?>

		<div id="loading"></div>
		<div id="messageBox"></div>
		<?php echo $_smarty_tpl->getSubTemplate ("../menu/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="breadcrumb-bg"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"breadcrumbs",'function'=>"show_breadcrumbs"),$_smarty_tpl);?>
</div>
		<div class="clr"><br/></div>

		<div id="main-div-after">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>'flash_messages','function'=>'display'),$_smarty_tpl);?>

			<?php echo $_smarty_tpl->tpl_vars['MAIN_CONTENT']->value;?>

			<div class="clr"><br/></div>
			<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['plugins']['ShareThisPlugin']['active']==1&&$_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['display_for_all_pages']==1){?>
				<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['user_page_uri']!='/news/'&&$_smarty_tpl->tpl_vars['GLOBALS']->value['user_page_uri']!='/display-job/'&&$_smarty_tpl->tpl_vars['GLOBALS']->value['user_page_uri']!='/display-resume/'){?>
					<div id="shareThis"><?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['header_code'];?>
<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['code'];?>
</div>
				<?php }?>
			<?php }?>
			<div id="grayBgBanner"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"banners",'function'=>"show_banners",'group'=>"Bottom Banners"),$_smarty_tpl);?>
</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("../menu/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"miscellaneous",'function'=>"profiler"),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['highlight_templates']->value){?>
		<div id="highlighterBlock"></div>
	<?php }?>
</body>
</html>

<script type="text/javascript">
	$("#listings_per_page_form select").selectbox();
	$(".listings_per_page_form select").selectbox();
</script><?php }} ?>
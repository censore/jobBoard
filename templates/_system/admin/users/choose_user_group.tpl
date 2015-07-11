<script language="javascript">
	{literal}
		function formSubmit(url) {
			$("#messageBox").dialog('destroy');
			var options = {
				target: "#messageBox",
				url:  url,
				success: function(data) {
					$("#messageBox").dialog({
						width: 900,
						modal: true,
						title: "{/literal}[[Choose User]]{literal}",
					}).dialog( 'open' );
				}
			};
			$("#userGroups").ajaxSubmit(options);
			return false;
		}
	{/literal}
</script>
<br/>
<form id="userGroups" method="post" >
	<input type="hidden" name="search_template" value="choose_user_search.tpl" />
	<input type="hidden" name="template" value="choose_user.tpl" />
	{foreach from=$userGroupsInfo item=userGroup}
		<div style="float: left; padding-left: 10px; padding-bottom: 10px;"><a href="#" onClick="formSubmit('{$GLOBALS.site_url}/manage-{if $userGroup.id == 'Employer' || $userGroup.id == 'JobSeeker'}{$userGroup.id|lower}s{else}{$userGroup.id|lower}-users{/if}/')" class="grayButton">{$userGroup.name}</a></div>
	{/foreach}
</form>
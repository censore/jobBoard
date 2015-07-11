{breadcrumbs}<a href="{$GLOBALS.site_url}/manage-banner-groups/">Banners</a> &#187; '{$bannerGroup.id}' Group</a>{/breadcrumbs}
<h1><img src="{image}/icons/slide32.png" border="0" alt="" class="titleicon"/>'{$bannerGroup.id}' Group</h1>
{if $errors }
	{foreach from=$errors item=error}
		<p class="error">{$error}</p>
	{/foreach} 
{/if}

{*{if $form_submitted && !$errors}
	<p class="message">[[Your changes were successfully saved]]</p>
{/if}*}

<fieldset>
	<legend>Edit Banner Group</legend>
	<table>
		<form method="post" enctype="multipart/form-data">
			<input type="hidden" name="action" value="edit">
            <input type="hidden" id="submit" name="submit" value="save_banner">
			<input type="hidden" name="groupSID" value="{$bannerGroup.sid}">
			<tr>
				<td valign=top>Group ID</td>
				<td><input type="text" name="groupID" maxlength="20" value="{$bannerGroup.id}" /></td>
			</tr>
			<tr>
				<td valign=top>Number of Banners to Display At Once</td>
				<td><input type="text" name="number_banners_display_at_once" maxlength="20" value="{$bannerGroup.number_banners_display_at_once}" /></td>
			</tr>
			<tr>
				<td colspan="2" align="right">
                    <div class="floatRight">
                        <input type="submit" id="apply" value="Apply" class="grayButton"/>
                        <input type="submit" name="send" value="Save" class="grayButton" />
                    </div>
                </td>
			</tr>
		</form>
	</table>
</fieldset>
<div style="font-style: italic; font-size:90%">
	Please insert the following code to the templates where you want this banner group to appear:<br>
	<span style="color:blue;">{ldelim}module name="banners" function="show_banners" group="{$bannerGroup.id}"{rdelim}</span>
</div>

{literal}
	<script>
        $('#apply').click(
            function(){
                $('#submit').attr('value', 'apply');
            }
        );
    </script>
{/literal}
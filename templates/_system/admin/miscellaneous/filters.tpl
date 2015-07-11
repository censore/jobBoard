{breadcrumbs}HTML filters{/breadcrumbs}
<h1><img src="{image}/icons/exchange32.png" border="0" alt="" class="titleicon"/>HTML filters</h1>
<div style="font-size:11px; padding-bottom:20px;">
	On this page you can select which HTML tags will be allowed when entering or copying text to WYSIWYG editor.<br/>
	If you don't select any tag, all text will be saved as a plain text without any formatting. 
</div>
{literal}
	<style>
		.setting_butt{
			cursor: pointer;
			margin-bottom: 0px;
		}
		.setting_ico{
			padding-left: 5px;
			padding-right: 5px;
			float: left;
			display: block;
			width: 30px;
		}
		.setting_block
		{
			margin-left:50px;
		}
	</style>
<script>
	function checkAll(val) {
		var form = document.getElementById('htmlElem');
		var htmltags = form.getElementsByTagName('input');
		for(var i=0; i<htmltags.length; i++) {
			if(htmltags[i].type == 'checkbox'){
				switch (val) {
					case 'check':
						htmltags[i].checked = true;
						break;
					case 'uncheck':
						htmltags[i].checked = false;
						break;
				}
			}
		}
	}

	function checkTag(tagName, check) {
		$("input[name*='tags[" + tagName +  "]']").each(
				function () {
					this.checked = check;
				}
			);
	}
</script>
{/literal}
<form method=post id='htmlElem'>
	<div style='margin-bottom:20px;'><a href="#" onclick='checkAll("check")'>Check All</a> / <a href="#" onclick='checkAll("uncheck")'>Uncheck All</a></div>
	<table id="clear">
		<tr>
			<td> 
				{assign var="className" value="evenrow"}
				{foreach from=$htmltags item=attributes key=htmltag name=htmltagsloop}
					{if $smarty.foreach.htmltagsloop.iteration == $rowsInColumn}
						</td><td valign="top">
					{/if}
						{if $attributes}
							<div class="setting_butt"><div class="setting_ico">[+]</div><b><input type='checkbox' name='tags[{$htmltag}]' id='tags[{$htmltag}]' {if $savedFilters.$htmltag}checked{/if} onClick="javascript: checkTag('{$htmltag}', this.checked);"/>{$htmltag}</b></div>
						{else}
							<div><div class="setting_ico">&nbsp;</div><b><input type='checkbox' name='tags[{$htmltag}]' id='tags[{$htmltag}]' {if $savedFilters.$htmltag}checked{/if} onClick='javascript: test="tags[{$htmltag}]";'/>{$htmltag}</b></div>
						{/if}
							<div class="setting_block" style="display: none">
								{foreach from=$attributes item=attribute}
									<span><input type='checkbox' name='tags[{$htmltag}][{$attribute}]' {if $savedFilters.$htmltag.$attribute}{$savedFilters.$htmltag.$attribute}{/if} />{$attribute}</span>
								{/foreach}
							</div>
				{/foreach}
			</td>
		</tr>
		<tr>
			<td colspan="2"><div class="floatRight"><input type='submit' name='action' value='Save' class="greenButton" /></div></td>
		</tr>
	</table>
</form>

{literal}
<script>
var test = false;
$(".setting_butt").click(function(){
	var butt = $(this);
	var check = false;

	if(test) {
		check = document.getElementById(test);
		if(check) check = document.getElementById(test).checked;
	}

	if((check != true && test == false) || (check == true && $(this).next(".setting_block").css("display") == "none") || (check == false && test != false && $(this).next(".setting_block").css("display") == "block")) {
	$(this).next(".setting_block").slideToggle("normal", function(){
			if ($(this).css("display") == "block") {
				butt.children(".setting_ico").html("[-]");
			} else {
				butt.children(".setting_ico").html("[+]");
			}
		});
	}
	test = false;
});
</script>
{/literal}
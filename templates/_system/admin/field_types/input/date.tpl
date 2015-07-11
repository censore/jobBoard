<input type="text" class="input-date displayDate {if $complexField}complexField{/if}" name="{if $complexField}{$complexField}[{$id}][{$complexStep}]{else}{$id}{/if}" value="{tr type="date"}{if $mysql_date && !$complexField}{$mysql_date|escape:'html'}{else}{$value|escape:'html'}{/if}{/tr}" {if $GLOBALS.user_page_uri == '/add-invoice/' || $GLOBALS.user_page_uri == '/edit-invoice/'}style="width: 120px;"{/if}/>

<script>
	var dFormat = '{$GLOBALS.current_language_data.date_format}';
	{literal}
	dFormat = dFormat.replace('%m', "mm");
	dFormat = dFormat.replace('%d', "dd");
	dFormat = dFormat.replace('%Y', "yy");

		$(document).ready(function() {
	{/literal}$(".input-date").datepicker({literal}{
		dateFormat: dFormat,
		showOn: 'both',
		changeMonth: true,
		changeYear: true,
		minDate: new Date(1940, 1 - 1, 1),
		maxDate: '+10y',
		yearRange: '-99:+99',
		buttonImage: '{/literal}{image}icons/icon-calendar.png{literal}',
		buttonImageOnly: true
	});
	});
	{/literal}
</script>

<table cellpadding="5">

	{foreach from=$form_fields item=form_field}

		<tr>
			<td><b>{$form_field.caption}</b></td>
			<td> {display property=$form_field.id}</td>
		</tr>

	{/foreach}

</table>
<style>
	p,
	b,
	strong,
	.narrow-col,
	.col-wide,
	.narrow-col h3 {
		font-size: 30px;
	}
	.clrBorder,
	.clrBorder br,
	.clr,
	.clr br {
		position: absolute;
		line-height: 0px;
		clear: none;
	}
</style>
<table>
	{if $display_layout eq "2cols-wide"}
		<tr>
			<td>
				<span class="narrow-col">
					{module name="builder" function="get_fields" fieldsHolderID="col-narrow-left"}
				</span>
			</td>
			<td>
				<span class="narrow-col">{module name="builder" function="get_fields" fieldsHolderID="col-narrow-right"}
				</span>
			</td>
		</tr>
		<tr>
			{$smarty.capture.middleFHContent}
			<td colspan="2">
				<span class="col-wide">
					{module name="builder" function="get_fields" fieldsHolderID="col-wide"}
				</span>
			</td>
		</tr>
	{elseif $display_layout eq "1col-2rows"}
		<tr>
			<td>
				<span class="narrow-col">
					{module name="builder" function="get_fields" fieldsHolderID="col-narrow"}
				</span>
			</td>
			<td>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				{$smarty.capture.middleFHContent}
				{module name="builder" function="get_fields" fieldsHolderID="col-wide"}
			</td>
		</tr>
	{elseif $display_layout eq "wide-2cols"}
		<tr>
			{$smarty.capture.middleFHContent}
			<td colspan="2">
				<span class="col-wide">{module name="builder" function="get_fields" fieldsHolderID="col-wide"}</span>
			</td>
		</tr>
		<tr>
			<td>
				<span class="narrow-col">{module name="builder" function="get_fields" fieldsHolderID="col-narrow-left"}</span>
			</td>
			<td>
				<span class="narrow-col">{module name="builder" function="get_fields" fieldsHolderID="col-narrow-right"}</span>
			</td>
		</tr>
	{elseif $display_layout eq "2cols"}
		<tr>
			<td><span class="narrow-col">{module name="builder" function="get_fields" fieldsHolderID="col-narrow-left"}</span></td>
		</tr>
		<tr>
			<td><span class="narrow-col">{module name="builder" function="get_fields" fieldsHolderID="col-narrow-right"}</span></td>
		</tr>
	{else}
		{$smarty.capture.middleFHContent}
		<tr>
			<td>
				{module name="builder" function="get_fields" fieldsHolderID="col-wide"}
			</td>
		</tr>
	{/if}
</table>

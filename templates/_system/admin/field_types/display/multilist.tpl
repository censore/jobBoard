{tr type="multilist"}
{foreach from=$value item=list_value}
	{if $display_list_values.$list_value}
		{tr}{$display_list_values.$list_value}{/tr|escape:'html'}{if !$smarty.foreach.multifor.last}, {/if}
	{else}
		{tr}{$list_value}{/tr|escape:'html'}{if !$smarty.foreach.multifor.last}, {/if}
	{/if}
{/foreach}
{/tr}
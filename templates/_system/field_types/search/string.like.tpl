<input type="text" name="{$id}[like]"  id="{$id}" class="searchStringLike" value="{if $value.like}{$value.like|escape:'html'}{elseif $value.multi_like_and.0}{$value.multi_like_and.0|escape:'html'}{else}{$value.equal|escape:'html'}{/if}"/>
{if $parentID}
	{assign var="id" value=$id|replace:$parentID:''}
	{assign var="id" value=$id|replace:'_':''}
{/if}

{if $useAutocomplete == 1}
	{include file='../field_types/search/autocomplete.tpl'}
{/if}
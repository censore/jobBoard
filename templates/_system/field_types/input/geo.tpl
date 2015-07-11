<input id="{if $parentID}{$parentID}_{$id}{else}{$id}{/if}" type="text" class="inputGeo {if $complexField}complexField{/if}" value="{$value|escape:'html'}" name="{if $complexField}{$complexField}[{$id}][{$complexStep}]{elseif $parentID}{$parentID}[{$id}]{else}{$id}{/if}" />

{if $useAutocomplete == 1}
	{include file='../field_types/search/autocomplete.tpl'}
{/if}
<input type="text" value="{if $id == 'keywords'}{$value.all_words|escape:'html'}{else}{$value.like|escape:'html'}{/if}"  name="{$id}[{if $id == 'keywords'}all_words{else}like{/if}]"  id="{$id}" />

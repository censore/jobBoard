<input type="text" value="{$value}" class="{if $complexField}complexField{/if}" name="{if $complexField}{$complexField}[{$id}][{$complexStep}]{else}{$id}{/if}" onblur="checkField($(this), '{$id}')"/><span class="aMessage" id="am_{$id}"></span>
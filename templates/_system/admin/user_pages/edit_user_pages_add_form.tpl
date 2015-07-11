<script language="JavaScript" type="text/javascript">
<!--//

var ModulesFunctions = new Array();
{foreach from=$LIST_FUNCTIONS key=KEY_MOD item=VALUE_ARRAY_FUNC}  				    	
	ModulesFunctions["{$KEY_MOD}"]=[[-1,'Choose function:']{foreach from=$VALUE_ARRAY_FUNC key=KEY_FUNC item=VALUE_FUNC},[{$KEY_FUNC},'{$VALUE_FUNC}']{/foreach}];
{/foreach}

var Params = new Array();
{foreach from=$LIST_PARAMS key=KEY_MOD item=VALUE_ARRAY_FUNC}
  {foreach from=$VALUE_ARRAY_FUNC key=KEY_FUNC item=VALUE_ARRAY_PARAM}
     Params["{$KEY_MOD}", "{$KEY_FUNC}"]=[[-1,'reserved']{foreach from=$VALUE_ARRAY_PARAM key=KEY_PARAM item=VALUE_PARAM},[{$KEY_PARAM},'{$VALUE_PARAM}']{/foreach}];
  {/foreach}   
{/foreach}

{literal}

function loadFunctionsForModule(form) {	
    document.getElementById("table_params").innerHTML = '';	
   	  	    
	module_value = form.modules.options[form.modules.selectedIndex].text;
	form.functions.options.length=0;
	for (var i = 0; i < ModulesFunctions[module_value].length; i++) {
		newOpt = document.createElement("option");
		newOpt.text = ModulesFunctions[module_value][i][1];
		form.functions.options.add(newOpt);
	}
}

function loadParamsForFunction() {
  document.getElementById("table_params").innerHTML = ''; 

  cbModules=document.getElementById("modules");
  cbFunctions=document.getElementById("functions");	  
  module_value = cbModules[cbModules.selectedIndex].text;
  function_value = cbFunctions[cbFunctions.selectedIndex].text;  

  if ( (module_value != "Choose module:") && (function_value != "Choose function:") ) {
     strHTML = '';
     for (var i = 1; i < Params[module_value,function_value].length; i++) {
        str_key = 'value_param' + (i-1);
        
        strHTML = strHTML + "<tr><td>"+ Params[module_value,function_value][i][1] +
         		  "</td><td>= <input type='text' name='"+ Params[module_value,function_value][i][1] +"' id='"+ str_key +"' value='' class='text'> </td></tr>";   		   						           		  
     } //for     
     if (strHTML != '') {
     	strHTML = '<table class="fieldset" name="table_parameters">'+ strHTML + '</table>';
     	document.getElementById("table_params").innerHTML = strHTML;     
     }
  } //if  
  
}

function formTextOfParams() {
  str_param = '';
  i = 0;
  while (1==1) {  
    param = document.getElementById("value_param" + i);    
    if (param == null)
        break;
    key_param   = param.name.replace('params_', '');
    value_param = trim(param.value);
    if (value_param != '') {
	    if (str_param == '')
	      str_param = key_param + "=" + value_param;
	    else
	      str_param = str_param + "\r\n" + key_param + "=" + value_param;
	}
    i++;    
  }
  document.getElementById("parameters").value = str_param;
}	

// *************************************************************************

function check() {
  obj_params = document.getElementById("table_params");
  obj_params.innerHTML = "";
} 


{/literal}


//-->
</script>

{if $IS_NEW == 1}
    {breadcrumbs}<a href="{$GLOBALS.site_url}/user-pages/">Site Pages</a> &#187; Add User Page{/breadcrumbs}
    <h1><img src="{image}/icons/linedpaperplus32.png" border="0" alt="" class="titleicon"/>Add User Page</h1>
{else}
    {breadcrumbs}<a href="{$GLOBALS.site_url}/user-pages/">Site Pages</a> &#187; Edit User Page{/breadcrumbs}
    <h1><img src="{image}/icons/linedpaperpencil32.png" border="0" alt="" class="titleicon"/>Edit User Page</h1>
{/if}

    {foreach from=$ERRORS key=ERROR item=ERROR_DATA}
    	{if $ERROR == 'URI_NOT_SPECIFIED'}<p class="error">The page URI is not specified</p>{/if}
    	{if $ERROR == 'MODULE_NOT_SPECIFIED'}<p class="error">Module is not specified</p>{/if}
    	{if $ERROR == 'FUNCTION_NOT_SPECIFIED'}<p class="error">Function is not specified</p>{/if}
    	{if $ERROR == 'ADD_ERROR'}<p class="error">Cannot add new User Page. (must be not exist module and function)</p>{/if}
    	{if $ERROR == 'CHANGE_ERROR'}<p class="error">Cannot change data of User Page. (must be not exist module and function)</p>{/if}
    	{if $ERROR == 'PAGE_EXISTS'}<p class="error">Page with such URI is already exist</p>{/if}	
    	{if $ERROR == 'DELETE_PAGE'}<p class="error">Page URI is not defined</p>{/if}
    	{if $ERROR == 'NON_EXISTENT_MODULE'}<p class="error">Module named "{$ERROR_DATA}" does not exist.</p>{/if} 
    	{if $ERROR == 'PAGE_ALREADY_EXISTS'}<p class="error">User page with such uri already exists</p>{/if} 
    {/foreach}

<form name="form1" method="post">
	<input type="hidden" name="action" value="{$action}" />
    <input type="hidden" id="submit" name="submit" value="save_page" />
	<fieldset>
		<legend>{if $IS_NEW == 1}Add a New User Page{else}Edit User Page{/if}</legend>
		<table>
			<tr><td colspan="2"><input type="hidden" name="ID" value="{$user_page.ID}" /></td></tr>
			<tr>
				<td>URI</td>
				<td><input type="text" name="uri" value="{$user_page.uri}" /></td>
			</tr>
			<tr>
				<td>Pass parameters via URI</td>
				<td><input type="checkbox" name="pass_parameters_via_uri" {if $user_page.pass_parameters_via_uri} checked="checked" {/if} /></td>
			</tr>
			<tr>
				<td>Title</td>
				<td><input type="text" name="title" value="{$user_page.title}" /></td>
			</tr>
			<tr>
				<td>Template</td>
				<td><input type="text" name="template" value="{$user_page.template}" /></td>
			</tr>
			<tr>
				<td>Module</td>
				<td>
					<select size="1" name="module" id="modules" onchange="loadFunctionsForModule(this.form)">
						<option selected>Choose module:</option>
					    {foreach from=$LIST_MODULES key=KEY_MOD item=VALUE_MOD}  				    
						    {if $VALUE_MOD == $user_page.module}
                                <option selected="selected">{$VALUE_MOD}</option>
						    {else}
                                <option>{$VALUE_MOD}</option>
						    {/if}				
					  	{/foreach}
					</select>
				</td>
			</tr>
			<tr>
				<td>Function</td>
				<td>
					<select size="1" name="function" id="functions" onchange="loadParamsForFunction()">
						<option selected>Choose function:</option>		
					    {foreach from=$LIST_FUNCTIONS[$user_page.module] key=KEY_FUNC item=VALUE_FUNC}  				    		    	
						    {if $VALUE_FUNC == $user_page.function}
                                <option selected="selected">{$VALUE_FUNC}</option>
						    {else}
                                <option>{$VALUE_FUNC}</option>
						    {/if}				
					  	{/foreach}
                    </select>
				</td>
			</tr>
			<tr>
				<td valign=top>Parameters:</td>
				<td> 
					<div id="table_params">
						<table class="fieldset" name="table_parameters">
					    {foreach from=$LIST_PARAMS key=KEY_MOD item=VALUE_ARRAY_FUNC}  				    
					      {if ($KEY_MOD == $user_page.module)}
					    	{foreach from=$VALUE_ARRAY_FUNC key=KEY_FUNC item=VALUE_ARRAY_PARAM}  				    	    
					      	  {if ($KEY_FUNC == $user_page.function)}	    	
								{foreach from=$VALUE_ARRAY_PARAM key=KEY_PARAM item=VALUE_PARAM}			
					    		  <tr><td> {$VALUE_PARAM} </td>
					    		  {assign var="flag_param" value="0"}
								  {foreach from=$a_params key=key_a item=value_a}			
								    {if ($key_a == $VALUE_PARAM)}  
					    		   		<td>= <input type="text" name="params_{$VALUE_PARAM}" id="value_param{$KEY_PARAM}" value="{$value_a}" /></td>
					    		   		{assign var="flag_param" value="1"}
								    {/if}
								  {/foreach}
								  {if ($flag_param == 0)}
				    		   		<td>= <input type="text" name="params_{$VALUE_PARAM}" id="value_param{$KEY_PARAM}" value="" /></td>
								  {/if}	
								  </tr>	      	  
					    		{/foreach}	      	  
				    	      {/if}				
					  	    {/foreach}
						  {/if}				
					  	{/foreach}
					  	</table>
				  	</div>
				</td>
			</tr>
			<tr>
				<td coslpan="2"><input type="hidden" name="parameters" id="parameters" value="{$user_page.parameters}" /></td>
			</tr>
			<tr>
				<td valign="top">Keywords</td>
				<td><textarea name="keywords" cols="55" rows="4">{$user_page.keywords}</textarea></td>
			</tr>
			<tr>
				<td valign=top>Description</td>
				<td><textarea name="description" cols="55" rows="4">{$user_page.description}</textarea></td>
			</tr>
			<tr>
				<td colspan="2">
                    <div class="floatRight">
                        {if ! $IS_NEW}
                            <input type="submit" id="apply" value="Apply" class="grayButton" onclick="formTextOfParams()" />
                        {/if}
                        <input type="submit" value="{if $IS_NEW == 1}Add{else}Save{/if}" class="grayButton" onclick="formTextOfParams()" />
                    </div>
                </td>
			</tr>
		</table>
	</fieldset>
</form>

{literal}
	<script>
        $('#apply').click(
            function(){
                $('#submit').attr('value', 'apply_page');
            }
        );
    </script>
{/literal}
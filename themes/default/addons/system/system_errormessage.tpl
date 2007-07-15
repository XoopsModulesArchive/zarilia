<{$zarilia_header}>
<div style="vertical-align: middle;"></div>
<{if $error_title }>
	<h3 style="text-align: left; color: Red;"><{$error_image}> <{$error_title}></h3>
<{/if}>

<{if $error_heading }>
	<div style="text-align:left;"><strong><{$error_heading}></strong></div><br />
<{/if}>
<{if $error_description }>
	<div style="text-align:left;"><{$error_description}></div>
<{/if}>
<{section name=i loop=$error_array}>
	<div><{$smarty.const._ER_PAGE_NO}> <{$error_array[i].errno}></div>
	<div><{$smarty.const._ER_PAGE_REASON}> <{$error_array[i].errstr}></div>
	<div><{$smarty.const._ER_PAGE_FILE}> <{$error_array[i].errfile}></div>
	<div><{$smarty.const._ER_PAGE_LINE}> <{$error_array[i].errline}></div>
<{/section}>
<{if $error_button }>
	<div style="text-align: center; padding: 22px;"><input type="submit" class="formbutton" name="submit" onclick="history.go(-1);return false;" value="<{$smarty.const._RETURN}>" /></div>
<{/if}>

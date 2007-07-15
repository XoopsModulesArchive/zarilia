<?php /* Smarty version 2.6.16, created on 2007-07-02 11:27:56
         compiled from db:system_mediaupload.html */ ?>
<!DOCTYPE html PUBLIC '//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['zarilia_langcode']; ?>
" lang="<?php echo $this->_tpl_vars['zarilia_langcode']; ?>
">
<head>
<meta http-equiv="content-type" content="text/html; charset=<?php echo $this->_tpl_vars['zarilia_charset']; ?>
" />
<meta http-equiv="content-language" content="<?php echo $this->_tpl_vars['zarilia_langcode']; ?>
" />
<title><?php echo $this->_tpl_vars['zarilia_sitename']; ?>
 <?php echo @_MA_AD_MEDIA_MANAGER; ?>
</title>
<?php echo $this->_tpl_vars['zarilia_header']; ?>

<?php echo $this->_tpl_vars['zarilia_addon_header']; ?>

<?php echo $this->_tpl_vars['media_form']['javascript']; ?>


</head><body onload="window.resizeTo(<?php echo $this->_tpl_vars['xsize']; ?>
, <?php echo $this->_tpl_vars['ysize']; ?>
);">
<br /><br />
<table cellspacing="0" cellpadding="2" width="90%" id="medianav" align="center" class="outer">
  <tr class="even">
    <td align="left"><b><?php echo @_MA_AD_MEDIA_MANAGER; ?>
</b> : <?php echo @_MA_AD_MEDIA_UPLOAD; ?>
</td>
  </tr>
</table><br />

<form name="<?php echo $this->_tpl_vars['media_form']['name']; ?>
" id="<?php echo $this->_tpl_vars['media_form']['name']; ?>
" op="<?php echo $this->_tpl_vars['media_form']['op']; ?>
" method="<?php echo $this->_tpl_vars['media_form']['method']; ?>
" <?php echo $this->_tpl_vars['media_form']['extra']; ?>
>
<table id="mediamain" width = "90%" align="center" class="outer">
  <tr align="left">
    <th colspan="2"><?php echo @_MA_AD_MEDIA_CREATE; ?>
</th>
  </tr>
  <!-- start of form elements loop -->
<?php $_from = $this->_tpl_vars['media_form']['elements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['element']):
?>
	<?php if ($this->_tpl_vars['element']['hidden'] != true): ?>
	  <tr valign="top">
	    <td class="head"><?php echo $this->_tpl_vars['element']['caption']; ?>
</td>
	    <td class="even"><?php echo $this->_tpl_vars['element']['body']; ?>
</td>
	  </tr>
	<?php else: ?>
		<?php echo $this->_tpl_vars['element']['body']; ?>

	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
  <!-- end of form elements loop -->
  <tr>
    <td colspan="2" class="foot" align="center">&nbsp;</td>
  </tr>
</table>
</form>

<div style="padding-top: 6px; padding-bottom: 6px; padding-right: 6px; text-align: center; ">
	<input value="<?php echo @_CLOSE; ?>
" type="button" class="formbutton" onclick="javascript:window.close();" />
</div>
</body>
</html>
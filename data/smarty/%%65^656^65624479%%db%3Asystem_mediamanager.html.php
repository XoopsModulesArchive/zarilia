<?php /* Smarty version 2.6.16, created on 2007-07-02 11:27:56
         compiled from db:system_mediamanager.html */ ?>
<!DOCTYPE html PUBLIC '//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['zarilia_langcode']; ?>
" lang="<?php echo $this->_tpl_vars['zarilia_langcode']; ?>
">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="content-language" content="<?php echo $this->_tpl_vars['zarilia_langcode']; ?>
" />
<title><?php echo $this->_tpl_vars['sitename'];  echo @_MA_AD_MEDIA_MANAGER; ?>
</title>
<?php echo $this->_tpl_vars['zarilia_header']; ?>

<?php echo $this->_tpl_vars['zarilia_addon_header']; ?>

<script type="text/javascript">
<!--//
function appendCode(addCode) {
	var targetDom = window.opener.zariliaGetElementById('<?php echo $this->_tpl_vars['target']; ?>
');

	if (targetDom.createTextRange && targetDom.caretPos){
  		var caretPos = targetDom.caretPos;
		caretPos.text = caretPos.text.charAt(caretPos.text.length - 1)
== ' ' ? addCode + ' ' : addCode;
	} else if (targetDom.getSelection && targetDom.caretPos){
		var caretPos = targetDom.caretPos;
		caretPos.text = caretPos.text.charat(caretPos.text.length - 1)
== ' ' ? addCode + ' ' : addCode;
	} else {
		targetDom.value = targetDom.value + addCode;
  	}
	//window.close();
	return;
}

function InsertWysiwygImage(addCode)
{
	window.opener.XK_InsertImage('<?php echo $this->_tpl_vars['target']; ?>
',addCode,'');
	//window.close();
	return;
};
//-->
</script>

</head>
<body onload="window.resizeTo(<?php echo $this->_tpl_vars['xsize']; ?>
, <?php echo $this->_tpl_vars['ysize']; ?>
);">
<br /><br />
  <table cellspacing="1" id="imagenav" width="90%" align="center">
    <tr>
      <td align="left" width="50%"><?php echo $this->_tpl_vars['selection_box']; ?>

	  </td>
	 <?php if ($this->_tpl_vars['media_cid'] > 0): ?>
      <td align="right" width="50%">
	   <a href="<?php echo $this->_tpl_vars['zarilia_url']; ?>
/mediamanager.php?target=<?php echo $this->_tpl_vars['target']; ?>
&amp;op=upload&amp;media_cid=<?php echo $this->_tpl_vars['media_cid']; ?>
"> <img src='<?php echo $this->_tpl_vars['zarilia_url']; ?>
/images/upload.png' border='0' alt='<?php echo @_ADDIMAGE; ?>
' align= "absmiddle"/></a>
	  </td>
	 <?php endif; ?>
   </tr>
  </table>
<br />
<table id="imagemain" cellspacing="1" border="0" width="90%" align="center" class="outers">
  <tr align="left">
    <th><?php echo @_MA_AD_MEDIA_DETAILS; ?>
</th>
    <th><?php echo @_MA_AD_MEDIA_IMAGE; ?>
</th>
  </tr>
<?php if ($this->_tpl_vars['media_total'] > 0): ?>
 <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['images']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
  <tr valign="top">
    <td class='head' nowrap="nowrap:">
	<input type="hidden" name="image_id[]" value="<?php echo $this->_tpl_vars['images'][$this->_sections['i']['index']]['id']; ?>
" />
	 <table>
	  <tr>
	   <td width="30%"><b><?php echo @_MA_AD_MEDIA_EREALNAME; ?>
</b></td><td><?php echo $this->_tpl_vars['images'][$this->_sections['i']['index']]['nicename']; ?>
</td>
	  </tr>
	  <tr>
	   <td width="30%"><b><?php echo @_MA_AD_MEDIA_ENAME; ?>
</b></td><td><?php echo $this->_tpl_vars['images'][$this->_sections['i']['index']]['realname']; ?>
</td>
	  </tr>
	  <tr>
	   <td width="30%"><b><?php echo @_MA_AD_MEDIA_EFILESIZE; ?>
</b></td><td><?php echo $this->_tpl_vars['images'][$this->_sections['i']['index']]['size']; ?>
</td>
	  </tr>
	   <?php if ($this->_tpl_vars['images'][$this->_sections['i']['index']]['width']): ?>
	  <tr>
	    <td width="30%"><b><?php echo @_MA_AD_MEDIA_EDIM; ?>
</b></td><td><?php echo $this->_tpl_vars['lang_weight']; ?>
: <?php echo $this->_tpl_vars['images'][$this->_sections['i']['index']]['width']; ?>
 X <?php echo $this->_tpl_vars['lang_height']; ?>
: <?php echo $this->_tpl_vars['images'][$this->_sections['i']['index']]['height']; ?>
</td>
	  </tr>
	   <?php endif; ?>
	  <tr>
	   <td width="30%"><b><?php echo @_MA_AD_MEDIA_EMIMETYPE; ?>
</b></td><td><?php echo $this->_tpl_vars['images'][$this->_sections['i']['index']]['mimetype']; ?>
</td>
	  </tr>
	 </table>
	</td>
    <td width= "70%" class = 'even' style="text-align: center;">
	  <div align="center">
		<?php echo $this->_tpl_vars['images'][$this->_sections['i']['index']]['src']; ?>

	  </div>
	  <div align="center">
		 <?php echo $this->_tpl_vars['media']; ?>

		 <?php if ($this->_tpl_vars['images'][$this->_sections['i']['index']]['media'] != 1): ?>
		  <a href="#" onclick="javascript:appendCode('<?php echo $this->_tpl_vars['images'][$this->_sections['i']['index']]['lxcode']; ?>
');"> <img src="<?php echo $this->_tpl_vars['zarilia_url']; ?>
/images/im_back.png" title="Insert Left Align" alt="Left" /></a>
		 <?php endif; ?>
		  <a href="#" onclick="javascript:appendCode('<?php echo $this->_tpl_vars['images'][$this->_sections['i']['index']]['xcode']; ?>
');"> <img src="<?php echo $this->_tpl_vars['zarilia_url']; ?>
/images/im_down.png" title="Insert Center Align" alt="Center" /></a>

		 <?php if ($this->_tpl_vars['images'][$this->_sections['i']['index']]['media'] != 1): ?>
  	 	 <a href="#" onclick="javascript:appendCode('<?php echo $this->_tpl_vars['images'][$this->_sections['i']['index']]['rxcode']; ?>
');"> <img src="<?php echo $this->_tpl_vars['zarilia_url']; ?>
/images/im_forward.png" title="Insert Right Align" alt="Right" /></a>
         <a href="#" onclick="javascript:InsertWysiwygImage('<?php echo $this->_tpl_vars['images'][$this->_sections['i']['index']]['xcode']; ?>
');"> <img src="<?php echo $this->_tpl_vars['zarilia_url']; ?>
/images/im_add.png" title="Insert Into Wysiwyg" alt="Insert Into Wysiwyg" /></a>
		 <?php endif; ?>
	  </div>
	</td>
  </tr>
 <?php endfor; endif; ?>
<?php else: ?>
  <tr>
    <td colspan="4" class="even" align="center"><b><?php echo @_MA_AD_MEDIA_NOTHINGFOUND; ?>
</b></td>
  </tr>
<?php endif; ?>
  <tr>
    <td colspan="4" class="footer" align="center">&nbsp;</td>
  </tr>
</table>
<?php if (pagenav): ?>
	<div style="padding-top: 6px; padding-bottom: 6px; padding-right: 6px; text-align: right; " id="pagenav"><?php echo $this->_tpl_vars['pagenav']; ?>
</div>
<?php endif; ?>

<div style="padding-top: 6px; padding-bottom: 6px; padding-right: 6px; text-align: center; ">
	<input value="<?php echo @_CLOSE; ?>
" type="button" class="formbutton" onclick="javascript:window.close();" />
</div>

</body>
</html>
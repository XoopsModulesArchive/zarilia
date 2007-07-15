<?php /* Smarty version 2.6.16, created on 2007-07-02 11:27:57
         compiled from db:system_stream.html */ ?>
<?php if ($this->_tpl_vars['section_title']): ?>
 <h3><?php echo $this->_tpl_vars['section_title']; ?>
</h3>
<?php endif; ?>

<table width="100%" cellpadding="2" cellspacing="1" border="0" class="streamingpane">
 <tr>
  <td valign="top" class="streamingdescription">
	<?php if ($this->_tpl_vars['section_image']): ?>
	 <?php echo $this->_tpl_vars['section_image']; ?>

	<?php endif; ?>
	<?php if ($this->_tpl_vars['section_description']): ?>
	 	<?php echo $this->_tpl_vars['section_description']; ?>

	<?php endif; ?>
  </td>
 </tr>
</table>

<h3><?php echo @_CONTENT_STREAMS; ?>
</h3>
<?php $_from = $this->_tpl_vars['streaming']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['streaming']):
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="20" colspan="2" class="sectiontableheader"><a href="javascript:openWithSelfMain('<?php echo $this->_tpl_vars['zarilia_url']; ?>
/misc.php?op=showpopups&type=play&amp;id=<?php echo $this->_tpl_vars['streaming']['streaming_id']; ?>
','Play Media',420,350);" class="category"><?php echo $this->_tpl_vars['streaming']['streaming_title']; ?>
</a></td>
  </tr>
  <tr class="sectiontableentry1">
    <?php if ($this->_tpl_vars['streaming']['streaming_image']): ?>
	  <td width="100" height="20" style="text-align: center;"><a href="javascript:openWithSelfMain('<?php echo $this->_tpl_vars['zarilia_url']; ?>
/misc.php?op=showpopups&type=play&amp;id=<?php echo $this->_tpl_vars['streaming']['streaming_id']; ?>
','Play Media',420,350);" class="category"><?php echo $this->_tpl_vars['streaming']['streaming_image']; ?>
</a></td>
    <?php endif; ?>
	<td width="90%" height="20" valign="top">
	 <?php echo @_CONTENT_POSTEDBY;  echo $this->_tpl_vars['streaming']['streaming_author']; ?>
&nbsp;<?php echo @_CONTENT_POSTEDON;  echo $this->_tpl_vars['streaming']['streaming_published']; ?>
<br /><br /><?php echo $this->_tpl_vars['streaming']['streaming_intro']; ?>

	<div><?php echo $this->_tpl_vars['streaming']['streaming_description']; ?>
</div>
	</td>
  </tr>
</table>
<div style='text-align: right;'>
<a href="javascript:openWithSelfMain('<?php echo $this->_tpl_vars['zarilia_url']; ?>
/misc.php?op=showpopups&type=play&amp;id=<?php echo $this->_tpl_vars['streaming']['streaming_id']; ?>
','Play Media',420,350);"><?php echo $this->_tpl_vars['streaming']['streaming_play']; ?>
</a>
<a href="<?php echo $this->_tpl_vars['zarilia_url']; ?>
/download.php?page_type=stream&amp;id=<?php echo $this->_tpl_vars['streaming']['streaming_id']; ?>
" class="category"><?php echo $this->_tpl_vars['streaming']['streaming_download']; ?>
</a>
</div><br />
<?php endforeach; endif; unset($_from); ?>

<br /><div style="text-align: left;"><?php echo $this->_tpl_vars['page_nav']; ?>
</div>

<?php echo $this->_tpl_vars['page_backbutton']; ?>
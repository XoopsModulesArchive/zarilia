<?php /* Smarty version 2.6.16, created on 2007-07-02 11:27:57
         compiled from db:system_blogindex.html */ ?>
<?php if ($this->_tpl_vars['section_title']): ?>
 <h3><?php echo $this->_tpl_vars['section_title']; ?>
</h3>
<?php endif; ?>

<table width="100%" cellpadding="2" cellspacing="1" border="0" class="contentpane">
 <tr>
  <td valign="top" class="contentdescription">
	<?php if ($this->_tpl_vars['section_image']): ?>
	 <?php echo $this->_tpl_vars['section_image']; ?>

	<?php endif; ?>
	<?php if ($this->_tpl_vars['section_description']): ?>
	 	<?php echo $this->_tpl_vars['section_description']; ?>

	<?php endif; ?>
  </td>
 </tr>
</table>

<h3><?php echo @_CONTENT_LATESTBLOGS; ?>
</h3>
<?php $_from = $this->_tpl_vars['content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['content']):
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="20" colspan="2" class="sectiontableheader"><a href="<?php echo $this->_tpl_vars['zarilia_url']; ?>
/index.php?page_type=blog&amp;id=<?php echo $this->_tpl_vars['content']['content_id']; ?>
" class="category"><?php echo $this->_tpl_vars['content']['content_title']; ?>
</a></td>
  </tr>
  <tr class="sectiontableentry1">
    <?php if ($this->_tpl_vars['content']['content_images']): ?>
	  <td width="100" height="20" style="text-align: center;"><a href="<?php echo $this->_tpl_vars['zarilia_url']; ?>
/index.php?page_type=blog&amp;id=<?php echo $this->_tpl_vars['content']['content_id']; ?>
" class="category"><?php echo $this->_tpl_vars['content']['content_images']; ?>
</a></td>
    <?php endif; ?>
	<td width="90%" height="20" valign="top">
	 <?php echo @_CONTENT_POSTEDBY;  echo $this->_tpl_vars['content']['content_author']; ?>
&nbsp;<?php echo @_CONTENT_POSTEDON;  echo $this->_tpl_vars['content']['content_published']; ?>
<br /><br /><?php echo $this->_tpl_vars['content']['content_intro']; ?>

	</td>
  </tr>
</table>
<div style='text-align: right;'><a href="<?php echo $this->_tpl_vars['zarilia_url']; ?>
/index.php?page_type=blog&amp;id=<?php echo $this->_tpl_vars['content']['content_id']; ?>
" class="category"><?php echo @_CONTENT_CONTINUE; ?>
 '<?php echo $this->_tpl_vars['content']['content_title']; ?>
'......</a></div><br />
<?php endforeach; endif; unset($_from); ?>

<br /><div style="text-align: left;"><?php echo $this->_tpl_vars['page_nav']; ?>
</div>

<?php echo $this->_tpl_vars['page_backbutton']; ?>
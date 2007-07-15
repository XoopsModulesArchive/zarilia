<?php /* Smarty version 2.6.16, created on 2007-07-02 11:27:57
         compiled from db:system_newsindex.html */ ?>
<?php if ($this->_tpl_vars['section_title']): ?>
 <div class="header"><?php echo $this->_tpl_vars['section_title']; ?>
</div>
<?php endif; ?>

<table width="100%" cellspacing="0" border="0">
 <tr>
  <td valign="top">
	<?php if ($this->_tpl_vars['section_image'] != ''):  echo $this->_tpl_vars['section_image'];  endif; ?>
	<?php if ($this->_tpl_vars['section_description']):  echo $this->_tpl_vars['section_description'];  endif; ?>
  </td>
 </tr>
</table>

<div class="latest"><?php echo @_CONTENT_LATESTNEWS; ?>
</div>
<?php $_from = $this->_tpl_vars['content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['content']):
?>
<table id="news" cellspacing="0">
  <tr>
    <td height="20" colspan="2" class="newstitle"><a href="<?php echo $this->_tpl_vars['zarilia_url']; ?>
/index.php?page_type=news&amp;id=<?php echo $this->_tpl_vars['content']['content_id']; ?>
" class="category"><?php echo $this->_tpl_vars['content']['content_title']; ?>
</a></td>
  </tr>
  <tr class="newscontent">
    <?php if ($this->_tpl_vars['content']['content_images']): ?>
	  <td width="100" height="20" style="text-align: center;"><a href="<?php echo $this->_tpl_vars['zarilia_url']; ?>
/index.php?page_type=news&amp;id=<?php echo $this->_tpl_vars['content']['content_id']; ?>
" class="category"><?php echo $this->_tpl_vars['content']['content_images']; ?>
</a></td>
    <?php endif; ?>
	<td width="90%" height="20" valign="top">
	 <div class="news"><?php echo @_CONTENT_POSTEDBY;  echo $this->_tpl_vars['content']['content_author']; ?>
&nbsp;<?php echo @_CONTENT_POSTEDON;  echo $this->_tpl_vars['content']['content_published']; ?>
</div>
	 <div class="newscontent"><?php echo $this->_tpl_vars['content']['content_intro']; ?>
</div>
	</td>
  </tr>
</table>
<div class="nav"><a class="morelink" href="<?php echo $this->_tpl_vars['zarilia_url']; ?>
/index.php?page_type=news&amp;id=<?php echo $this->_tpl_vars['content']['content_id']; ?>
"><?php echo @_CONTENT_CONTINUE; ?>
 '<?php echo $this->_tpl_vars['content']['content_title']; ?>
'......</a></div><br />
<?php endforeach; endif; unset($_from); ?>
<br /><div style="text-align: left;"><?php echo $this->_tpl_vars['page_nav']; ?>
</div>
<?php echo $this->_tpl_vars['page_backbutton']; ?>
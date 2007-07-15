<?php /* Smarty version 2.6.16, created on 2007-07-02 11:27:57
         compiled from db:system_staticindex.html */ ?>
<?php if ($this->_tpl_vars['content_title']): ?>
 <h3><?php echo $this->_tpl_vars['content_title']; ?>
</h3>
<?php endif; ?>

<?php if ($this->_tpl_vars['zarilia_showheader']): ?>
	<?php if ($this->_tpl_vars['content_avatar']): ?>
		<?php echo $this->_tpl_vars['content_avatar']; ?>

	<?php endif; ?>

	<?php if ($this->_tpl_vars['content_author']): ?>
	 <div><?php echo @_CONTENT_AUTHOR;  echo $this->_tpl_vars['content_author']; ?>
</div>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['content_published']): ?>
	 <div><?php echo @_CONTENT_PUBLISHED;  echo $this->_tpl_vars['content_published']; ?>
</div><br />
	<?php endif; ?>
<?php endif; ?>

<div align="right"><?php echo $this->_tpl_vars['content_icons']; ?>
</div>
<?php if ($this->_tpl_vars['content_subtitle']): ?>
 <div><strong><?php echo $this->_tpl_vars['content_subtitle']; ?>
</strong></div><br />
<?php endif; ?>

<?php if ($this->_tpl_vars['content_body']): ?>
 <?php if ($this->_tpl_vars['content_intro']): ?>
  <div><?php echo $this->_tpl_vars['content_intro']; ?>
</div><br />
 <?php endif; ?>
 <div><?php echo $this->_tpl_vars['content_body']; ?>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['zarilia_showheader']): ?>
	<?php if ($this->_tpl_vars['content_updated']): ?>
	 <br /><div><i><?php echo @_CONTENT_UPDATED;  echo $this->_tpl_vars['content_updated']; ?>
</i></div><br />
	<?php endif; ?>
<?php endif; ?>
<?php /* Smarty version 2.6.16, created on 2007-07-02 11:27:57
         compiled from db:system_errorpage.html */ ?>
<h3></h3>
<h3 style="text-align: left; color: Red;"><?php echo $this->_tpl_vars['error_title']; ?>
</h3>
<div style="text-align:left;"><strong><?php echo $this->_tpl_vars['error_heading']; ?>
</strong></div><br />
<div style="text-align:left;"><?php echo $this->_tpl_vars['error_description']; ?>
</div>

<?php if ($this->_tpl_vars['error_link']): ?>
 <div><?php echo $this->_tpl_vars['error_link']; ?>
</div><br />
<?php endif; ?>

<?php if ($this->_tpl_vars['error_footer']): ?>
 <div><?php echo $this->_tpl_vars['error_footer']; ?>
</div><br />
<?php endif; ?>
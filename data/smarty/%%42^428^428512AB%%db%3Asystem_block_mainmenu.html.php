<?php /* Smarty version 2.6.16, created on 2007-07-02 11:27:57
         compiled from db:system_block_mainmenu.html */ ?>
<table width="100%" cellspacing="0">
  <tr>
    <td id="mainmenu">
	  <!-- start mainmenu menu loop -->
		<?php $_from = $this->_tpl_vars['block']['mainmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['mainmenu']):
?>
			<?php if ($this->_tpl_vars['mainmenu']['link'] == 0): ?>
				<a class="<?php echo $this->_tpl_vars['mainmenu']['style']; ?>
" href="<?php echo $this->_tpl_vars['mainmenu']['directory']; ?>
" <?php echo $this->_tpl_vars['mainmenu']['target']; ?>
>
			      <?php if ($this->_tpl_vars['mainmenu']['image'] != ''): ?>
				    <img src='<?php echo $this->_tpl_vars['zarilia_uploads']; ?>
/<?php echo $this->_tpl_vars['mainmenu']['image']; ?>
' valign='middle' height='16' width='16' alt='<?php echo $this->_tpl_vars['mainmenu']['name']; ?>
' />&nbsp;
				  <?php endif; ?>
				<?php echo $this->_tpl_vars['mainmenu']['name']; ?>
</a>
			<?php else: ?>
				<a class="<?php echo $this->_tpl_vars['mainmenu']['style']; ?>
" href="<?php echo $this->_tpl_vars['mainmenu']['directory']; ?>
" <?php echo $this->_tpl_vars['mainmenu']['target']; ?>
>
			      <?php if ($this->_tpl_vars['mainmenu']['image'] != ''): ?>
				    <img src='<?php echo $this->_tpl_vars['zarilia_uploads']; ?>
/<?php echo $this->_tpl_vars['mainmenu']['image']; ?>
' valign='middle' height='16' width='16' alt='<?php echo $this->_tpl_vars['mainmenu']['name']; ?>
' />&nbsp;
				  <?php endif; ?>
				<?php echo $this->_tpl_vars['mainmenu']['name']; ?>
</a>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
      <!-- end mainmenu loop --> </td>
  </tr>
</table>
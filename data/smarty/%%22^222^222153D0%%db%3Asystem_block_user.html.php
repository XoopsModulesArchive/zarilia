<?php /* Smarty version 2.6.16, created on 2007-07-02 11:27:57
         compiled from db:system_block_user.html */ ?>
<table width="100%" cellspacing="0">
  <tr>
    <td id="usermenu">
	  <!-- start usermenu menu loop -->
		<?php $_from = $this->_tpl_vars['block']['usermenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['usermenu']):
?>
			<?php if ($this->_tpl_vars['usermenu']['link'] == 0): ?>
				<a class="menuMain" href="<?php echo $this->_tpl_vars['usermenu']['directory']; ?>
" <?php echo $this->_tpl_vars['usermenu']['target']; ?>
>
			      <?php if ($this->_tpl_vars['usermenu']['image'] != ''): ?>
				    <img src='<?php echo $this->_tpl_vars['zarilia_uploads']; ?>
/<?php echo $this->_tpl_vars['usermenu']['image']; ?>
' valign='middle' height='16' width='16' alt='<?php echo $this->_tpl_vars['usermenu']['name']; ?>
' />&nbsp;
				  <?php endif; ?>
				<?php echo $this->_tpl_vars['usermenu']['name']; ?>
</a>
			<?php else: ?>
				<a class="menuSub" href="<?php echo $this->_tpl_vars['usermenu']['directory']; ?>
" <?php echo $this->_tpl_vars['usermenu']['target']; ?>
>
			      <?php if ($this->_tpl_vars['usermenu']['image'] != ''): ?>
				    <img src='<?php echo $this->_tpl_vars['zarilia_uploads']; ?>
/<?php echo $this->_tpl_vars['usermenu']['image']; ?>
' valign='middle' height='16' width='16' alt='<?php echo $this->_tpl_vars['usermenu']['name']; ?>
' />&nbsp;
				  <?php endif; ?>
				<?php echo $this->_tpl_vars['usermenu']['name']; ?>
</a>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
      <!-- end usermenu loop --> </td>
  </tr>
</table>
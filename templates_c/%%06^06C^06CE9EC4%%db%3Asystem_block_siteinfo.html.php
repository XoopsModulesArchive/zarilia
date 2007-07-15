<?php /* Smarty version 2.6.16, created on 2007-07-02 09:59:27
         compiled from db:system_block_siteinfo.html */ ?>
<table width="100%" cellspacing="0">
  <?php if ($this->_tpl_vars['block']['showgroups'] == true): ?>
  <!-- start group loop -->
  <?php $_from = $this->_tpl_vars['block']['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['group']):
?>
  <tr>
    <th colspan="2"><?php echo $this->_tpl_vars['group']['name']; ?>
</th>
  </tr>
  <!-- start group member loop -->
  <?php $_from = $this->_tpl_vars['group']['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>
  <tr>
    <td class="even" valign="middle" align="center">
	 <?php if ($this->_tpl_vars['user']['avatar'] != ""): ?>
	  <img src="<?php echo $this->_tpl_vars['user']['avatar']; ?>
" alt="" width="32" /><br />
	 <?php endif; ?>
	 <a href="<?php echo $this->_tpl_vars['zarilia_url']; ?>
/userinfo.php?uid=<?php echo $this->_tpl_vars['user']['id']; ?>
"><?php echo $this->_tpl_vars['user']['name']; ?>
</a>
	</td>
	<td class="odd" width="20%" align="right" valign="middle"><?php echo $this->_tpl_vars['user']['msglink']; ?>
</td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  <!-- end group member loop -->
  <?php endforeach; endif; unset($_from); ?>
  <!-- end group loop -->
  <?php endif; ?>
</table>
<div class="footer" style="text-align: center;"><?php echo $this->_tpl_vars['block']['logourl']; ?>
</div>
<div class="footer" style="text-align: center;"><?php echo $this->_tpl_vars['block']['recommendlink']; ?>
</div>
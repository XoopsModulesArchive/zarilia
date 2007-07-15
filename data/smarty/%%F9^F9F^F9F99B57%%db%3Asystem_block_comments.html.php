<?php /* Smarty version 2.6.16, created on 2007-07-02 11:27:57
         compiled from db:system_block_comments.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:system_block_comments.html', 3, false),)), $this); ?>
<table width="100%" cellspacing="0">
  <?php $_from = $this->_tpl_vars['block']['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['comment']):
?>
  <tr class="<?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
">
    <td align="center"><img src="<?php echo $this->_tpl_vars['zarilia_url']; ?>
/images/subject/<?php echo $this->_tpl_vars['comment']['icon']; ?>
" alt="" /></td>
    <td><?php echo $this->_tpl_vars['comment']['title']; ?>
</td>
    <td align="center"><?php echo $this->_tpl_vars['comment']['addon']; ?>
</td>
    <td align="center"><?php echo $this->_tpl_vars['comment']['poster']; ?>
</td>
    <td align="right"><?php echo $this->_tpl_vars['comment']['time']; ?>
</td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
</table>
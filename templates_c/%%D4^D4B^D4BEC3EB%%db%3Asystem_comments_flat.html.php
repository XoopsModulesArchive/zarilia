<?php /* Smarty version 2.6.16, created on 2007-07-02 09:59:26
         compiled from db:system_comments_flat.html */ ?>
<table class="outer" cellpadding="5" cellspacing="1">
  <tr>
    <th width="20%"><?php echo $this->_tpl_vars['lang_poster']; ?>
</td>
    <th><?php echo $this->_tpl_vars['lang_thread']; ?>
</td>
  </tr>
  <?php $_from = $this->_tpl_vars['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['comment']):
?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:system_comment.html", 'smarty_include_vars' => array('comment' => $this->_tpl_vars['comment'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php endforeach; endif; unset($_from); ?>
</table>
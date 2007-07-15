<?php /* Smarty version 2.6.16, created on 2007-07-02 11:27:57
         compiled from db:system_block_notification.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'db:system_block_notification.html', 11, false),)), $this); ?>
<form op="<?php echo $this->_tpl_vars['block']['target_page']; ?>
" method="post">
<table width="100%" cellspacing="0">
  <?php $_from = $this->_tpl_vars['block']['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['category']):
?>
  <?php $_from = $this->_tpl_vars['category']['events']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['inner'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['inner']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['event']):
        $this->_foreach['inner']['iteration']++;
?>
  <?php if (($this->_foreach['inner']['iteration'] <= 1)): ?>
  <tr>
    <td class="head" colspan="2"><?php echo $this->_tpl_vars['category']['title']; ?>
</td>
  </tr>
  <?php endif; ?>
  <tr>
    <td class="odd"><?php echo smarty_function_counter(array('assign' => 'index'), $this);?>
<input type="hidden" name="not_list[<?php echo $this->_tpl_vars['index']; ?>
][params]" value="<?php echo $this->_tpl_vars['category']['name']; ?>
,<?php echo $this->_tpl_vars['category']['itemid']; ?>
,<?php echo $this->_tpl_vars['event']['name']; ?>
" /><input type="checkbox" name="not_list[<?php echo $this->_tpl_vars['index']; ?>
][status]" value="1" <?php if ($this->_tpl_vars['event']['subscribed']): ?>checked="checked"<?php endif; ?> /></td>
    <td class="odd"><?php echo $this->_tpl_vars['event']['caption']; ?>
</td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  <?php endforeach; endif; unset($_from); ?>
  <tr>
    <td class="foot" colspan="2"><input type="hidden" name="not_redirect" value="<?php echo $this->_tpl_vars['block']['redirect_script']; ?>
"><input type="submit" class="formbutton" name="not_submit" value="<?php echo $this->_tpl_vars['block']['submit_button']; ?>
" /></td>
  </tr>
</table>
</form>
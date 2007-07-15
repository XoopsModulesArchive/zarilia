<?php /* Smarty version 2.6.16, created on 2007-07-02 11:27:57
         compiled from db:system_notification_list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:system_notification_list.html', 21, false),)), $this); ?>
<h4><?php echo @_NOT_ACTIVENOTIFICATIONS; ?>
</h4>
<form name="notificationlist" op="notifications.php" method="post">
<table width="100%" border="0" callpadding="2" cellspacing="1">
  <tr>
    <th><input name="allbox" id="allbox" onclick="zariliaCheckGroup('notificationlist', 'allbox', 'del_mod[]');" type="checkbox" value="<?php echo @_NOT_CHECKALL; ?>
" /></th>
    <th><?php echo @_NOT_EVENT; ?>
</th>
    <th><?php echo @_NOT_CATEGORY; ?>
</th>
    <th><?php echo @_NOT_ITEMID; ?>
</th>
    <th><?php echo @_NOT_ITEMNAME; ?>
</th>
  </tr>
  <?php if ($this->_tpl_vars['addons']): ?>
  <?php $_from = $this->_tpl_vars['addons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['addon']):
?>
  <tr>
    <td class="head"><input name="del_mod[<?php echo $this->_tpl_vars['addon']['id']; ?>
]" id="del_mod[]" onclick="zariliaCheckGroup('notificationlist', 'del_mod[<?php echo $this->_tpl_vars['addon']['id']; ?>
]', 'del_not[<?php echo $this->_tpl_vars['addon']['id']; ?>
][]');" type="checkbox" value="<?php echo $this->_tpl_vars['addon']['id']; ?>
" /></td>
    <td class="head" colspan="4"><?php echo @_NOT_ADDON; ?>
: <?php echo $this->_tpl_vars['addon']['name']; ?>
</td>
  </tr>
  <?php $_from = $this->_tpl_vars['addon']['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['category']):
?>
  <?php $_from = $this->_tpl_vars['category']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
  <?php $_from = $this->_tpl_vars['item']['notifications']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['notification']):
?>
  <tr>
    <?php echo smarty_function_cycle(array('values' => "odd,even",'assign' => 'class'), $this);?>

    <td class="<?php echo $this->_tpl_vars['class']; ?>
"><input type="checkbox" name="del_not[<?php echo $this->_tpl_vars['addon']['id']; ?>
][]" id="del_not[<?php echo $this->_tpl_vars['addon']['id']; ?>
][]" value="<?php echo $this->_tpl_vars['notification']['id']; ?>
" /></td>
    <td class="<?php echo $this->_tpl_vars['class']; ?>
"><?php echo $this->_tpl_vars['notification']['event_title']; ?>
</td>
    <td class="<?php echo $this->_tpl_vars['class']; ?>
"><?php echo $this->_tpl_vars['notification']['category_title']; ?>
</td>
    <td class="<?php echo $this->_tpl_vars['class']; ?>
"><?php if ($this->_tpl_vars['item']['id'] != 0):  echo $this->_tpl_vars['item']['id'];  endif; ?></td>
    <td class="<?php echo $this->_tpl_vars['class']; ?>
"><?php if ($this->_tpl_vars['item']['id'] != 0):  if ($this->_tpl_vars['item']['url'] != ''): ?><a href="<?php echo $this->_tpl_vars['item']['url']; ?>
"><?php endif;  echo $this->_tpl_vars['item']['name'];  if ($this->_tpl_vars['item']['url'] != ''): ?></a><?php endif;  endif; ?></td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  <?php endforeach; endif; unset($_from); ?>
  <?php endforeach; endif; unset($_from); ?>
  <?php endforeach; endif; unset($_from); ?>
  <?php else: ?>
   <tr><td class="even" colspan="5" align="center"><?php echo @_NOT_NONOTSFOUND; ?>
</td></tr>
  <?php endif; ?>
  <tr>
    <td class="foot" colspan="5"><br />
      <input type="submit" class="formbutton" name="delete_cancel" value="<?php echo @_CANCEL; ?>
" />
      <input type="reset" class="formbutton" name="delete_reset" value="<?php echo @_NOT_CLEAR; ?>
" />
      <input type="submit" class="formbutton" name="delete" value="<?php echo @_DELETE; ?>
" />
    </td>
  </tr>
</table>
</form>
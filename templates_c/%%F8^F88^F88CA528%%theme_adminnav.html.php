<?php /* Smarty version 2.6.16, created on 2007-07-02 09:07:19
         compiled from default/navigation/theme_adminnav.html */ ?>
<!-- ADMIN NAVIGATION BAR START -->
 <div id="navbar">
  <ul style="visibility: hidden; display: none;">
<?php $_from = $this->_tpl_vars['system_menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
     <li><span>&nbsp;</span><a href="javascript:void(0)" target="_self"><?php echo $this->_tpl_vars['menu']['title']; ?>
</a>
      <ul>
<?php $_from = $this->_tpl_vars['menu']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
         <li><?php if (strlen ( $this->_tpl_vars['item']['url'] ) > 0): ?><span><?php if (strlen ( $this->_tpl_vars['item']['image'] ) > 0): ?> <img src="<?php echo $this->_tpl_vars['item']['image']; ?>
" width="16" height="16" alt="" title=""/> <?php else: ?> <?php if (strlen ( $this->_tpl_vars['item']['class'] ) > 0): ?> <img src="<?php echo $this->_tpl_vars['zarilia_theme_url']; ?>
/images/admin_menu/<?php echo $this->_tpl_vars['item']['class']; ?>
.png" width="16" height="16" alt="" title=""/> <?php else: ?> <img src="<?php echo $this->_tpl_vars['zarilia_theme_url']; ?>
/images/admin_menu/blank.png" width="16" height="16"  alt="" title=""/> <?php endif; ?> <?php endif; ?> </span> <a href='<?php echo $this->_tpl_vars['item']['url']; ?>
' target="_self"><?php echo $this->_tpl_vars['item']['title']; ?>
</a>  <?php endif; ?></li>
<?php endforeach; endif; unset($_from); ?>
       </ul>
    </li>
<?php endforeach; endif; unset($_from); ?>
   </ul>
  <script type="text/javascript">cmDrawFromText('navbar', 'hbr', cmThemeOffice, 'ThemeOffice');</script>
</div>
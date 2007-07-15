<?php /* Smarty version 2.6.16, created on 2007-07-04 13:21:04
         compiled from default/theme.html */ ?>
<?php echo $this->_tpl_vars['zarilia_header']; ?>

<!-- START HEADER-->
<table align="center" border="0" cellspacing="0" cellpadding="0" id="Header">
  <tr>
    <td class="HeaderBannerLeft"><img src="<?php echo $this->_tpl_vars['zarilia_theme_image']; ?>
/logo.gif" alt="<?php echo $this->_tpl_vars['zarilia_slogan']; ?>
" title="<?php echo $this->_tpl_vars['zarilia_slogan']; ?>
" width="227" height="81" /></td>
    <td class="HeaderBannerRight"></td>
  </tr>
  <tr>
    <td colspan="2" class="HeaderNav"><div id="navbar">
        <ul style="visibility: hidden; display: none;">
<?php $_from = $this->_tpl_vars['system_menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
          <li><span> </span> <?php if ($this->_tpl_vars['menu']['url'] != ''): ?> <a href="<?php echo $this->_tpl_vars['menu']['url']; ?>
" target="_self"><?php echo $this->_tpl_vars['menu']['title']; ?>
</a> <?php else: ?> <a href="javascript:void(0)" target="_self"><?php echo $this->_tpl_vars['menu']['title']; ?>
</a> <?php endif; ?>
            <ul>
<?php $_from = $this->_tpl_vars['menu']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
              <li> <?php if (strlen ( $this->_tpl_vars['item']['url'] ) > 0): ?> <span> <?php if (strlen ( $this->_tpl_vars['item']['image'] ) > 0): ?> <img src="<?php echo $this->_tpl_vars['item']['image']; ?>
" width="16" height="16" alt="" title=""/> <?php else: ?> <?php if (strlen ( $this->_tpl_vars['item']['class'] ) > 0): ?> <img src="<?php echo $this->_tpl_vars['zarilia_theme_url']; ?>
/images/admin_menu/<?php echo $this->_tpl_vars['item']['class']; ?>
.png" width="16" height="16" alt="" title=""/> <?php else: ?> <?php endif; ?> <?php endif; ?> </span> <?php if ($this->_tpl_vars['item']['title'] == 'hr'): ?> <span>
                <hr />
                </span> <?php else: ?> <a href='<?php echo $this->_tpl_vars['item']['url']; ?>
' target="_self"><?php echo $this->_tpl_vars['item']['mid'];  echo $this->_tpl_vars['item']['title']; ?>
</a> <?php endif; ?> <?php endif; ?> </li>
<?php endforeach; endif; unset($_from); ?>
            </ul>
          </li>
<?php endforeach; endif; unset($_from); ?>
        </ul>
        <script type="text/javascript">cmDrawFromText('navbar', 'hbr', cmThemeOffice, 'ThemeOffice');</script>
      </div></td>
  </tr>
  <tr>
    <td colspan="2" class="HeaderBottom">&nbsp;</td>
  </tr>
</table>
<table align="center" cellspacing="0" id="MainBody" >
  <tr> <?php if ($this->_tpl_vars['zarilia_showlblock'] == 1): ?>
    <td id="leftcolumn"> <!-- Start left blocks loop -->
<?php $_from = $this->_tpl_vars['zarilia_lblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
      <div class="blockTitle"><?php echo $this->_tpl_vars['block']['title']; ?>
</div>
      <div class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</div>
<?php endforeach; endif; unset($_from); ?>
      <!-- End left blocks loop --> </td>
<?php endif; ?>
    <td id="centercolumn"><!-- Display center blocks if any -->
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="center"><?php echo $this->_tpl_vars['zarilia_banner']; ?>
</td>
        </tr>
      </table>
<?php if ($this->_tpl_vars['zarilia_showcblock'] == 1): ?>
      <table width="100%" cellspacing="0">
        <tr>
          <td id="centerCcolumn" colspan="2"> <!-- Start center-center blocks loop -->
<?php $_from = $this->_tpl_vars['zarilia_ccblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
            <div class="blockTitle"><?php echo $this->_tpl_vars['block']['title']; ?>
</div>
            <div class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</div>
<?php endforeach; endif; unset($_from); ?>
            <!-- End center-center blocks loop --> </td>
        </tr>
        <tr>
          <td id="centerLcolumn"> <!-- Start center-left blocks loop -->
<?php $_from = $this->_tpl_vars['zarilia_clblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
            <div class="blockTitle"><?php echo $this->_tpl_vars['block']['title']; ?>
</div>
            <div class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</div>
<?php endforeach; endif; unset($_from); ?>
            <!-- End center-left blocks loop --> </td>
          <td id="centerRcolumn"> <!-- Start center-right blocks loop -->
<?php $_from = $this->_tpl_vars['zarilia_crblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
            <div class="blockTitle"><?php echo $this->_tpl_vars['block']['title']; ?>
</div>
            <div class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</div>
<?php endforeach; endif; unset($_from); ?>
            <!-- End center-right blocks loop --> </td>
        </tr>
      </table>
<?php endif; ?>
      <!-- End display center blocks -->
      <div id="content"> <?php echo $this->_tpl_vars['zarilia_contents']; ?>
 </div>
<?php if ($this->_tpl_vars['zarilia_showcblock'] == 1): ?>
      <table width="100%" cellspacing="0">
        <tr>
          <td id="centerCcolumn" colspan="2"> <!-- Start center-center blocks loop -->
<?php $_from = $this->_tpl_vars['zarilia_ccblocks_down']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
            <div class="blockTitle"><?php echo $this->_tpl_vars['block']['title']; ?>
</div>
            <div class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</div>
<?php endforeach; endif; unset($_from); ?>
            <!-- End center-center blocks loop --> </td>
        </tr>
        <tr>
          <td id="centerLcolumn"> <!-- Start center-left blocks loop -->
<?php $_from = $this->_tpl_vars['zarilia_clblocks_down']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
            <div class="blockTitle"><?php echo $this->_tpl_vars['block']['title']; ?>
</div>
            <div class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</div>
<?php endforeach; endif; unset($_from); ?>
            <!-- End center-left blocks loop --> </td>
          <td id="centerRcolumn"> <!-- Start center-right blocks loop -->
<?php $_from = $this->_tpl_vars['zarilia_crblocks_down']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
            <div class="blockTitle"><?php echo $this->_tpl_vars['block']['title']; ?>
</div>
            <div class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</div>
<?php endforeach; endif; unset($_from); ?>
            <!-- End center-right blocks loop --> </td>
        </tr>
      </table>
<?php endif; ?> </td>
<?php if ($this->_tpl_vars['zarilia_showrblock'] == 1): ?>
    <td id="rightcolumn"> <!-- Start right blocks loop -->
<?php $_from = $this->_tpl_vars['zarilia_rblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
      <div class="blockTitle"><?php echo $this->_tpl_vars['block']['title']; ?>
</div>
      <div class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</div>
<?php endforeach; endif; unset($_from); ?>
      <!-- End right blocks loop --> </td>
<?php endif; ?> </tr>
</table>
<table id="MainFooter" align="center">
  <tr>
    <td class="NavFooter"> <?php $_from = $this->_tpl_vars['system_footermenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['footermenu']):
?> <?php if ($this->_tpl_vars['footermenu']['url'] != ''): ?> <span><a href="<?php echo $this->_tpl_vars['footermenu']['url']; ?>
" target="_self"><?php echo $this->_tpl_vars['footermenu']['title']; ?>
</a>&nbsp;&nbsp;&nbsp;</span> <?php endif; ?> <?php endforeach; endif; unset($_from); ?> </td>
  </tr>
</table>
<div class="Footer"><?php echo $this->_tpl_vars['zarilia_meta_footer']; ?>
</div>
</body></html>
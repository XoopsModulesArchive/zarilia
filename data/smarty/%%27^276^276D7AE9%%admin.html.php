<?php /* Smarty version 2.6.16, created on 2007-07-02 10:02:03
         compiled from C:/PHPLearnWAMP/Apache2/htdocs/zarilia/themes/default/admin.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'trim', 'C:/PHPLearnWAMP/Apache2/htdocs/zarilia/themes/default/admin.html', 4, false),)), $this); ?>
<!DOCTYPE html PUBLIC '//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['zarilia_langcode']; ?>
" lang="<?php echo $this->_tpl_vars['zarilia_langcode']; ?>
">
<head>
<?php echo ((is_array($_tmp=$this->_tpl_vars['zarilia_header'])) ? $this->_run_mod_handler('trim', true, $_tmp) : trim($_tmp)); ?>

</head>
<body>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
  <tr id='obHead'>
    <td id='headerbanner' colspan="2"><div><img src='<?php echo $this->_tpl_vars['zarilia_theme_url']; ?>
/images/admin/logo_25p.gif' align='middle' height='45' width='150' alt='' /></div></td>
  </tr>
  <tr class="menu">
    <td> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['zarilia_theme'])."/navigation/theme_adminnav.html", 'smarty_include_vars' => array('misc' => $this->_tpl_vars['system_menu']['misc'],'users' => $this->_tpl_vars['system_menu']['users'],'information' => $this->_tpl_vars['system_menu']['information'],'blocks' => $this->_tpl_vars['system_menu']['blocks'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> </td>
    <td class="mcell"> <a href="<?php echo $this->_tpl_vars['zarilia_url']; ?>
/addons/system/" title="<?php echo @_CP_AM_HOME; ?>
"><img src='<?php echo $this->_tpl_vars['zarilia_theme_url']; ?>
/images/admin_menu/configs.png' align='middle' height='16' width='16' alt='' /></a> <a href="<?php echo $this->_tpl_vars['zarilia_url']; ?>
/" title="<?php echo @_CP_AM_HOME; ?>
"><img src='<?php echo $this->_tpl_vars['zarilia_theme_url']; ?>
/images/admin_menu/home.png' align='middle' height='16' width='16' alt='' /></a> <a href="<?php echo $this->_tpl_vars['zarilia_url']; ?>
/index.php?page_type=user&amp;act=logout" title="<?php echo @_CP_AM_LOGOUT; ?>
" target="_self"><img src='<?php echo $this->_tpl_vars['zarilia_theme_url']; ?>
/images/admin_menu/exit.png' align='middle' height='16' width='16' alt='' /></a> </td>
  </tr>
</table>
<table id='maintable' cellspacing='0' summary=''>
  <tr>
    <td id='sidebarleft'>&nbsp;</td>
    <td id='sidetable'><div id="sidepanel">
        <table id='console_info' class='navOpened' border='0' cellpadding='0' cellspacing='0' width='100%'>
          <tr>
            <td><img src='<?php echo $this->_tpl_vars['zarilia_imageurl']; ?>
/blank.gif' align='middle' height='1' width='185' alt='' /></td>
          </tr>
          <tr onClick="cpShowHide('console_info');">
            <td class='navTitle'><?php echo $this->_tpl_vars['text_console_info']; ?>
 </td>
          </tr>
          <tr>
            <td class='navContent'><div class='tree'>
                <table border='0' class='node' cellpadding='0' cellspacing='0' width='100%'>
                  <tr>
                    <td><?php echo $this->_tpl_vars['text_welcome']; ?>
 <strong> <?php echo $this->_tpl_vars['user']; ?>
</strong></td>
                  </tr>
                  <tr>
                    <td> <?php echo $this->_tpl_vars['text_loginip']; ?>
<strong><?php echo $this->_tpl_vars['loginip']; ?>
</strong></td>
                  </tr>
                  <tr>
                    <td><?php echo $this->_tpl_vars['text_loginat']; ?>
<strong><?php echo $this->_tpl_vars['loginat']; ?>
</strong></td>
                  </tr>
<?php if ($this->_tpl_vars['is_message']): ?>
                  <tr>
                    <td><?php echo $this->_tpl_vars['text_personalmessages']; ?>
<a href='<?php echo $this->_tpl_vars['zarilia_url']; ?>
/addons/message/'>( <b><?php echo $this->_tpl_vars['personalmessages']; ?>
</b> )</a></td>
                  </tr>
<?php endif; ?>
                </table>
              </div></td>
          </tr>
        </table>
<?php $_from = $this->_tpl_vars['blocks_menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
        <table id="block_<?php echo $this->_tpl_vars['block']['id']; ?>
" class="navOpened" border="0" cellpadding="0" cellspacing="0" width="100%">
          <tr onClick="cpShowHide('block_<?php echo $this->_tpl_vars['block']['id']; ?>
');">
            <td class='navTitle'><?php echo $this->_tpl_vars['block']['title']; ?>
</td>
          </tr>
          <tr>
            <td class='navContent'><div class="tree">
                <table border="0" class="node"  cellpadding="0" cellspacing="0" width="100%">
<?php if (is_array ( $this->_tpl_vars['block']['items'] ) > 0): ?> <?php $_from = $this->_tpl_vars['block']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?> <?php if (strlen ( $this->_tpl_vars['item']['url'] ) > 0): ?>
                  <tr>
                    <td><img src='<?php echo $this->_tpl_vars['zarilia_theme_url']; ?>
/images/admin_menu/admin_run.png' align='middle' height='16' width='16' alt='' />&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['item']['url']; ?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</a></td>
                  </tr>
<?php else: ?>
                  <tr>
                    <td><hr></td>
                  </tr>
<?php endif; ?> <?php endforeach; endif; unset($_from); ?> <?php else: ?>
                  <tr>
                    <td><?php echo $this->_tpl_vars['block']['items']; ?>
</td>
                  </tr>
<?php endif; ?>
                </table></div></td>
          </tr>
        </table>
<?php endforeach; endif; unset($_from); ?></div>
      <script type="text/javascript">cpDoShow();</script> </td>
    <td id='sidebarright' onClick="cpShowHide('sidepanel');cpIMGOpenClose('limage','sidepanel','<?php echo $this->_tpl_vars['zarilia_theme_url']; ?>
/images/admin/arrow-left.gif','<?php echo $this->_tpl_vars['zarilia_theme_url']; ?>
/images/admin/arrow-right.gif');"><img style="padding-left: 2px; padding-right: 1px" id="limage" src="<?php echo $this->_tpl_vars['zarilia_theme_url']; ?>
/images/admin/arrow-right.gif" alt="" title=""/></td>
    <td id='content' width='100%'> <br />
<?php echo $this->_tpl_vars['zarilia_contents']; ?>
<br /> </td>
  </tr>
</table>
<div id="navbarfooter" style="text-align: center; padding: 5px;">Zarilia</div>
</body></html>
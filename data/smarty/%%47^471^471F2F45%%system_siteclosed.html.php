<?php /* Smarty version 2.6.16, created on 2007-07-04 13:20:59
         compiled from default/addons/system/system_siteclosed.html */ ?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['zarilia_langcode']; ?>
" lang="<?php echo $this->_tpl_vars['zarilia_langcode']; ?>
">
<head>
<meta http-equiv="content-type" content="text/html; charset=<?php echo $this->_tpl_vars['zarilia_charset']; ?>
" />
<meta http-equiv="content-language" content="<?php echo $this->_tpl_vars['zarilia_langcode']; ?>
" />
<title><?php echo $this->_tpl_vars['zarilia_sitename']; ?>
</title>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->_tpl_vars['zarilia_themecss']; ?>
" />
</head>
<body >
  <p>&nbsp;</p>
  <p align="center"><img src="<?php echo $this->_tpl_vars['zarilia_theme_image']; ?>
/logo.gif" /></p>
  <form op="<?php echo $this->_tpl_vars['zarilia_url']; ?>
/index.php" method="post">
    <table cellspacing="0" align="center" style="width: 200px;">
     <tr>
        <th style="padding : 2px; vertical-align : middle;" colspan="2"><span class="style1"><?php echo $this->_tpl_vars['lang_login']; ?>
</span></th>
      </tr>
      <tr>
        <td class="style1" style="padding: 2px;"><?php echo $this->_tpl_vars['lang_username']; ?>
</td>
        <td style="padding: 2px;"><input type="text" name="uname" size="12" value="" /></td>
      </tr>
      <tr>
        <td class="style1" style="padding: 2px;"><?php echo $this->_tpl_vars['lang_password']; ?>
</td>
        <td style="padding: 2px;"><input type="password" name="pass" size="12" /></td>
      </tr>
      <tr>
        <td style="padding: 2px;">&nbsp;</td>
        <td style="padding: 2px;"><input type="hidden" name="zarilia_login" value="1" /><input type="submit" class="formbutton" value=<?php echo $this->_tpl_vars['lang_login']; ?>
" /></td>
      </tr>
    </table>
  	<input type="hidden" name="page_type" value="user" />
  	<input type="hidden" name="page_type" value="user" />
  	<input type="hidden" name="act" value="dologin" />
  </form>
</body>
</html>
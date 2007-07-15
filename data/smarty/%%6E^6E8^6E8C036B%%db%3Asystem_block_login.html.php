<?php /* Smarty version 2.6.16, created on 2007-07-02 11:27:57
         compiled from db:system_block_login.html */ ?>
<form style="margin: 0px;" op="<?php echo $this->_tpl_vars['zarilia_url']; ?>
" method="post">
    <?php echo $this->_tpl_vars['block']['lang_username']; ?>
<br />
    <input type="text" name="login" size="12" value="<?php echo $this->_tpl_vars['block']['unamevalue']; ?>
" maxlength="25" /><br />
    <?php echo $this->_tpl_vars['block']['lang_password']; ?>
<br />
    <input type="password" name="pass" size="12" maxlength="32" /><br />
    <?php if ($this->_tpl_vars['block']['showimage']): ?>
	 <?php echo $this->_tpl_vars['block']['lang_verification']; ?>
<br />
	 <input type="text" name="verification" size="5" maxlength="5" />&nbsp;<?php echo $this->_tpl_vars['block']['verification_image']; ?>
<br />
     <input type="hidden" name="verification_ver" value="<?php echo $this->_tpl_vars['block']['verification_ver']; ?>
" />
	<?php endif; ?>
	<input type="checkbox" name="rememberme" value="1" /><?php echo $this->_tpl_vars['block']['lang_rememberme']; ?>
<br />
	<input type="checkbox" name="logonanon" value="1" /><?php echo $this->_tpl_vars['block']['lang_logonanon']; ?>
<br />
  	<?php if ($this->_tpl_vars['zarilia_requesturi']): ?>
   		<input type="hidden" name="zarilia_redirect" value="<?php echo $this->_tpl_vars['zarilia_requesturi']; ?>
" />
  	<?php endif; ?>
  	<input type="hidden" name="page_type" value="user" />
  	<input type="hidden" name="act" value="dologin" />
    <input type="submit" class="formbutton" value="<?php echo $this->_tpl_vars['block']['lang_login']; ?>
" /><br />
    <?php echo $this->_tpl_vars['block']['sslloginlink']; ?>

</form>
<div style="text-align: right;"><a href="<?php echo $this->_tpl_vars['zarilia_url']; ?>
/index.php?page_type=user&act=lostpass"><?php echo $this->_tpl_vars['block']['lang_lostpass']; ?>
</a></div>
<?php if ($this->_tpl_vars['block']['allow_register']): ?>
	<div style="text-align: right;"><a href="<?php echo $this->_tpl_vars['zarilia_url']; ?>
/index.php?page_type=register"><?php echo $this->_tpl_vars['block']['lang_registernow']; ?>
</a></div>
<?php endif; ?>
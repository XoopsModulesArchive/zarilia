<?php /* Smarty version 2.6.16, created on 2007-07-02 11:27:56
         compiled from db:system_userform.html */ ?>
<h4><?php echo $this->_tpl_vars['lang_login']; ?>
</h4>
<div style="text-align: left;"><?php echo @_US_LOGINNOTICE; ?>
</div><br />
<form id="userlogin" op="<?php echo $this->_tpl_vars['zarilia_url']; ?>
" method="post">
  <table width="100%" border="0" cellspacing="1" cellpadding="2" summary="">
    <tr>
      <td colspan="2"><b><?php echo @_US_LOGINUSINGDETAILS; ?>
</b></td>
    </tr>
    <tr>
      <td width="30%"><b><?php echo @_USERNAME; ?>
</b></td>
      <td><input type="text" style='vertical-align: middle;' name="login" size="21" maxlength="25" value="<?php echo $this->_tpl_vars['usercookie']; ?>
" /></td>
    </tr>
    <tr>
      <td><b><?php echo @_PASSWORD; ?>
</b></td>
      <td><input type="password" style='vertical-align: middle;' name="pass" size="21" maxlength="32" /></td>
    </tr>
    <?php if ($this->_tpl_vars['showimage']): ?>
	<tr>
      <td><b><?php echo @_MB_SYSTEM_LOGINCHECK; ?>
</b></td>
      <td>
	  	<input type="text" style='vertical-align: middle;' name="verification" size="5" maxlength="32" />&nbsp;<?php echo $this->_tpl_vars['verification_image']; ?>

	  	<input type="hidden" name="verification_ver" value="<?php echo $this->_tpl_vars['verification_ver']; ?>
" />
	  </td>
    </tr>
    <?php endif; ?>
	<tr>
      <td>&nbsp;</td>
      <td>
	   <input type="checkbox" style=' vertical-align: middle;' name="rememberme" value="1"/> <?php echo @_US_REMEBERME; ?>
 <br />
	   <input type="checkbox" style=' vertical-align: middle;' name="loginanon" value="1"/> <?php echo @_US_LOGINANON; ?>
 </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" class="formbutton" value="<?php echo @_LOGIN; ?>
" /></td>
    </tr>
  </table>
  <input type="hidden" name="page_type" value="user" />
  <input type="hidden" name="act" value="dologin" />
  <?php if ($this->_tpl_vars['redirect_page']): ?>
   <input type="hidden" name="zarilia_redirect" value="<?php echo $this->_tpl_vars['redirect_page']; ?>
" />
  <?php endif; ?>
</form>
<div style="text-align: left;"><?php echo @_US_BROWSERCOOKIES; ?>
</div>

<?php if ($this->_tpl_vars['allow_register']): ?>
	<h4><?php echo @_US_CREATEACCOUNT; ?>
</h4>
	<div style="text-align: left;"><?php echo @_US_CREATEACCOUNTTEXT; ?>
</div><br />
	<div style="text-align: left;"><?php echo @_US_CREATEACCOUNTSIGNUP; ?>
</div>
<?php endif; ?>
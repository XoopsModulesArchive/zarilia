<?php /* Smarty version 2.6.16, created on 2007-07-02 09:59:26
         compiled from db:system_lostpass.html */ ?>
<h2><?php echo @_US_LOSTPASSWORD; ?>
</h2>
<div><?php echo @_US_NOPROBLEM; ?>
</div>
<h3><?php echo @_US_PASSWORDRETRIEVAL; ?>
</h3>
<div style="margin-left: 20px;"><?php echo @_US_NOPROBLEM; ?>
</div>

<form style="margin: 0px; padding: 0px;" id="lostpass" op="index.php" method="post">
 <input type="hidden" name="op" value="mailpasswd" />
 <input type="hidden" name="page_type" value="user" />
 <input type="hidden" name="act" value="lostconfirm" />
  <table width="90%" border="0" cellspacing="1" cellpadding="2" summary="">
    <tr>
      <td style="text-align: right; padding-right: 5px;" width="30%"><b><?php echo @_US_YOUREMAIL; ?>
</b></td>
      <td><input type="text" name="email" size="21" maxlength="32" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" class="formbutton" value="<?php echo @_US_SENDPASSWORD; ?>
" />	</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><b><?php echo @_US_LOSTCLICK; ?>
</b></div></td>
    </tr>
  </table>

</form>
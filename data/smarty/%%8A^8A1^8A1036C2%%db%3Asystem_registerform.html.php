<?php /* Smarty version 2.6.16, created on 2007-07-02 11:27:57
         compiled from db:system_registerform.html */ ?>
<script type="text/javascript"><?php echo $this->_tpl_vars['registerform']['javascript']; ?>
</script>

<form name="<?php echo $this->_tpl_vars['registerform']['name']; ?>
" op="<?php echo $this->_tpl_vars['registerform']['op']; ?>
" method="<?php echo $this->_tpl_vars['registerform']['method']; ?>
" <?php echo $this->_tpl_vars['registerform']['extra']; ?>
>
<table width="100%" align="center" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3" align="left"><h3><?php echo @_US_REG_FORM_HEADING; ?>
</h3>
      <div class='register_login'><?php echo @_US_REGALREADYHAVE; ?>
 <a href="<?php echo $this->_tpl_vars['zarilia_url']; ?>
/index.php?page_type=user" target="_blank"><?php echo @_US_REGSIGNIN; ?>
</a></div>
      <table id="content">
        <tr>
          <td class='register_title'><?php echo $this->_tpl_vars['title']; ?>
</td>
        </tr>
<?php if ($this->_tpl_vars['subtitle']): ?>
        <tr>
          <td class='register_subtitle'><?php echo $this->_tpl_vars['subtitle']; ?>
</td>
        </tr>
<?php endif; ?>
        <tr>
          <td class='register_subtitle'> <table width="100%" cellspacing="0">
              <?php if ($this->_tpl_vars['header']): ?>
			  	<p><?php echo $this->_tpl_vars['header']; ?>
</p>
			  <?php endif; ?>
<input type="hidden" name="page_type" value="register" />
<?php $_from = $this->_tpl_vars['registerform']['elements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['element']):
?> <?php if ($this->_tpl_vars['element']['hidden'] != true): ?> <?php if ($this->_tpl_vars['element']['split']): ?> <?php echo $this->_tpl_vars['element']['split']; ?>
 <?php else: ?>
              <tr>
                <td class="itemHead" width="40%"> <b><?php echo $this->_tpl_vars['element']['caption']; ?>
 <?php if ($this->_tpl_vars['element']['required']): ?>* Required<?php endif; ?></b>
				<?php if ($this->_tpl_vars['element']['description']): ?> <div><span style="font-weight: normal;"><?php echo $this->_tpl_vars['element']['description']; ?>
</span></div> <?php endif; ?> </td>
                <td class="itemBody"><?php echo $this->_tpl_vars['element']['body']; ?>
</td>
<?php endif; ?> </tr>
<?php else: ?> <?php echo $this->_tpl_vars['element']['body']; ?>
 <?php endif; ?> <?php endforeach; endif; unset($_from); ?>
            </table>
			</td>
        </tr>
        <table align="center" cellspacing="0" cellpadding="0" id="buttons">
          <tr>
            <td width='10%'>&nbsp;</td>
            <td width='25%' align='left' nowrap='nowrap'><?php echo $this->_tpl_vars['b_back']; ?>
</td>
            <td width='20%' align='center'><?php echo $this->_tpl_vars['b_reload']; ?>
 <?php echo $this->_tpl_vars['b_restart']; ?>
</td>
            <td width='25%' align='right' nowrap='nowrap'><?php echo $this->_tpl_vars['b_next']; ?>
</td>
            <td width='10%'>&nbsp;</td>
          </tr>
        </table>
      </table></td>
    <td width='10%'><br />
<?php echo $this->_tpl_vars['stepbar']; ?>
</td>
    <td width='2%'>&nbsp;</td>
  </tr>
</table>
</form>
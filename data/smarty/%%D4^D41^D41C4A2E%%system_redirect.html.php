<?php /* Smarty version 2.6.16, created on 2007-07-02 11:27:57
         compiled from C:/PHPLearnWAMP/Apache2/htdocs/zarilia/themes/default/addons/system/system_redirect.html */ ?>
<?php echo $this->_tpl_vars['zarilia_header']; ?>

<meta http-equiv="Refresh" content="<?php echo $this->_tpl_vars['time']; ?>
; url=<?php echo $this->_tpl_vars['url']; ?>
" />
<div name=container style="text-align : center; padding:20px;">
  <div class="redirect_container">
	  <div class="redirect_style1"><?php echo $this->_tpl_vars['message']; ?>
</div>
	  <div class="redirect_style2" nowrap:><?php echo $this->_tpl_vars['lang_ifnotreload']; ?>
</div>
  </div>
</div>
</body>
</html>
<?php /* Smarty version 2.6.16, created on 2007-07-02 10:02:03
         compiled from C:/PHPLearnWAMP/Apache2/htdocs/zarilia/themes/default/addons/system/system_errormessage.tpl */ ?>
<?php echo $this->_tpl_vars['zarilia_header']; ?>

<div style="vertical-align: middle;"></div>
<?php if ($this->_tpl_vars['error_title']): ?>
	<h3 style="text-align: left; color: Red;"><?php echo $this->_tpl_vars['error_image']; ?>
 <?php echo $this->_tpl_vars['error_title']; ?>
</h3>
<?php endif; ?>

<?php if ($this->_tpl_vars['error_heading']): ?>
	<div style="text-align:left;"><strong><?php echo $this->_tpl_vars['error_heading']; ?>
</strong></div><br />
<?php endif; ?>
<?php if ($this->_tpl_vars['error_description']): ?>
	<div style="text-align:left;"><?php echo $this->_tpl_vars['error_description']; ?>
</div>
<?php endif; ?>
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['error_array']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
	<div><?php echo @_ER_PAGE_NO; ?>
 <?php echo $this->_tpl_vars['error_array'][$this->_sections['i']['index']]['errno']; ?>
</div>
	<div><?php echo @_ER_PAGE_REASON; ?>
 <?php echo $this->_tpl_vars['error_array'][$this->_sections['i']['index']]['errstr']; ?>
</div>
	<div><?php echo @_ER_PAGE_FILE; ?>
 <?php echo $this->_tpl_vars['error_array'][$this->_sections['i']['index']]['errfile']; ?>
</div>
	<div><?php echo @_ER_PAGE_LINE; ?>
 <?php echo $this->_tpl_vars['error_array'][$this->_sections['i']['index']]['errline']; ?>
</div>
<?php endfor; endif; ?>
<?php if ($this->_tpl_vars['error_button']): ?>
	<div style="text-align: center; padding: 22px;"><input type="submit" class="formbutton" name="submit" onclick="history.go(-1);return false;" value="<?php echo @_RETURN; ?>
" /></div>
<?php endif; ?>
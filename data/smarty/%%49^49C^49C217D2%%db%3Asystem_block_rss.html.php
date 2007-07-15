<?php /* Smarty version 2.6.16, created on 2007-07-02 11:27:57
         compiled from db:system_block_rss.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'db:system_block_rss.html', 6, false),)), $this); ?>
<table width="100%" class="outer"><tr><td>
<?php $_from = $this->_tpl_vars['block']['feeds']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['feed']):
?>
 <table width="100%"><tr><td>
	<a href="<?php echo $this->_tpl_vars['feed']['site_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['feed']['site_name']; ?>
</a><br />
	<?php if ($this->_tpl_vars['feed']['image']['url'] != ""): ?>
	  <img src="<?php echo $this->_tpl_vars['feed']['image']['url']; ?>
" width="<?php echo ((is_array($_tmp=@$this->_tpl_vars['feed']['image']['width'])) ? $this->_run_mod_handler('default', true, $_tmp, 88) : smarty_modifier_default($_tmp, 88)); ?>
" height="<?php echo ((is_array($_tmp=@$this->_tpl_vars['feed']['image']['height'])) ? $this->_run_mod_handler('default', true, $_tmp, 31) : smarty_modifier_default($_tmp, 31)); ?>
" alt="<?php echo $this->_tpl_vars['feed']['image']['title']; ?>
" /><br />
	<?php endif; ?>
	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['feed']['items']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	  <?php if ($this->_tpl_vars['feed']['items'][$this->_sections['i']['index']]['title'] != ""): ?>
	  <div><img src="<?php echo $this->_tpl_vars['zarilia_url']; ?>
/images/icons/xml.gif" align="absmiddle" width="14" height="14" alt="" />&nbsp;<span style="text-indent: 20px;"><a href="<?php echo $this->_tpl_vars['feed']['items'][$this->_sections['i']['index']]['link']; ?>
" target="_blank"><?php echo $this->_tpl_vars['feed']['items'][$this->_sections['i']['index']]['title']; ?>
</a></span></div>
	  <?php endif; ?>
	<?php endfor; endif; ?>
 </td></tr></table><br />
<?php endforeach; endif; unset($_from); ?>
</td></tr></table>
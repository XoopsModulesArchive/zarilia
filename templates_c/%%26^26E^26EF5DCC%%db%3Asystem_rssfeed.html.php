<?php /* Smarty version 2.6.16, created on 2007-07-02 09:59:26
         compiled from db:system_rssfeed.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'db:system_rssfeed.html', 8, false),)), $this); ?>
<table cellspacing="1" class="outer">
  <tr>
    <th colspan="3"><a href="<?php echo $this->_tpl_vars['channel']['link']; ?>
" target="_blank"><?php echo $this->_tpl_vars['channel']['title']; ?>
</a></th>
  </tr>
  <tr>
    <td width="25%" rowspan="6">
      <?php if ($this->_tpl_vars['image']['url'] != ""): ?>
        <img src="<?php echo $this->_tpl_vars['image']['url']; ?>
" width="<?php echo ((is_array($_tmp=@$this->_tpl_vars['image']['width'])) ? $this->_run_mod_handler('default', true, $_tmp, 88) : smarty_modifier_default($_tmp, 88)); ?>
" height="<?php echo ((is_array($_tmp=@$this->_tpl_vars['image']['height'])) ? $this->_run_mod_handler('default', true, $_tmp, 31) : smarty_modifier_default($_tmp, 31)); ?>
" alt="<?php echo $this->_tpl_vars['image']['title']; ?>
" />
      <?php else: ?>
        &nbsp;
      <?php endif; ?>
    </td>
    <td valign="top" class="head"><?php echo $this->_tpl_vars['lang_lastbuild']; ?>
</td>
    <td class="odd"><?php echo ((is_array($_tmp=@$this->_tpl_vars['channel']['lastbuilddate'])) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")); ?>
</td>
  </tr>
  <tr>
    <td valign="top" class="head"><?php echo $this->_tpl_vars['lang_description']; ?>
</td>
    <td class="even"><?php echo ((is_array($_tmp=@$this->_tpl_vars['channel']['description'])) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")); ?>
</td>
  </tr>
  <tr>
    <td valign="top" class="head"><?php echo $this->_tpl_vars['lang_webmaster']; ?>
</td>
    <td class="odd"><?php echo ((is_array($_tmp=@$this->_tpl_vars['channel']['webmaster'])) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")); ?>
</td>
  </tr>
  <tr>
    <td valign="top" class="head"><?php echo $this->_tpl_vars['lang_category']; ?>
</td>
    <td class="even"><?php echo ((is_array($_tmp=@$this->_tpl_vars['channel']['category'])) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")); ?>
</td>
  </tr>
  <tr>
    <td valign="top" class="head"><?php echo $this->_tpl_vars['lang_generator']; ?>
</td>
    <td class="odd"><?php echo ((is_array($_tmp=@$this->_tpl_vars['channel']['generator'])) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")); ?>
</td>
  </tr>
  <tr>
    <td valign="top" class="head"><?php echo $this->_tpl_vars['lang_language']; ?>
</td>
    <td class="even"><?php echo ((is_array($_tmp=@$this->_tpl_vars['channel']['language'])) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")); ?>
</td>
  </tr>
  <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['items']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
  <?php if ($this->_tpl_vars['items'][$this->_sections['i']['index']]['title'] != ""): ?>
  <tr class="head">
    <td colspan="3"><a id="<?php echo $this->_tpl_vars['items'][$this->_sections['i']['index']]['link']; ?>
"></a><a href="<?php echo $this->_tpl_vars['items'][$this->_sections['i']['index']]['link']; ?>
" target="_blank"><?php echo $this->_tpl_vars['items'][$this->_sections['i']['index']]['title']; ?>
</a></td>
  </tr>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['show_full'] == true): ?>
    <?php if ($this->_tpl_vars['items'][$this->_sections['i']['index']]['category'] != ""): ?>
    <tr>
      <td class="even" valign="top"><?php echo $this->_tpl_vars['lang_category']; ?>
</td>
      <td class="odd" colspan="2"><?php echo $this->_tpl_vars['items'][$this->_sections['i']['index']]['category']; ?>

    </tr>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['items'][$this->_sections['i']['index']]['pubdate'] != ""): ?>
    <tr>
      <td class="even" valign="top"><?php echo $this->_tpl_vars['lang_pubdate']; ?>
:</td>
      <td class="odd" colspan="2"><?php echo $this->_tpl_vars['items'][$this->_sections['i']['index']]['pubdate']; ?>
</td>
    </tr>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['items'][$this->_sections['i']['index']]['description'] != ""): ?>
    <tr>
      <td class="even" valign="top"><?php echo $this->_tpl_vars['lang_description']; ?>
:</td>
      <td colspan="2" class="odd"><?php echo $this->_tpl_vars['items'][$this->_sections['i']['index']]['description'];  if ($this->_tpl_vars['items'][$this->_sections['i']['index']]['guid'] != ""): ?>&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['items'][$this->_sections['i']['index']]['guid']; ?>
" target="_blank"><?php echo $this->_tpl_vars['lang_more']; ?>
</a><?php endif; ?></td>
    </tr>
    <?php elseif ($this->_tpl_vars['items'][$this->_sections['i']['index']]['guid'] != ""): ?>
    <tr>
      <td class="even" valign="top"></td>
      <td colspan="2" class="odd"><a href="<?php echo $this->_tpl_vars['items'][$this->_sections['i']['index']]['guid']; ?>
" target="_blank"><?php echo $this->_tpl_vars['lang_more']; ?>
</a></td>
    </tr>
    <?php endif; ?>
  <?php endif; ?>
  <?php endfor; endif; ?>
</table>
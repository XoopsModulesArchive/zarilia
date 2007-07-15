<?php /* Smarty version 2.6.16, created on 2007-07-02 09:59:26
         compiled from db:system_edituserform.html */ ?>
<script type="text/javascript"><?php echo $this->_tpl_vars['zariliaform']['javascript']; ?>
</script>

<div class="zar_title"><?php echo $this->_tpl_vars['title']; ?>
</div>
<div class="zar_subtitle"><?php echo $this->_tpl_vars['subtitle']; ?>
</div><br />

<?php if ($this->_tpl_vars['menubar']): ?>
	<div class="zar_heading"><?php echo $this->_tpl_vars['menubar']; ?>
</div>
<?php endif; ?>
<table width="100%" cellspacing="0">
<?php if ($this->_tpl_vars['header']): ?>
	<tr>
		<th><?php echo $this->_tpl_vars['header']; ?>
</th>
	</tr>
<?php endif; ?>
<form name="<?php echo $this->_tpl_vars['zariliaform']['name']; ?>
" op="<?php echo $this->_tpl_vars['zariliaform']['op']; ?>
" method="<?php echo $this->_tpl_vars['zariliaform']['method']; ?>
" <?php echo $this->_tpl_vars['zariliaform']['extra']; ?>
>
<input type="hidden" name="page_type" value="<?php echo $this->_tpl_vars['page_type']; ?>
" />
<?php $_from = $this->_tpl_vars['zariliaform']['elements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['element']):
?> <?php if ($this->_tpl_vars['element']['hidden'] != true): ?> <?php if ($this->_tpl_vars['element']['split']): ?> <?php echo $this->_tpl_vars['element']['split']; ?>
 <?php else: ?>
	<tr>
		<td width="35%" class="itemHead"><b><?php echo $this->_tpl_vars['element']['caption']; ?>
 <?php if ($this->_tpl_vars['element']['required']): ?>* Required<?php endif; ?></b> <?php if ($this->_tpl_vars['element']['description']): ?> <br /><span style="font-weight: normal;"><?php echo $this->_tpl_vars['element']['description']; ?>
</span> <?php endif; ?> </td>
        <td><?php echo $this->_tpl_vars['element']['body']; ?>
</td>
<?php endif; ?>
	</tr>
<?php else: ?> <?php echo $this->_tpl_vars['element']['body']; ?>
 <?php endif; ?> <?php endforeach; endif; unset($_from); ?>
	</form>
</table>
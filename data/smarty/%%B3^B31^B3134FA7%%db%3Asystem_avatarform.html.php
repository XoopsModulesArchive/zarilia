<?php /* Smarty version 2.6.16, created on 2007-07-02 11:27:57
         compiled from db:system_avatarform.html */ ?>
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

<?php if ($this->_tpl_vars['allowupload']): ?>
	<div style="text-align: left;"><h4 style="color:#ff0000; font-weight:bold;"><?php echo @_US_OLDDELETED; ?>
</h4> <img src="<?php echo $this->_tpl_vars['zarilia_upload']; ?>
/<?php echo $this->_tpl_vars['avatar']; ?>
" alt="" /></div>
<?php endif; ?>

<?php if ($this->_tpl_vars['allowupload']): ?>
<table width="100%" cellspacing="0">
	<form name="uploadavatar" method="post" onsubmit="return zariliaFormValidate_uploadavatar();" enctype="multipart/form-data">
	<input type="hidden" name="page_type" value="avatar" />
	<input type="hidden" name="act" value="avatarupload" />
	<tr>
		<td width="35%" class="itemHead"><b><?php echo @_US_MAXPIXEL; ?>
</b></td>
        <td><?php echo $this->_tpl_vars['avatar_width']; ?>
 x <?php echo $this->_tpl_vars['avatar_height']; ?>
</td>
	</tr>
   	<tr>
		<td class="itemHead"><b><?php echo @_US_MAXIMGSZ; ?>
</b></td>
        <td><?php echo $this->_tpl_vars['avatar_maxsize']; ?>
</td>
	</tr>
   	<tr>
		<td class="itemHead"><b><?php echo @_US_SELFILE; ?>
 </b>  </td>
        <td><input type='hidden' name='MAX_FILE_SIZE' value='<?php echo $this->_tpl_vars['avatar_maxsize']; ?>
' />
			<input type='file' name='avatarfile' id='avatarfile' />
			<input type='hidden' name='zarilia_upload_file[]' id='zarilia_upload_file[]' value='avatarfile' />
		</td>
	</tr>
		<input type='hidden' name='uid' id='uid' value='1' />
	<tr>
		<td width="45%" class="itemHead"><b> </b>  </td>
        <td><input type='submit' class='formbutton'  name='submit'  id='submit' value='Submit'  /></td>
	</tr>
 	</form>
</table><br />
<?php endif; ?>

<table width="100%" cellspacing="0">
<?php if ($this->_tpl_vars['header']): ?>
	<tr>
		<th><?php echo $this->_tpl_vars['header']; ?>
</th>
	</tr>
<?php endif; ?>
	<form name="<?php echo $this->_tpl_vars['uploadavatar']['name']; ?>
" method="<?php echo $this->_tpl_vars['uploadavatar']['method']; ?>
" <?php echo $this->_tpl_vars['uploadavatar']['extra']; ?>
>
	<input type="hidden" name="page_type" value="<?php echo $this->_tpl_vars['page_type']; ?>
" />
	<?php $_from = $this->_tpl_vars['uploadavatar']['elements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
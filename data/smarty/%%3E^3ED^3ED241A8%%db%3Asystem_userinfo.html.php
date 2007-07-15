<?php /* Smarty version 2.6.16, created on 2007-07-02 11:27:56
         compiled from db:system_userinfo.html */ ?>
<h3 class="profiletitle"><?php echo @_US_PROFILE_TITLE_HEADING; ?>
 <?php echo $this->_tpl_vars['user_realname']; ?>
</h3>
<table id='profileheading' cellspacing='1' cellpadding='2'>
	<tr>
		<td width="20%" class='profile'>
			<div style="font-size: 14px; font-weight: bold;"><?php echo $this->_tpl_vars['user_uname']; ?>
</div>
			<?php if ($this->_tpl_vars['user_avatarurl']): ?>
			 <div style="text-align: center;"><img src="<?php echo $this->_tpl_vars['user_avatarurl']; ?>
" alt='<?php echo @_US_AVATAR; ?>
' vspace='5px' /></div>
			<?php endif; ?>
			<div><strong><?php echo $this->_tpl_vars['user_ranktitle']; ?>
</strong></div>
			<div><?php echo $this->_tpl_vars['user_rankimage']; ?>
</div>
		</td>
		<td class='profileinfo'>
			<table class="outer" cellpadding="2" cellspacing="1" width="100%">
			  <tr valign="top">
			    <th colspan="2" align="left"><?php echo @_US_STATISTICS; ?>
</th>
			  </tr>
			  <tr valign="top">
			    <td class="head" width="30%"><?php echo @_US_MEMBERSINCE; ?>
</td>
			    <td align="left" class="odd"><?php echo $this->_tpl_vars['user_joindate']; ?>
</td>
			  </tr>
			  <tr valign="top">
			    <td class="head"><?php echo @_US_POSTS; ?>
</td>
			    <td align="left" class="even"><?php echo $this->_tpl_vars['user_posts']; ?>
</td>
			  </tr>
			  <tr valign="top">
			    <td class="head"><?php echo @_US_LASTLOGIN; ?>
</td>
			    <td align="left" class="odd"><?php echo $this->_tpl_vars['user_lastlogin']; ?>
</td>
			  </tr>
			  <tr valign="top">
			    <td class="head"><?php echo @_US_LEVEL; ?>
</td>
			    <td align="left" class="odd"><?php echo $this->_tpl_vars['user_usrlevel']; ?>
</td>
			  </tr>
			  <tr valign="top">
			    <td class="head"><?php echo @_US_MEDPREF; ?>
</td>
			    <td align="left" class="odd"><?php echo $this->_tpl_vars['user_usrmedpref']; ?>
</td>
			  </tr>
			  <tr valign="top">
			    <td class="head"><?php echo @_US_ONLINE; ?>
</td>
			    <td align="left" class="odd"><img src="<?php echo $this->_tpl_vars['user_online_image']; ?>
" alt='<?php echo $this->_tpl_vars['user_online_status']; ?>
' align="absmiddle" /> <?php echo $this->_tpl_vars['user_online_status']; ?>
 </td>
			  </tr>
			</table>
			<br />
			<?php if ($this->_tpl_vars['user_ownpage'] == true): ?>
				<form name="usernav" op="index.php?page_type=user" method="post">
				<table width="100%" align="center" border="0">
				  <tr align="center">
				    <td>
						<?php if ($this->_tpl_vars['user_ownpage'] == true): ?>
						   <form name="usernav" op="index.php?page_type=user" method="post">
							<input type="button" class="formbutton" value="<?php echo @_US_EDITPROFILE; ?>
" onclick="location='index.php?page_type=edituser'" />
						    <input type="button" class="formbutton" value="<?php echo @_US_AVATAR; ?>
" onclick="location='index.php?page_type=avatar'" />
						    <input type="button" class="formbutton" value="<?php echo @_US_NOTIFICATIONS; ?>
" onclick="location='index.php?page_type=notifications'" />
						    <input type="button" class="formbutton" value="<?php echo @_US_INBOX; ?>
" onclick="location='index.php?page_type=messages'" />
						    <?php if ($this->_tpl_vars['user_candelete'] == true): ?>
						     <input type="button" class="formbutton" value="<?php echo @_US_DELACCOUNT; ?>
" onclick="location='index.php?page_type=user&amp;act=delete'" />
						    <?php endif; ?>
						    <input type="button" class="formbutton" value="<?php echo @_US_LOGOUT; ?>
" onclick="location='index.php?page_type=user&amp;act=logout'" />
						   </form>
						<?php endif; ?>
					</td>
				  </tr>
				</table>
				</form>
				<br />
				<?php elseif ($this->_tpl_vars['zarilia_isadmin'] != false): ?>
				<table width="100%" align="center" border="0">
				  <tr align="center">
				    <td>
					 <input type="button" class="formbutton" value="<?php echo @_US_EDITPROFILE; ?>
" onclick="location='<?php echo $this->_tpl_vars['zarilia_url']; ?>
/addons/system/admin.php?fct=users&amp;uid=<?php echo $this->_tpl_vars['user_uid']; ?>
&amp;op=modifyUser'" />
				     <input type="button" class="formbutton" value="<?php echo @_US_DELACCOUNT; ?>
" onclick="location='<?php echo $this->_tpl_vars['zarilia_url']; ?>
/addons/system/admin.php?fct=users&amp;op=delUser&amp;uid=<?php echo $this->_tpl_vars['user_uid']; ?>
'" />
				   </td>
				  </tr>
				</table>
				<br />
			<?php endif; ?>
		</td>
	</tr>
</table>
<?php if ($this->_tpl_vars['zarilia_isuser']): ?>
 <div align="right">
  <?php if ($this->_tpl_vars['show_posts']): ?>
   <input type="button" class="formbutton" value="<?php echo @_US_VIEWPOSTS; ?>
" onclick="location='<?php echo $this->_tpl_vars['zarilia_url']; ?>
/index.php?page_type=userinfo&amp;act=posts&amp;uid=<?php echo $this->_tpl_vars['user_uid']; ?>
'" />
  <?php else: ?>
    <input type="button" class="formbutton" value="<?php echo @_US_VIEWPROFILE; ?>
" onclick="location='<?php echo $this->_tpl_vars['zarilia_url']; ?>
/index.php?page_type=userinfo&amp;uid=<?php echo $this->_tpl_vars['user_uid']; ?>
'" />
  <?php endif; ?>
  <?php if ($this->_tpl_vars['user_ownpage'] == false): ?>
   <input type="button" class="formbutton" value="<?php echo @_US_SENDEMAIL; ?>
" onclick="location='<?php echo $this->_tpl_vars['zarilia_url']; ?>
/index.php?page_type=userinfo&act=endemail&amp;uid=<?php echo $this->_tpl_vars['user_uid']; ?>
'" />
   <input type="button" class="formbutton" value="<?php echo @_US_SENDPMTO; ?>
" onclick="location='<?php echo $this->_tpl_vars['zarilia_url']; ?>
/addons/messages/message_create.php?op=create&amp;uid=<?php echo $this->_tpl_vars['user_uid']; ?>
'" />
  <?php endif; ?>
 </div>
<?php endif; ?>
<br />
<?php echo $this->_tpl_vars['user_tabs']; ?>

<br /><br />

<?php if ($this->_tpl_vars['show_posts']): ?>
	<table cellpadding="2" cellspacing="1" width="100%">
	 <tr valign="top">
	  <th align="left" colspan="2"><?php echo $this->_tpl_vars['lang_opt']; ?>
</th>
	 </tr>
	 <tr valign="top">
		<!-- start addon search results loop -->
		<?php if ($this->_tpl_vars['user_form']): ?>
			<?php $_from = $this->_tpl_vars['user_form']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['userform']):
?>
			 <tr valign="top">
			  <td class="head" width="35%"><b><?php echo $this->_tpl_vars['userform']['title']; ?>
</b></td>
			  <td align="left" class="even"><?php echo $this->_tpl_vars['userform']['value']; ?>
</td>
			 </tr>
			<?php endforeach; endif; unset($_from); ?>
		<?php else: ?>
		  <tr valign="top">
		   <td colspan="2" align="center" class="even">No Results Found</td>
		  </tr>
		<?php endif; ?>
	</table>
<?php else: ?>
	<table class="outer" cellpadding="2" cellspacing="1" width="100%">
	 <tr valign="top">
	  <th align="left"><?php echo @_US_DATEPOSTED; ?>
</th>
	  <th align="left"><?php echo @_US_ITEMPOSTED; ?>
</th>
	 </tr>
	 <tr valign="top">

	<!-- start addon search results loop -->
	<?php $_from = $this->_tpl_vars['addons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['addon']):
?>
	 <tr valign="top">
	  <td class="head" colspan="2"><b><?php echo $this->_tpl_vars['addon']['name']; ?>
</b></td>
	 </tr>
	 <?php $_from = $this->_tpl_vars['addon']['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
	  <tr valign="top">
	   <td style="white-space: nowrap;" class="even" width="15%"><?php echo $this->_tpl_vars['result']['time']; ?>
</td>
	   <td class="even"><a href="<?php echo $this->_tpl_vars['result']['link']; ?>
"><?php echo $this->_tpl_vars['result']['title']; ?>
</a></td>
	  </tr>
	 <?php endforeach; endif; unset($_from); ?>
	  <tr valign="top">
	   <td class="foot" colspan="2" style="text-align: right;">&nbsp;<?php echo $this->_tpl_vars['addon']['showall_link']; ?>
</td>
	  </tr>
	  <tr valign="top">
	   <td colspan="2">&nbsp;</td>
	  </tr>
	<?php endforeach; endif; unset($_from); ?>
	</table>
<?php endif; ?>
<?php /* Smarty version 2.6.16, created on 2007-07-02 11:27:57
         compiled from db:system_friend.html */ ?>
<div style="padding-bottom: 12px; text-align: left; font-weight: normal;"><?php echo @_US_USER_DETAILS; ?>
</div>
<form op="index.php?page_type=friend" method="post">
  <input type="hidden" name="send" value="-1">
  <input type="hidden" name="url" value="">
  <input type="hidden" name="sign" value="">
  <input type="hidden" name="uid" value="<?php echo $this->_tpl_vars['sender']['uid']; ?>
">
  <input type="hidden" name="cc" value="">
  <input type="hidden" name="style" value="1">
  <input type="hidden" name="subject" value="">
  <input type="hidden" name="more" value="">
  <div align="center">
    <center>
      <table width="100%" cellpadding="2" cellspacing="1" border="0" width="100%">
		<tr>
          <td class="head" width="35%">To Name:</td>
		  <td><input type="text" name="toname" size="23"></td>
        </tr>
        <tr>
          <td class="head">To E-mail:*</td>
		  <td><input type="text" name="to email" size="23"></td>
        </tr>
        <tr>
          <td class="head">From Name</td>
          <td><input type="text" name="fromname" size="23" value=""></td>
        </tr>
        <tr>
          <td class="head">From E-mail:*</td>
          <td><input type="text" name="from email" size="23" value=""></td>
        </tr>
        <tr>
          <td class="head">Message </td>
          <td><textarea name="text" rows="4" cols="26">You might be interested in this</textarea></td>
          <!---->
        </tr>
        <tr>
          <td colspan="2"> <div align="center"> Send a copy to yourself:
              <input type="checkbox" name="q2" value="1">
              <br>
              <!-- -->
              Opt-in to our newsletter
              <input type="checkbox" name="q1" value="1">
            </div></td>
        </tr>
      </table>
      <p>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
      </p>
    </center>
  </div>
</form>


<table width="100%" cellpadding="2" cellspacing="1">
  <tr>
    <th colspan="2"><?php echo @_US_USER_DETAILS_HEADING; ?>
</th>
  </tr>
  <tr valign="top" align="left">
    <td class="head" width="35%"><?php echo @_US_NICKNAME; ?>
</td>
    <td class="even"><input type="text" name="sendername" id="sendername" size="30" maxlength="25" value="" /></td>
  </tr>

  <tr valign="top" align="left">
    <td class="head" width="35%"><?php echo @_US_EMAIL; ?>
</td>
    <td class="even"><input type="text" name="senderemail" id="senderemail" size="40" maxlength="60" value="<?php echo $this->_tpl_vars['name']; ?>
" /></td>
  </tr>

  <tr valign="top" align="left">
    <td class="head" width="35%"><?php echo @_US_NAME; ?>
</td>
    <td class="even"><input type="text" name="recpname" id="recpname" size="30" maxlength="25" value="" /></td>
  </tr>

  <tr valign="top" align="left">
    <td class="head" width="35%"><?php echo @_US_EMAIL; ?>
</td>
    <td class="even"><input type="text" name="recpemail" id="email" size="40" maxlength="60" value="" /></td>
  </tr>


  <tr valign="top" align="left">
    <td class="head" width="35%"><?php echo @_US_EMAIL; ?>
</td>
    <td class="even"><div id="">
        <input type="text" name="email" id="email" size="40" maxlength="60" value="<?php echo $this->_tpl_vars['name']; ?>
" />
        <br />
        <table cellpadding="0" cellspacing="0">
          <tr>
            <td><input type="checkbox" name="user_viewemail" value="<?php echo $this->_tpl_vars['user_viewemail']; ?>
"/><?php echo @_US_ALLOWVIEWEMAIL; ?>
</td>
          </tr>
        </table>
      </div></td>
  </tr>
  <tr valign="top" align="left">
    <td class="head" width="35%"><?php echo @_US_WEBSITE; ?>
</td>
    <td class="even"><input type="text" name="url" id="url" size="40" maxlength="255" value="<?php echo $this->_tpl_vars['url']; ?>
" /></td>
  </tr>
  <tr valign="top" align="left">
    <td class="head" width="35%">Time Zone: </td>
    <td class="even"><select size="1" name="timezone_offset" id="timezone_offset">
        <option value="-12">(GMT-12:00) International Date Line West</option>
        <option value="-11">(GMT-11:00) Midway Island, Samoa</option>
        <option value="-10">(GMT-10:00) Hawaii</option>
        <option value="-9">(GMT-9:00) Alaska</option>
        <option value="-8">(GMT-8:00) Pacific Time (US &amp; Canada)</option>
        <option value="-7">(GMT-7:00) Mountain Time (US &amp; Canada)</option>
        <option value="-6">(GMT-6:00) Central Time (US &amp; Canada), Mexico City</option>
        <option value="-5">(GMT-5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
        <option value="-4">(GMT-4:00) Atlantic Time (Canada), Caracas, La Paz</option>
        <option value="-3.5">(GMT-3:30) St. John`s, Newfoundland and Labrador</option>
        <option value="-3">(GMT-3:00) Brasilia, Buenos Aires, Georgetown</option>
        <option value="-2">(GMT-2:00) Mid-Atlantic</option>
        <option value="-1">(GMT-1:00) Azores, Cape Verde Islands</option>
        <option value="0" selected="selected">(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
        <option value="1">(GMT+1:00) Berlin, Brussels, Copenhagen, Madrid, Paris</option>
        <option value="2">(GMT+2:00) Kaliningrad, South Africa</option>
        <option value="3">(GMT+3:00) Baghdad, Riyadh, Moscow, St. Petersburg<</option>
        <option value="3.5">(GMT+3:30) Tehran</option>
        <option value="4">(GMT+4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
        <option value="4.5">(GMT+4:30) Kabul</option>
        <option value="5">(GMT+5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
        <option value="5.5">(GMT+5:30) Bombay, Calcutta, Madras, New Delhi</option>
        <option value="6">(GMT+6:00) Almaty, Dhaka, Colombo</option>
        <option value="7">(GMT+7:00) Bangkok, Hanoi, Jakarta</option>
        <option value="8">(GMT+8:00) Beijing, Perth, Singapore, Hong Kong</option>
        <option value="9">(GMT+9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
        <option value="9.5">(GMT+9:30) Adelaide, Darwin, Yakutsk</option>
        <option value="10">(GMT+10:00) Eastern Australia, Guam, Vladivostok</option>
        <option value="11">(GMT+11:00) Magadan, Solomon Islands, New Caledonia</option>
        <option value="12">(GMT+12:00) Auckland, Wellington, Fiji, Kamchatka</option>
      </select></td>
  </tr>
  <tr valign="top" align="left">
    <td class="head" width="35%"><?php echo @_US_MAILOK; ?>
</td>
    <td class="even"><input type="radio" name="user_mailok" value="1" <?php if ($this->_tpl_vars['user_mailok'] == 1): ?>checked="checked"<?php endif; ?> />
      Yes
      <input type="radio" name="user_mailok" value="0"
	  <?php if ($this->_tpl_vars['user_mailok'] == 0): ?>checked="checked"<?php endif; ?>
	  />
      No </td>
  </tr>
  <tr>
    <td colspan="2" class="foot">&nbsp;</td>
  </tr>
</table>
<br />
<br />
<table width="100%" class="outer" cellspacing="1">
  <tr>
    <th colspan="2"><?php echo @_US_USER_LOGIN_HEADING; ?>
</th>
  </tr>
  <tr valign="top" align="left">
    <td class="head" width="35%"><?php echo @_US_LOGINNAME; ?>
</td>
    <td class="even"><input type="text" name="login" id="login" size="30" maxlength="25" value="<?php echo $this->_tpl_vars['login']; ?>
" /></td>
  </tr>
  <tr valign="top" align="left">
    <td class="head" width="35%"><?php echo @_US_PASSWORD; ?>
</td>
    <td class="even">
      <script type="text/javascript">
			var qualityName1 = "<?php echo @_MD_AM_PASSLEVEL1; ?>
";
			var qualityName2 = "<?php echo @_MD_AM_PASSLEVEL2; ?>
";
			var qualityName3 = "<?php echo @_MD_AM_PASSLEVEL3; ?>
";
			var qualityName4 = "<?php echo @_MD_AM_PASSLEVEL4; ?>
";
			var qualityName5 = "<?php echo @_MD_AM_PASSLEVEL5; ?>
";
			var qualityName6 = "<?php echo @_MD_AM_PASSLEVEL6; ?>
";
			var passField = "pass";
			var tipo = "1";
			var tipo1 = "1";
			var minpass = "5";
			var pass_level = "60";
			</script>
      <input type="hidden" name="regex" value="[^0-9]">
      <input type="hidden" name="regex3" value="([0-9])\1+">
      <input type="hidden" name="regex1" value="[0-9a-zA-Z]">
      <input type="hidden" name="regex4" value="(\W)\1+">
      <input type="hidden" name="regex2" value="[^A-Z]">
      <input type="hidden" name="regex5" value="([A-Z])\1+">
      <input type="password" name="pass" id="pass" size="10" maxlength="32" value="<?php echo $this->_tpl_vars['pass']; ?>
" /> &nbsp;
      <input type="password" name="pass2" id="vpass" size="v10" maxlength="32" value="<?php echo $this->_tpl_vars['pass2']; ?>
" />
      <!--<script language="javascript" src="<?php echo $this->_tpl_vars['zarilia_url']; ?>
/include/javascript/percent_bar.js"></script>-->
	</td>
  </tr>
  <tr valign="top" align="left">
    <td class="head" width="35%"><?php echo @_US_CREATEPASSWORD; ?>
</td>
    <td class="even"><select name="type">
        <option selected>Choose Type</option>
        <option>Uppercase letters and numbers</option>
        <option>Lowercase letters and numbers</option>
        <option>Mixed case letters and numbers</option>
      </select>
      <select name="length">
        <option value="0">Choose length</option>
        <option value="1">1 Characters</options>
        <option value="2">2 Characters</options>
        <option value="3">3 Characters</options>
        <option value="4">4 Characters</options>
        <option value="5">5 Characters</options>
        <option value="6">6 Characters</options>
        <option value="7">7 Characters</options>
        <option value="8">8 Characters</options>
        <option value="9">9 Characters</options>
        <option value="10">10 Characters</options>
        <option value="11">11 Characters</options>
        <option value="12">12 Characters</options>
        <option value="13">13 Characters</options>
        <option value="14">14 Characters</options>
        <option value="15">15 Characters</options>
        <option value="16" selected="selected">16 Characters</options>
        <option value="17">17 Characters</options>
        <option value="18">18 Characters</options>
        <option value="19">19 Characters</options>
        <option value="20">20 Characters</options>
        <option value="21">21 Characters</options>
        <option value="22">22 Characters</options>
        <option value="23">23 Characters</options>
        <option value="24">24 Characters</options>
        <option value="25">25 Characters</options>
        <option value="26">26 Characters</options>
        <option value="27">27 Characters</options>
        <option value="28">28 Characters</options>
        <option value="29">29 Characters</options>
        <option value="30">30 Characters</options>
        <option value="31">31 Characters</options>
      </select>
      <br />
      <input type="hidden" name="autoupdate" value="true">
      <input type="text" name="password" size="20" readonly="readonly">
      <br />
      <input type="button" name="Generate Password"  id="Generate Password" value="Generate Password" onClick="generate(this.form, true);" /></td>
  </tr>
  <input type="hidden" name="verification_ver" id="verification_ver" value="<?php echo $this->_tpl_vars['verification_ver']; ?>
" />
  <tr class="foot">
    <td colspan="2">* =  Required</td>
  </tr>
</table>
<div><?php echo @_US_DISPLAY_PRIVACY; ?>
</div>
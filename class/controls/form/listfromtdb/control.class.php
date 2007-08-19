<?php

// Loading base class
require_once ZAR_ROOT_PATH.'/class/controls/base/control.class.php';
require_once ZAR_ROOT_PATH.'/class/cache/settings.class.php';

class ZariliaControl_FormField_Listfromtdb 
	extends ZariliaControl_FormField {
	
	var $module;

	function ZariliaControl_FormField_Listfromtdb($name,$value='',$title='',$module='system'){
		$this->ZariliaControl_FormField($name, $value, $title);
		$this->module = $module;
	}

	function render() {
		$settings = &ZariliaSettings::getInstance();
		$data = $settings->read('config.values', $this->module, $this->name);
		if (is_array($data)) {
			//echo $this->name.';';
			$this->_value = '<select name="'.$this->name.'">';
			foreach ($data as $value => $title) {
				$this->_value .= '<option value="'.$value.'"';
				if ($this->value == $value) $this->_value .= ' selected="selected"';
				$this->_value .= '>'.(defined($title)?constant($title):$title).'</option>';
			}		
			$this->_value .= '</select>';
		}
		return parent::render();
	}

}

$settings = &ZariliaSettings::getInstance();
//$settings->remove('config.values', 'events_system');
//$settings->write('config.values', 'system', 'pass_level', array(20=>'_MD_AM_PASSLEVEL1', 40=>'_MD_AM_PASSLEVEL2', 60=>'_MD_AM_PASSLEVEL3', 80=>'_MD_AM_PASSLEVEL4', 95=>'_MD_AM_PASSLEVEL5'));
//$settings->write('config.values', 'system', 'mailmethod', array('mail' => 'PHP mail()', 'sendmail'=>'sendmail', 'smtp'=>'SMTP', 'smtpauth'=>'SMTPAuth'));
//$settings->write('config.values', 'system', 'showimagetype', array('Numeric Verification (no background Image)', 'AlphaNumeric Verification (no background Image)', 'AlphaNumeric Verification (With Background Image)'));

//$settings->remove('config.values', 'events_system');

//$settings = &ZariliaSettings::getInstance();
//$settings->write('config.values', 'system', 'com_mode', array('nest'=>'_NESTED', 'thread'=>'_THREADED' , 'flat'=>'_FLAT'));
//$settings->write('config.values', 'system', 'com_order', array('_OLDESTFIRST' , '_NEWESTFIRST'));

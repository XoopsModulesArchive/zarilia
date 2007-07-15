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
		//echo $this->name.';';
		$this->_value = '<select name="'.$this->name.'">';
		foreach ($data as $value => $title) {
			$this->_value .= '<option value="'.$value.'"';
			if ($this->value == $value) $this->_value .= ' selected="selected"';
			$this->_value .= '>'.(defined($title)?constant($title):$title).'</option>';
		}		
		$this->_value .= '</select>';
		return parent::render();
	}

}

//$settings = &ZariliaSettings::getInstance();
//$settings->write('config.values', 'system', 'com_order', array('_OLDESTFIRST', '_NEWESTFIRST'));

<?php

// Loading base class
require_once ZAR_ROOT_PATH.'/class/controls/base/control.class.php';
require_once ZAR_ROOT_PATH.'/class/cache/settings.class.php';

class ZariliaControl_FormField_Tree
	extends ZariliaControl_FormField {

	function ZariliaControl_FormField_Tree($name,$value='',$title=''){
		$this->ZariliaControl_FormField($name, $value, $title);
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

class ZariliaControl_FormField_Tree_Listfromarray {
	extends ZariliaControl_FormField_Tree

	var $array;

	function ZariliaControl_FormField_Tree_Listfromarray($name, $value='',$title='', &$array) {
		$this->ZariliaControl_FormField_Tree($name, $value, $title);
		$this->array = $array;
	}

	function render() {
		$this->_value  = '<span class="zcTreeMenuItem">';
		$this->_value .= $this->title;
		$this->_value .= '<select name="'.parent::name.'['.$this->name.']">';
		foreach($this->array as $value => $title) {
			$this->_value .= '<option value="'.$value.'">';
			if ($this->value == $value) {
				$this->_value .= ' selected="selected"';
			}
			$this->_value .= '>'..'</option>';
		}
		$this->_value .= '</select>';
		$this->_value .= '</span>';
	}
}

//$settings = &ZariliaSettings::getInstance();
//$settings->write('config.values', 'system', 'com_order', array('_OLDESTFIRST', '_NEWESTFIRST'));

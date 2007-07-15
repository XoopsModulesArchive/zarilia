<?php

// Loading base class
require_once ZAR_ROOT_PATH.'/class/controls/base/control.class.php';

class ZariliaControl_FormField_Listfromarray 
	extends ZariliaControl_FormField {
	
	var $name, $value, $title, $array;

	function ZariliaControl_FormField_Listfromarray($name, $value='', $title='', &$array) {
		$this->ZariliaControl_FormField($name, $value, $title);
		$this->array = $array;
	}

	function render() {
		$this->_value = '<select name="'.$this->name.'">';
		foreach ($this->array as $id => $title) {
			$this->_value .= '<option value="'.$id.'">'.$title.'</option>';
		}
		$this->_value .= '</option>';
		return parent::render();
	}

}

?>
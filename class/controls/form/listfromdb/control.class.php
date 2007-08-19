<?php

// Loading base class
require_once ZAR_ROOT_PATH.'/class/controls/base/control.class.php';

class ZariliaControl_FormField_Listfromdb 
	extends ZariliaControl_FormField {
	
	var $name, $value, $title, $criteria;
	var $idname, $namename;

	function ZariliaControl_FormField_Listfromdb($name, $value='', $title='', &$criteria=null, $idname = 'id', $namename = 'name') {
		$this->ZariliaControl_FormField($name, $value, $title);
		$this->criteria = $criteria;
		$this->idname = $idname;
		$this->namename = $namename;
	}

	function render() {
		global $zariliaDB;
		$sql = 'SELECT * FROM 
		$this->_value = '<select name="'.$this->name.'">';
		$this->_value = '<input type="text" name="'.$this->name.'" value="'.$this->value.'" />';
		return parent::render();
	}

}

?>
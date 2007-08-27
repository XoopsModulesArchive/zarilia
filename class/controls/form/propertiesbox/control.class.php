<?php

// Loading base class
require_once ZAR_ROOT_PATH.'/class/controls/base/control.class.php';

class ZariliaControl_FormField_Propertiesbox
	extends ZariliaControl_FormField {

	var $items = array();

	function ZariliaControl_FormField_Propertiesbox($name, $title='') {
		$this->ZariliaControl_FormField($name, null, $title);
	}

	function &addField($type, $name, $value='', $title='') {
		require_once ZAR_CONTROLS_PATH.'/form/'.$type.'/control.class.php';
		$class = 'ZariliaControl_FormField_'.ucfirst($type);
		$name = $this->name.'['.$name.']';
		switch (func_num_args()) {
			case 2:
				return $this->_fields[] = new $class($name);
			break;
			case 3:
				return $this->_fields[] = new $class($name, $value);
			break;
			case 5:
				$param = func_get_arg(4);
				return $this->items[] = new $class($name, $value, $title, $param);
			break;
			default:
				return $this->items[] = new $class($name, $value, $title);
			break;
		}
	}

	function render() {
		$this->_value  = '<table border="0">';
		foreach ($this->items as $item) {
			$this->_value .= '<tr>';
			$this->_value .= '<td>';
			$this->_value .= $item->title;
			$this->_value .= '</td>';
			$this->_value .= '<td>';
			$this->_value .= $item->render();
			$this->_value .= '</td>';
			$this->_value .= '</tr>';
		}
		$this->_value .= '</table>';
//		 '<input type="text" name="'.$this->name.'" value="'.$this->value.'" />';
		return parent::render();
	}

	function &getFieldData() {
		$data = array();
		foreach ($this->items as $item) {
			$data[] = array($item->getName(), $item->name, substr(get_class($item),25));
		}
		return $data;
	}

}

?>
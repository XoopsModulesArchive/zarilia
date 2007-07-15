<?php
// $Id: form.php,v 1.1 2007/03/16 02:40:28 catzwolf Exp $
// ------------------------------------------------------------------------ //
// Zarilia - PHP Content Management System                      			//
// Copyright (c) 2007 Zarilia                           				//
// 																			//
// Authors: 																//
// John Neill ( AKA Catzwolf )                                     			//
// Raimondas Rimkevicius ( AKA Mekdrop )									//
// 							 												//
// URL: http:www.zarilia.com 												//
// Project: Zarilia Project                                               //
// -------------------------------------------------------------------------//

// Loading base class
require_once ZAR_CONTROLS_PATH.'/base/control.class.php';
require_once ZAR_CONTROLS_PATH.'/form/base.field.class.php';

/**
 * DHTML/Ajax Form
 * 
 * @package kernel
 * @subpackage ajax
 */
class ZariliaControl_Form 
	extends ZariliaControl {

	var $_fields = array();
	var $method = 'post';
	var $actionurl;

	/**
	 * Constructor
	 */
	function ZariliaControl_Form($actionurl='', $name = null) {
		$this->ZariliaControl('Form',$name);
		$function = $this->GenerateFunctionName();
		$this->RegisterFunction($function);
		$this->actionurl = $actionurl;
	}

	function &addField($type, $name, $value, $title='') {
		require_once ZAR_CONTROLS_PATH.'/form/fields/'.$type.'.php';
		$class = 'ZariliaControl_FormField_'.ucfirst($type);
		switch (func_num_args()) {
			case 5:
				$param = func_get_arg(4);
				return $this->_fields[] = new $class($name, $value, $title, $param);
			break;
			default:
				return $this->_fields[] = new $class($name, $value, $title);
			break;
		}
	}

	function render() {
		$data  = '<form action="javascript:void();">';
		$data .= '<table border="0"><tbody>';
		$count = count($this->_fields);
		for($i=0;$i<$count;$i++) {
			$data .= '<tr><td>'.$this->_fields[$i]->title.'</td><td>'.$this->_fields[$i]->render().'</td></tr>';
		}
		$data .= '</tbody><tfooter>';
		$data .= '<tr><td><input type="submit"></td></tr>';
		$data .= '</tfooter></table>';
		$data .= parent::render();
		return $data;
	}

}
?>
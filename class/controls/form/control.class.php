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
	var $_fieldsCount = 0;
	var $method = 'post';
	var $actionfile;

	/**
	 * Constructor
	 */
	function ZariliaControl_Form($actionfile, $name = null) {
		global $zariliaOption;
		$this->ZariliaControl('Form',$name,'',true);
		$function = $this->GenerateFunctionName();
		$this->RegisterFunction($function);
		$this->actionfile = $actionfile;
		if (!isset($zariliaOption['zcFormField_Error'])) {
			$zariliaOption['zcFormField_Error'] = true;
			$this->addJS('function zcFormField_Error(id, error) {
							document.getElementById(id + "_id_err").innerHTML = error;
						 }
						 function zcFormField_getElementByIdNameTag(id, tag, name) {
							var xobj = document.getElementById(id);
							var xobjs = xobj.getElementsByTagName(tag);
							for(o=0;o<xobjs.length;o++) {
							   if (xobjs[o].name == name) {
		 						   return xobjs[o];
							   }
							}
							return null;
						 }
						 function zcForm_SubmitEffect(id) {
							 var form = document.getElementById(id);
							 form = form.getElementsByTagName("form")[0];
							 for(i=0;i<form.length;i++) {
								 form.elements[i].disabled = true;
							 }
							 var links = form.getElementsByTagName("a");
							 for(i=0;i<links.length;i++) {
								 links[i].href2 = links[i].href;
								 links[i].onclick2 = links[i].onclick;
								 links[i].href = links[i].onclick = "javascript:void();";
								 links[i].style.cursor2 = links[i].style.cursor;
								 links[i].style.cursor = "default";
							 }
						 }
						 function zcForm_ReturnEffect(id) {
							 var form = document.getElementById(id);
							 form = form.getElementsByTagName("form")[0];
							 for(i=0;i<form.length;i++) {
								 form.elements[i].disabled = false;
							 }
							 var links = form.getElementsByTagName("a");
							 for(i=0;i<links.length;i++) {
								 links[i].href = links[i].href2;
								 links[i].onclick = links[i].onclick2;
								 links[i].style.cursor = "pointer";
							 }
						 }
				');
		}
	}

	function &addField($type, $name, $value='', $title='') {
		require_once ZAR_CONTROLS_PATH.'/form/'.$type.'/control.class.php';
		$class = 'ZariliaControl_FormField_'.ucfirst($type);
		switch (func_num_args()) {
			case 2:
				$this->_fields[$this->_fieldsCount] = new $class($name);
			break;
			case 3:
				$this->_fields[$this->_fieldsCount] = new $class($name, $value);
			break;
			case 5:
				$param = func_get_arg(4);
				$this->_fields[$this->_fieldsCount] = new $class($name, $value, $title, $param);
			break;
			case 6:
				$param = func_get_arg(4);
				$param2 = func_get_arg(5);
				$this->_fields[$this->_fieldsCount] = new $class($name, $value, $title, $param, $param2);
			break;
			default:
				$this->_fields[$this->_fieldsCount] = new $class($name, $value, $title);
			break;
		}
		return $this->_fields[$this->_fieldsCount++];
	}

	function render() {
		$count = count($this->_fields);
		$table_data = '';
		$table_data2 = '';
		$beforeSubmit = '';
		$code2 = array();
		$code3 = array();
		for($i=0;$i<$count;$i++) {
			$beforeSubmit .= $this->_fields[$i]->beforeSubmit."\r\n";
			if ($this->_fields[$i]->title !== null) {
				$table_data .= '<tr><td valign="top">'.$this->_fields[$i]->title.'</td><td>'.$this->_fields[$i]->render().'</td><td id="'.$this->_fields[$i]->getName().'_id_err"></td></tr>';
			} else {
				$table_data2 .= $this->_fields[$i]->render();
			}
			$code2[] = '\''.$this->_fields[$i]->getName().'\'';
			$code3[] = '\''.$this->_fields[$i]->name.'\'';
			$code4[] = '\''.substr(get_class($this->_fields[$i]),25).'\'';
		}
		$code = 'function ZariliaControl_Form_'.$this->getName().'_Submit(form){';
		$code .= $beforeSubmit;
		$code .= 'zcForm_SubmitEffect("'.$this->getName().'");';
		$code .= 'var code = "'.$this->GetRJSfp('Handler').'";';
		$code .= ' var fieldi = new Array('.implode(',',$code2).'); ';
		$code .= ' var fields = new Array('.implode(',',$code3).'); ';
		$code .= ' var fieldt = new Array('.implode(',',$code4).'); ';
		$code .= ' code += ", \'0:'.$this->actionfile.'\'"; ';
		$code .= ' var xobj = null; ';
		$code .= 'for(i=0;i<fieldt.length;i++) {
					 code += ", \'0:" + fields[i] + "\'";
					 code += ", \'0:" + fieldt[i] + "\'";
					 code += ", \'0:" + fieldi[i] + "\'";
					 xobj = zcFormField_getElementByIdNameTag(fieldi[i], "input", fields[i]);
					 if (!xobj) {
						xobj = zcFormField_getElementByIdNameTag(fieldi[i], "textarea", fields[i]);
					 }
					 code += ", \'0:" + xobj.value + "\'";
				  }
		';
		$code .= 'code += ");";';
//		$code .= 'alert(code);';
		$code .= 'eval(code);';
		$code .= '}';
		$this->addJS($code);
		$data  = '<form action="" onsubmit="ZariliaControl_Form_'.$this->getName().'_Submit(this); return false;">';
		$data .= '<table border="0"><tbody>'.$table_data;
		$data .= '</tbody><tfooter>';
		$data .= '<tr><td></td><td><input type="submit"></td></tr>';
		$data .= '</tfooter></table>'.$table_data2;
		$this->_value = $data;
		return parent::render();
	}

}
?>
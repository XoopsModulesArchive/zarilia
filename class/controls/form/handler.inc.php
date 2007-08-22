<?php
// $Id: statictabs.php,v 1.1 2007/03/16 02:40:28 catzwolf Exp $
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

function ZariliaControl_Form_Handler($name, $actionfile, $info) {
	global $_POST, $zariliaUser, $zariliaAddon, $zariliaConfig, $_GET;
	$objResponse = new xajaxResponse();
	$objResponse->call('zcForm_ReturnEffect', $name);
	$count = count($info);
	$error = false;
	$_POST = array();
	for($i=0;$i<$count;$i++) {
		if (file_exists($file = ZAR_CONTROLS_PATH.'/form/'.$info[$i][2].'/handler.inc.php')) {
			require_once $file;
			$funcname = 'ZariliaControl_FormField_'.ucfirst($info[$i][2]).'_Validator';
			$error = $error || (!$funcname($info[$i][0], $info[$i][3], $objResponse));
		}
		if ($error) continue;
		if ($o = mb_strpos($info[$i][1], '[')) {
			$name = '$_POST[\''.mb_substr($info[$i][1],0,$o).'\']'.mb_substr($info[$i][1],$o);
		} else {
			$name = '$_POST[\''.$info[$i][1].'\']';
		}
		eval("$name = \$info[$i][3];");
//		$_POST[$info[$i][1]] = $info[$i][3];
	}
	if ($error) return $objResponse;
	$_REQUEST = &$_POST;
	require ZAR_ROOT_PATH.$actionfile;
//	var_dump($_POST);
//	die();
/*	
	
	$error = false;
	for($i=2;$i<$count;$i++) {
		$name = func_get_arg($i);
		$value = func_get_arg($i+3);
		if (file_exists($file = ZAR_CONTROLS_PATH.'/form/'.($type = func_get_arg($i+1)).'/handler.inc.php')) {
			require_once $file;
			$funcname = 'ZariliaControl_FormField_'.ucfirst($type).'_Validator';
			$error = $error || (!$funcname(func_get_arg($i+2), $value, $objResponse));
		}
		if ($error) continue;
		if ($o = mb_strpos($name, '[')) {
			$name = '$_POST[\''.mb_substr($name,0,$o).'\']'.mb_substr($name,$o);
		} else {
			$name = '$_POST[\''.$name.'\']';
		}
		eval("$name = \$value;");
		//eval($_POST[$name] = func_get_arg($i+1));
	}
	if ($error) return $objResponse;
	unset($error, $i, $count, $file, $type, $name, $value);
	$_REQUEST = &$_POST;
/*	$url = parse_url($_SERVER["HTTP_REFERER"]);
	parse_str($url['query'], $_GET);
	unset($url);*/

//	require ZAR_ROOT_PATH.$actionurl;
//	$objResponse->alert(var_export($_GET,true));
//phpinfo();
	//$objResponse->assign($name, "innerHTML", date("r", time()));
    return $objResponse;
}

?>
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

function ZariliaControl_Form_Handler($name, $actionurl) {
	global $_POST, $zariliaUser, $zariliaAddon, $zariliaConfig, $_GET;
	$objResponse = new xajaxResponse();
	$count = func_num_args();
	$_POST = array();
	$error = false;
	$objResponse->call('zcForm_ReturnEffect', $name);
	for($i=2;$i<$count;$i+=4) {
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
	$url = parse_url($_SERVER["HTTP_REFERER"]);
	parse_str($url['query'], $_GET);
	unset($url);
	if (isset($_GET['op'])) $op = zarilia_cleanRequestVars( $_GET, 'op', 'default', XOBJ_DTYPE_TXTBOX );
	if (isset($_GET['fct'])) $fct = zarilia_cleanRequestVars( $_GET, 'fct', 'cpanel', XOBJ_DTYPE_TXTBOX );

	require ZAR_ROOT_PATH.$actionurl;
//	$objResponse->alert(var_export($_GET,true));
//phpinfo();
	//$objResponse->assign($name, "innerHTML", date("r", time()));
    return $objResponse;
}

?>
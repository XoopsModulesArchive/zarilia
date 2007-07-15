<?php
// $Id: textclock.php,v 1.1 2007/03/16 02:40:28 catzwolf Exp $
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
require_once ZAR_ROOT_PATH.'/class/ajax/control.class.php';

/**
 * DHTML/Ajax Text Clock
 * 
 * @package kernel
 * @subpackage ajax
 */
class ZariliaControl_Block 
	extends ZariliaControl {

	 /**
	 * Constructor
	 */
	function ZariliaControl_Block($content='', $function=null, $name = null) {
		global $zariliaOption;
		$this->ZariliaControl('Block',$name, $content);
		if(!$this->isSysFlag('ajax_blocks_started')) {
			$_SESSION['blocks'] = array();
			$this->setSysFlag('ajax_blocks_started');
		}
		if($function){
			$_SESSION['blocks'][$this->getName()] = array($function, array());
			$this->RegisterFunction($function = $this->GenerateFunctionName());
			$this->AddTimer($function,5000);
		}
	}

	function bind($table, $id) {
		$_SESSION['blocks'][$this->getName()][0][$table] = $id;
	}


}
?>
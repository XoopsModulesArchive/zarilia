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
require_once ZAR_CONTROLS_PATH.'/base/control.class.php';
require_once ZAR_CONTROLS_PATH.'/tree/phpDynaTree/dyna.inc.php';

/**
 * DHTML/Ajax Text Clock
 * 
 * @package kernel
 * @subpackage ajax
 */
class ZariliaControl_Tree
	extends ZariliaControl {

	var $_nodes = array();
	var $title = '';
	var $icon = null;
	var $param = null;
	var $orderNumber = null;

	 /**
	 * Constructor
	 */
	function ZariliaControl_Tree($title, $icon=null, $param=null, $orderNumber=null, $name = null) {
		global $zariliaTpl;
		$this->ZariliaControl('Tree',$name);
		$this->title = $title;
		$this->icon = $icon;
		$this->param = $param;
		$this->orderNumber = $orderNumber;
		if (!$this->isSysFlag('zcTreeCoreLoaded')) {
			$zariliaTpl->addCss(ZAR_CONTROLS_PATH.'/tree/std_treelook.css');
			$zariliaTpl->addScript(ZAR_CONTROLS_PATH.'/tree/nanotree.js');
			$this->setSysFlag('zcTreeCoreLoaded');
		}
	}

	function &add($title, $icon=null, $param=null, $orderNumber=null, $name = null) {
		return $this->_nodes[] = new ZariliaControl_Tree($title, $icon, $param, $orderNumber, $name);
	}

	function render() {
		if (!$this->isSysFlag('zcTreeBaseLoaded')) {
			$this->setSysFlag('zcTreeBaseLoaded');
			$js = "showRootNode = false; sortNodes = false; dragable = false;
			function init(id) {container = document.getElementById(id);	showTree(''); }
			function standardClick(treeNode) {
				//var mytext = document.getElementById('mytext');
				//var param = treeNode.getParam();
				//mytext.innerHTML = (param == '') ? treeNode.getName() : param;
			}
			function nodeEdited(treeNode) {	}
			var closedGif = 'images/folder_closed.gif';
			var openGif = 'images/folder_open.gif';
			var pageIcon = 'images/page16x16.gif';
			var userIcon = 'images/user_16x16.gif';
			var helpIcon = 'images/help_16x16.gif';
			rootNode = new TreeNode('".$this->getName()."','RootNode');";
			//node1.setEditable(true);
			//node1.addEditEventListener('nodeEdited');
		} else {
			
		}
	}

}
?>
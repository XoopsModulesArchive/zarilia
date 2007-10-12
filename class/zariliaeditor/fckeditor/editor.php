<?php
// $Id: dhtmltextarea.php,v 1.1 2007/03/16 02:42:25 catzwolf Exp $
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
defined( 'ZAR_ROOT_PATH' ) or die( 'You do not have permission to access this file!' ); 
/**
 * Pseudo class
 * 
 * @author phppp (D.J.) 
 * @copyright copyright (c) 2007 Zarilia Project - http://www.zarilia.com
 */



class FormFCKEditor extends FCKeditor {
    /**
     * Constructor
     * 
     * @param array $configs Editor Options
     * @param binary $checkCompatible true - return false on failure
     */
    function FormFCKEditor( $configs, $checkCompatible = false ) {
		global $zariliaConfig;
        if ( !empty( $configs ) ) foreach( $configs as $key => $val ) {
            ${$key} = $val;
            $this->Config[$key] = $val;
        } 

		$this->FormFCKEditor($this->name);
		$this->BasePath = ZAR_ROOT_PATH.'/class/zariliaeditor/fckeditor/';

		if ( isset($_GET['Lang']) ) {
			$this->Config['AutoDetectLanguage']	= false ;
			$this->Config['DefaultLanguage']		= $zariliaConfig['lang_code'];
		} else {
			$this->Config['AutoDetectLanguage']	= true ;
			$this->Config['DefaultLanguage']		= 'en' ;
		}

		$this->Value = &$this->value;
		
//$oFCKeditor->Create() ;


//        $this->ZariliaFormDhtmlTextArea( "", $this->name, empty( $this->value )?"":$this->value, empty( $this->rows )?5:$this->rows, empty( $this->cols )?50:$this->cols, empty( $this->hiddentext )?"zariliaHiddenText":$this->hiddentext );
    } 

    function setConfig( $configs ) {
        foreach( $configs as $key => $val ) {
            $this->Config[$key] = $val;
        } 
    } 

	function render() {
		$this->Create() ;
		parent:render;
	}
} 

?>
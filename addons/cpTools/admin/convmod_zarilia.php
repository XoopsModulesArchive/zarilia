<?php
// $Id: convmod_zarilia.php,v 1.1 2007/03/16 02:34:43 catzwolf Exp $
// ------------------------------------------------------------------------ //
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
function convert_addon( $data )
{
    if ( strstr( $data, 'ZAR_ROOT_PATH."/class/zariliaobject.php"' ) ) {
        return '';
    }
    if ( substr( $data, 0, strlen( 'function ' ) ) == 'function ' ) {
        return "\n" . $data;
    }
    $data = str_replace( array( 'ZariliaUser::uid()' ),
        array( 'ZariliaUser->getVar("uid")' ),
        $data );
    return $data;
}

$contents = file_get_contents( "$source/$file" );

if ( substr( $file, -4 ) == '.php' ) {
    include_once ZAR_ROOT_PATH . '/addons/cpTools/admin/code_parse_php.php';
}

$handle = fopen( "$dest/$file", "w" );
fwrite( $handle, $contents );
fclose( $handle );

?>
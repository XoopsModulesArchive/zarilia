<?php
// $Id: cp_header.php,v 1.1 2007/03/16 02:39:06 catzwolf Exp $
/**
 * addon files can include this file for admin authorization
 * the file that will include this file must be located under zarilia_url/addons/addon_directory_name/admin_directory_name/
 */

include_once '../../../mainfile.php';
include_once ZAR_ROOT_PATH . '/include/cp_functions.php';
if ( $zariliaUser ) {
	$addonperm_handler = &zarilia_gethandler( 'groupperm' );
    $url_arr = explode( '/', strstr( $_SERVER[ 'REQUEST_URI' ], '/addons/' ) );
    $addon_handler = &zarilia_gethandler( 'addon' );
    $zariliaAddon = &$addon_handler->getByDirname( $url_arr[2] );
    unset( $url_arr );
    if ( !$addonperm_handler->checkRight( 'addon_admin', $zariliaAddon->getVar( 'mid' ), $zariliaUser->getGroups() ) ) {
        redirect_header( ZAR_URL, 1, _NOPERM );
        exit();
    }
} else {
    redirect_header( ZAR_URL, 1, _NOPERM );
    exit();
}

// set config values for this addon
if ( $zariliaAddon->getVar( 'hasconfig' ) == 1 || $zariliaAddon->getVar( 'hascomments' ) == 1 ) {
    $config_handler = &zarilia_gethandler( 'config' );
    $zariliaAddonConfig = &$config_handler->getConfigsByCat( 0, $zariliaAddon->getVar( 'mid' ) );
}

?>
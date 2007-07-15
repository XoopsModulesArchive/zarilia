<?php
// $Id: class_siteinfo.php,v 1.2 2007/04/21 09:44:36 catzwolf Exp $
// ------------------------------------------------------------------------ //
// Zarilia - PHP Content Management System                      			//
// Copyright (c) 2007 Zarilia                           				//
// //
// Authors: 																//
// John Neill ( AKA Catzwolf )                                     			//
// Raimondas Rimkevicius ( AKA Mekdrop )									//
// //
// URL: http:www.zarilia.com 												//
// Project: Zarilia Project                                               //
// -------------------------------------------------------------------------//
/**
 * siteinfo_manager
 *
 * @package
 * @author John
 * @copyright Copyright (c) 2007
 * @version $Id: class_siteinfo.php,v 1.2 2007/04/21 09:44:36 catzwolf Exp $
 * @access public
 */
class siteinfo_manager
{
    var $cpConfig = array();
    var $file_main = '../siteinfo.php';
    var $file_dist = '../siteinfo.dist.php';

    var $report = array();
    var $errors = array();

    /**
     * siteinfo_manager()
     *
     * @return
     */
    function siteinfo_manager()
    {
        // dummy
    }

    function loadSiteinfo()
    {
        global $cpConfig;
        if ( file_exists( $this->file_main ) )
        {
            include $this->file_main;
            $this->cpConfig = @$cpConfig;
        }
    }

    function loadArray( &$siteInfo )
    {
        $this->cpConfig = &$siteInfo;
    }

    function loadSiteinfobackup()
    {
        global $cpConfig;
        if ( file_exists( $this->file_main ) )
        {
            include $this->file_main;
            $this->cpConfig = @$cpConfig;
        }
    }

    /**
     * Populate var scope with $_post or array given through $value
     *
     * @param mixed $values
     * @return
     */
    function createNew( &$values )
    {
        $getArgs = func_get_args();
        $this->cpConfig['db'] = array( 'type' => $values['database'],
            'prefix' => $values['prefix'],
            'host' => $values['dbhost'],
            'user' => $values['dbuname'],
            'pass' => $values['dbpass'],
            'name' => $values['dbname'],
            'pconnect' => $values['db_pconnect']
            );

        $this->cpConfig['sites'] = array();
        $this->cpConfig['sites']['default://'] = array();
        $this->cpConfig['sites']['default://']['languages'] = array( 0 => 'en' ); //FIX ME!!//
        $this->cpConfig['sites']['default://']['prefix'] = substr( md5( 'default://' ), 0, 5 );
        $this->cpConfig['sites']['default://']['url'] = $values['zarilia_url'];

        $this->cpConfig['tables'] = array();
        $this->cpConfig['tables']['ml'] = array();
        $this->cpConfig['tables']['ms'] = array( 'configoption', 'config', 'events', 'group_permission', 'groups', 'groups_users_link', 'language_base', 'language_ext', 'addons', 'newblocks', 'online', 'tplfile', 'tplset', 'tplsource' );

        $this->cpConfig['groups'] = array();
        $data['groups'] = array( 'admin', 'users', 'anonymous', 'moderators', 'submitters', 'subscription', 'banned' );
        foreach( $data['groups'] as $groupID => $group )
        {
            $this->cpConfig['groups'][( $groupID + 1 ) . ''] = strtoupper( $group );
        }
        $this->cpConfig['root_path'] = $values['root_path'];

        $zariliaPathTrans = isset( $_SERVER['PATH_TRANSLATED'] ) ? $_SERVER['PATH_TRANSLATED'] : $_SERVER['SCRIPT_FILENAME'];
        if ( DIRECTORY_SEPARATOR != '/' ) {
            // IIS6 doubles the \ chars
            $zariliaPathTrans = str_replace( strpos( $zariliaPathTrans, '\\\\', 2 ) ? '\\\\' : DIRECTORY_SEPARATOR, '/', $zariliaPathTrans );
        }
        $this->cpConfig['check_path'] = strcasecmp( substr( $zariliaPathTrans, 0, strlen( stripslashes( $_POST['root_path'] ) ) ), $values['root_path'] ) ? 0 : 1 ;;
    }

    /**
     * Save Siteinfo data to file
     *
     * @param array $siteInfo
     * @return
     */
    function saveSiteinfo( $siteInfo = '' )  {
        clearstatcache();
        if ( is_array( $siteInfo ) && !empty( $siteInfo ) )
        {
            $this->cpConfig = &$siteInfo;
        }

        $mode = ( !file_exists( $this->file_main ) ) ? 'x' : 'w';
        $tp = @fopen( $this->file_main, $mode );
        $newline = "\n";
        $copyright = $this->getCopyright();
        fwrite( $tp, '<?php ' . $newline );
        fwrite( $tp, $copyright . $newline . $newline );

        fwrite( $tp, ' $cpConfig = ' . var_export( $this->cpConfig, true ) . ';' . $newline );
        fwrite( $tp, '?>' );
        fclose( $tp );
        if ( $tp )
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * Update Vars within the var scope of siteinfo
     *
     * @param mixed $key
     * @param mixed $level
     * @param mixed $value
     * @return
     */
    function updateVars( $key, $level, $value )
    {
        if ( isset( $level ) && !empty( $level ) )
        {
            if ( isset( $this->cpConfig[$key][$level] ) )
            {
                $this->cpConfig[$key][$level] = $value;
            }
        }
        else
        {
            if ( isset( $this->cpConfig[$key] ) )
            {
                $this->cpConfig[$key] = $value;
            }
        }
    }

    /**
     * Copy the dist file over the orignal
     *
     * @return
     */
    function copyDistFile()
    {
        if ( !copy( $this->file_dist, $this->file_main ) )
        {
            $this->report[] = _NGIMG . sprintf( _INSTALL_L126, '<b>' . $this->file_main . '</b>' );
            $this->error = true;
            return false;
        }
        $this->report[] = _OKIMG . sprintf( _INSTALL_L125, '<b>' . $this->file_main . '</b>', '<b>' . $this->file_dist . '</b>' );
        return true;
    }

    function getCopyright()
    {
        $ret = "// ------------------------------------------------------------------------ //
// Zarilia - PHP Content Management System                      			//
// Copyright (c) 2007 Zarilia                           					//
// //
// Authors: 																//
// John Neill ( AKA Catzwolf )                                     			//
// Raimondas Rimkevicius ( AKA Mekdrop )									//
// //
// URL: http:www.zarilia.com 												//
// Project: Zarilia Project                                               	//
// -------------------------------------------------------------------------//

/** DO NOT EDIT THIS FILE UNLESS YOU KNOW WHAT YOU ARE DOING: YOU COULD SHUTDOWN YOUR SITE!!**/";
        return $ret;
    }
}

?>
<?php
// $Id: index.php,v 1.3 2007/04/21 09:42:36 catzwolf Exp $
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

if ( !is_object( $zariliaUser ) || !is_object( $zariliaAddon ) || !$zariliaUser->isAdmin( $zariliaAddon->getVar('mid') ) ) {
    exit( "Access Denied" );
}

include ZAR_ROOT_PATH . '/class/zariliaformloader.php';
include_once ZAR_ROOT_PATH . '/class/zarilialists.php';
include_once ZAR_ROOT_PATH . '/class/class.menubar.php';
include_once ZAR_ROOT_PATH . "/addons/system/blocks/system_blocks.php";
include_once ZAR_ROOT_PATH . "/addons/system/language/" . $zariliaConfig['language'] . "/blocks.php";

$confcat_id = zarilia_cleanRequestVars( $_REQUEST, 'confcat_id', 1 );
$conf_sectid = zarilia_cleanRequestVars( $_REQUEST, 'conf_sectid', 1 );
switch ( strtolower( $op ) ) {
    case 'showaddon';
    case 'showmod';
		$mod = zarilia_cleanRequestVars( $_REQUEST, 'mod', 0 );
        //echo $mod;
		$configs = &$config_handler->getConfigs( new Criteria( 'conf_modid', $mod ) );
#		if ( empty( $mod ) || !count( $configs ) ) {
#            zarilia_cp_header();
#            $GLOBALS['zariliaLogger']->setSysError( E_USER_WARNING, "Addons does not have preferences to edit" );
#			$GLOBALS['zariliaLogger']->sysRender();
#            zarilia_cp_footer();
#            exit();
#        }

        $addon = &$addon_handler->get( $mod );
        $mod_dirname = $addon->getVar( 'dirname' );
        // if has comments feature, need comment lang file
        if ( $addon->getVar( 'hascomments' ) == 1 ) {
            include_once ZAR_ROOT_PATH . '/language/' . $zariliaConfig['language'] . '/comment.php';
        }
        // RMV-NOTIFY
        // if has notification feature, need notification lang file
        if ( $addon->getVar( 'hasnotification' ) == 1 ) {
            include_once ZAR_ROOT_PATH . '/language/' . $zariliaConfig['language'] . '/notifications.php';
        }

        $form = new ZariliaThemeForm( $addon->getVar( 'name' ) . " " . _MD_AM_MODCONFIG, 'pref_form', $addonversion['adminpath'] );
        if ( $addon->getInfo( 'adminindex' ) ) {
            $form->addElement( new ZariliaFormHidden( 'redirect', ZAR_URL . '/addons/' . $mod_dirname . '/' . $addon->getInfo( 'adminindex' ) ) );
        }

		require_once "functions.php";
        foreach ( $configs as $config ) {
            $title = constant( $config->getVar( 'conf_title' ) );
            $desc = ( $config->getVar( 'conf_desc' ) ) ? constant( $config->getVar( 'conf_desc' ) ) : '';
            $hidden = new ZariliaFormHidden( 'conf_ids[]', $config->getVar( 'conf_id' ) );
            $form->addElement( showfield( $form, $addon_handler, $config_handler, $config->getVar( 'conf_formtype' ), $title, $config->getVar( 'conf_name' ), $config->getConfValueForOutput(), $config->getVar( 'conf_valuetype' ), $config->getVar( 'conf_id' ), $config->getVar( 'conf_value' ), $desc ) );
            $form->addElement( $hidden );
            unset( $ele );
            unset( $hidden );
        }
        $form->addElement( new ZariliaFormHidden( 'op', 'save' ) );
        $form->addElement( new ZariliaFormButton( '', 'button', _GO, 'submit' ) );
        /*
		*
		*/
        zarilia_cp_header();
        $form->display();
        break;

    case 'show':

		$time = microtime();

        $confcat_handler = &zarilia_gethandler( 'configcategory' );
        $config_handler = &zarilia_gethandler( 'config' );

        $confcat = &$confcat_handler->get( $confcat_id );
        $criteria = new CriteriaCompo();
        $criteria->add( new Criteria( 'conf_modid', 0 ) );
        $criteria->add( new Criteria( 'conf_catid', $confcat_id ) );
        $criteria->add( new Criteria( 'conf_sectid', $conf_sectid ) );
        $criteria->setSort( 'conf_order' );
        $configs = &$config_handler->getConfigs( $criteria );

		zarilia_cp_header();
		require_once ZAR_CONTROLS_PATH.'/form/control.class.php';
		$form = new ZariliaControl_Form();
		foreach ( $configs as $config ) {
			switch ($config->getVar( 'conf_formtype' )) {
				case 'textbox':
					$form->addField('text',$config->getVar( 'conf_id' ), $config->getVar( 'conf_value' ),constant( $config->getVar( 'conf_title' ) ));
				break;
				case 'startpage':
					$criteria = new CriteriaCompo( new Criteria( 'hasmain', 1 ) );
		            $criteria->add( new Criteria( 'isactive', 1 ) );
				    $addonslist = &$addon_handler->getList( $criteria, true );					
					$form->addField('listfromarray',$config->getVar( 'conf_id' ), $config->getVar( 'conf_value' ),constant( $config->getVar( 'conf_title' ) ), $addonslist);
				break;
				case 'yesno':
				case 'textarea':
				case 'text':
					$form->addField($config->getVar( 'conf_formtype' ),$config->getVar( 'conf_id' ), $config->getVar( 'conf_value' ),constant( $config->getVar( 'conf_title' ) ));
				break;				
				case 'site_cache';
					$data = array( '0' => _NOCACHE, '30' => sprintf( _SECONDS, 30 ), '60' => _MINUTE, '300' => sprintf( _MINUTES, 5 ), '1800' => sprintf( _MINUTES, 30 ), '3600' => _HOUR, '18000' => sprintf( _HOURS, 5 ), '86400' => _DAY, '259200' => sprintf( _DAYS, 3 ), '604800' => _WEEK );
					$form->addField('listfromarray',$config->getVar( 'conf_id' ), $config->getVar( 'conf_value' ),constant( $config->getVar( 'conf_title' ) ), $data);
				break;
		        case 'tplset':
		            $tplset_handler = &zarilia_gethandler( 'tplset' );
		            $tplsetlist = &$tplset_handler->getList();
		            asort( $tplsetlist );
					$form->addField('listfromarray',$config->getVar( 'conf_id' ), $config->getVar( 'conf_value' ),constant( $config->getVar( 'conf_title' ) ), $tplsetlist);
			    break;
				case 'theme':
		        case 'theme_multi':
		            $handle = opendir( ZAR_THEME_PATH . '/' );
				    $dirlist = array();
		            while ( false !== ( $file = readdir( $handle ) ) ) {
				        if ( is_dir( ZAR_THEME_PATH . '/' . $file ) && !preg_match( "/^[.]{1,2}$/", $file ) && strtolower( $file ) != 'cvs' ) {
						    $dirlist[$file] = $file;
		                }
				    }
		            closedir( $handle );
				    if ( !empty( $dirlist ) ) asort( $dirlist );
					$form->addField('listfromarray',$config->getVar( 'conf_id' ), $config->getVar( 'conf_value' ),constant( $config->getVar( 'conf_title' ) ), $dirlist);
//		            $form->addElement( new ZariliaFormHidden( '_old_theme', $value ) );
			    break;
				case 'select':
					$form->addField('listfromtdb',$config->getVar( 'conf_name' ), $config->getVar( 'conf_value' ),constant( $config->getVar( 'conf_title' ) ));
				break;
				case 'editor_multi':
				case 'editor':
					$editor_handler = &zarilia_gethandler( "editor" );
					$noHtml = true;
//			        if ( $isAdmin == true ) {
						$_array = $editor_handler->getList( $noHtml );
	//		        } else {
	//					$_array = $zariliaConfig['user_select'];
	//		        } 
					$form->addField('listfromarray',$config->getVar( 'conf_id' ), $config->getVar( 'conf_value' ),constant( $config->getVar( 'conf_title' ) ), $_array);
				break;
				case 'group_multi':
					$member_handler = &zarilia_gethandler( 'member' );
//			        if ( $addempty != 0 ) {
//						$this->addOption( -1, 'No Selection' );
//			        }
//			        if ( !$include_anon ) {
						$criteria = new CriteriaCompo();
			            $criteria->add( new Criteria( 'groupid', ZAR_GROUP_ANONYMOUS, '!=' ) );
			            $criteria->add( new Criteria( 'groupid', ZAR_GROUP_BANNED, '!=' ) );
						$data = $member_handler->getGroupList( $criteria );
//			        } else {
//						$data = $member_handler->getGroupList();
//			        }
					$form->addField('listfromarray',$config->getVar( 'conf_id' ), $config->getVar( 'conf_value' ),constant( $config->getVar( 'conf_title' ) ), $data);
				break;
				case 'addon_cache':
				    $addons = &$addon_handler->getObjects( new Criteria( 'hasmain', 1 ), true );
		            $currrent_val = $value;
				    $cache_options = array( '0' => _NOCACHE, '30' => sprintf( _SECONDS, 30 ), '60' => _MINUTE, '300' => sprintf( _MINUTES, 5 ), '1800' => sprintf( _MINUTES, 30 ), '3600' => _HOUR, '18000' => sprintf( _HOURS, 5 ), '86400' => _DAY, '259200' => sprintf( _DAYS, 3 ), '604800' => _WEEK );
		            if ( count( $addons ) > 0 ) {
				        $ele = new ZariliaFormElementTray( $title, '<br /> ' );
						foreach ( array_keys( $addons ) as $mid ) {
		                    $c_val = isset( $currrent_val[$mid] ) ? intval( $currrent_val[$mid] ) : null;
				            $selform = new ZariliaFormSelect( $addons[$mid]->getVar( 'name' ) . ": ", $name . "[$mid]", $c_val );
						    $selform->addOptionArray( $cache_options );
		                    $ele->addElement( $selform );
		                    unset( $selform );
		                }
				    } else {
						$ele = new ZariliaFormLabel( $title, _MD_AM_NOADDON );
		            }
				    $ele->setMultiChange();
				break;
				default:
					var_dump($config->getVar( 'conf_formtype' ));
				break;
			}
		}
		echo $form->render();
		var_dump(abs(microtime() - $time));
		break;	

        /*
        * form
        */
        $form = new ZariliaThemeForm( constant( $confcat->getVar( 'confcat_name' ) ), 'pref_form', $addonversion['adminpath'] );
        require_once "functions.php";
        foreach ( $configs as $config ) {
            $title = constant( $config->getVar( 'conf_title' ) );
            $desc = ( $config->getVar( 'conf_desc' ) ) ? constant( $config->getVar( 'conf_desc' ) ) : '';
            $hidden = new ZariliaFormHidden( 'conf_ids[]', $config->getVar( 'conf_id' ) );
            $form->addElement( showfield( $form, $addon_handler, $config_handler, $config->getVar( 'conf_formtype' ), $title, $config->getVar( 'conf_name' ), $config->getConfValueForOutput(), $config->getVar( 'conf_valuetype' ), $config->getVar( 'conf_id' ), $config->getVar( 'conf_value' ), $desc ) );
            $form->addElement( $hidden );
            unset( $ele );
            unset( $hidden );
        }

        $form->addElement( new ZariliaFormHidden( 'op', 'save' ) );
        $form->addElement( new ZariliaFormHidden( 'confcat_id ', $confcat_id ) );
        $button_tray = new ZariliaFormElementTray( '', '' );
        $button_tray->addElement( new ZariliaFormButton( '', 'cancel', _CANCEL, 'button', 'onClick="history.go(-1);return true;"' ) );
        $button_tray->addElement( new ZariliaFormButton( '', 'reset', _RESET, 'reset' ) );
        $button_tray->addElement( new ZariliaFormButton( '', 'submit', _SUBMIT, 'submit' ) );
        $form->addElement( $button_tray );
        /*
		*
		*/
        zarilia_cp_header();
        $form->display();
		var_dump(abs(microtime() - $time));
        break;

    case 'save':
        require_once( ZAR_ROOT_PATH . '/class/template.php' );
        $zariliaTpl = new ZariliaTpl();
        $zariliaTpl->clear_all_cache();

        $count = count( $_REQUEST['conf_ids'] );
        $tpl_updated = false;
        $theme_updated = false;
        $startmod_updated = false;
        $lang_updated = false;

        $member_handler = &zarilia_gethandler( 'member' );
        $tplfile_handler = &zarilia_gethandler( 'tplfile' );
        $image_handler = &zarilia_gethandler( 'imagesetimg' );
        $addonperm_handler = &zarilia_gethandler( 'groupperm' );

        if ( $count > 0 ) {
            for ( $i = 0; $i < $count; $i++ ) {
                $config = &$config_handler->getConfig( $_REQUEST['conf_ids'][$i] );
                $new_value = &$_REQUEST[$config->getVar( 'conf_name' )];
                if ( is_array( $new_value ) || $new_value != $config->getVar( 'conf_value' ) ) {
                    // if language has been changed
                    if ( !$lang_updated && $config->getVar( 'conf_catid' ) == ZAR_CONF && $config->getVar( 'conf_name' ) == 'language' ) {
                        $zariliaConfig['language'] = ${$config->getVar('conf_name')};
                        $lang_updated = true;
                    }
                    // if default theme has been changed
                    if ( !$theme_updated && $config->getVar( 'conf_catid' ) == ZAR_CONF && $config->getVar( 'conf_name' ) == 'theme_set' ) {
                        $member_handler->updateUsersByField( 'theme', ${$config->getVar('conf_name')} );
                        $theme_updated = true;
                    }
                    // if default template set has been changed
                    if ( !$tpl_updated && $config->getVar( 'conf_catid' ) == ZAR_CONF && $config->getVar( 'conf_name' ) == 'template_set' ) {
                        // clear cached/compiled files and regenerate them if default theme has been changed
                        if ( $zariliaConfig['template_set'] != ${$config->getVar('conf_name')} ) {
                            $newtplset = ${$config->getVar('conf_name')};
                            // clear all compiled and cachedfiles
                            $zariliaTpl->clear_compiled_tpl();
                            // generate compiled files for the new theme
                            // block files only for now..
                            $tplfile_handler = &zarilia_gethandler( 'tplfile' );
                            $dtemplates = &$tplfile_handler->find( 'default', 'block' );
                            $dcount = count( $dtemplates );
                            // need to do this to pass to zarilia_template_touch function
                            $GLOBALS['zariliaConfig']['template_set'] = $newtplset;

                            for ( $i = 0; $i < $dcount; $i++ ) {
                                $found = &$tplfile_handler->find( $newtplset, 'block', $dtemplates[$i]->getVar( 'tpl_refid' ), null );
                                if ( count( $found ) > 0 ) {
                                    // template for the new theme found, compile it
                                    zarilia_template_touch( $found[0]->getVar( 'tpl_id' ) );
                                } else {
                                    // not found, so compile 'default' template file
                                    zarilia_template_touch( $dtemplates[$i]->getVar( 'tpl_id' ) );
                                }
                            }
                            // generate image cache files from image binary data, save them under cache/
                            $imagefiles = &$image_handler->getObjects( new Criteria( 'tplset_name', $newtplset ), true );
                            foreach ( array_keys( $imagefiles ) as $i ) {
                                if ( !$fp = fopen( ZAR_CACHE_PATH . '/' . $newtplset . '_' . $imagefiles[$i]->getVar( 'imgsetimg_file' ), 'wb' ) ) {
                                } else {
                                    fwrite( $fp, $imagefiles[$i]->getVar( 'imgsetimg_body' ) );
                                    fclose( $fp );
                                }
                            }
                        }
                        $tpl_updated = true;
                    }
                    // add read permission for the start addon to all groups
                    if ( !$startmod_updated && $new_value != '--' && $config->getVar( 'conf_catid' ) == ZAR_CONF && $config->getVar( 'conf_name' ) == 'startpage' ) {
                        $groups = &$member_handler->getGroupList();
                        $addon = &$addon_handler->getByDirname( $new_value );
                        if ( is_object( $addon ) ) {
                            foreach ( $groups as $groupid => $groupname ) {
                                if ( !$addonperm_handler->checkRight( 'addon_read', $addon->getVar( 'mid' ), $groupid ) ) {
                                    $addonperm_handler->addRight( 'addon_read', $addon->getVar( 'mid' ), $groupid );
                                }
                            }
                        }
                        $startmod_updated = true;
                    }
                    $config->setConfValueForInput( $new_value );
                    $config_handler->insertConfig( $config );
                }
                unset( $new_value );
            }
        }
        if ( !empty( $use_mysession ) && $zariliaConfig['use_mysession'] == 0 && $session_name != '' ) {
            setcookie( $session_name, session_id(), time() + ( 60 * intval( $session_expire ) ), '/', '', 0 );
        }
        $redirect = ( isset( $redirect ) && $redirect != '' ) ? $redirect : "index.php";
        redirect_header( $redirect, 2, _DBUPDATED );
        break;

    case 'config':
    case 'default':
        $system = zarilia_cleanRequestVars( $_REQUEST, 'category', 'system' );
        include_once ZAR_ROOT_PATH . '/class/class.tlist.php';
        $confcat_handler = &zarilia_gethandler( 'configcategory' );
        $menu_config = &$confcat_handler->getCatConfigs( true );
        $tlist = new ZariliaTList();
        $tlist->AddHeader( '_MD_AM_NAME' );
        $tlist->AddHeader( '_MD_AM_DESCRIPTION' );
        foreach ( $menu_config as $v ) {
            $tlist->add(
                array( '_MD_AM_NAME' => "<a href=\"" . ZAR_URL . "/addons/system/index.php?fct=preferences&amp;op=show&confcat_id=" . $v->getVar( 'confcat_id' ) . "\">" . zarilia_constants( $v->getVar( 'confcat_name' ), '', '' ) . "</a>",
                    '_MD_AM_DESCRIPTION' => zarilia_constants( $v->getVar( 'confcat_name' ), '', '_DSC' )
                    ) );
        }
        zarilia_cp_header();
        $tlist->render();
        break;
} // switch
zarilia_cp_footer();

?>
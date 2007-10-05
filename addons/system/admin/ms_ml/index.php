<?php
// $lang_id: index.php,v 1.2 2006/09/05 09:56:28 mekdrop Exp $
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
if ( !is_object( $zariliaUser ) || !is_object( $zariliaAddon ) || !$zariliaUser->isAdmin( $zariliaAddon->getVar( 'mid' ) ) ) {
    exit( "Access Denied" );
}

if (!isset($op)) {
	$op = zarilia_cleanRequestVars( $_REQUEST, 'op', 'default', XOBJ_DTYPE_TXTBOX );
} else {
	require_once( 'admin_menu.php' );
	require_once ZAR_ROOT_PATH . '/class/class.menubar.php';
	include_once( 'vars.php' );
	include_once( 'functions.php' );
}

$type = zarilia_cleanRequestVars( $_REQUEST, 'type', '', XOBJ_DTYPE_TXTBOX );

switch ( $op ) {
    case 'maintenace':
        $act = zarilia_cleanRequestVars( $_REQUEST, 'act', '', XOBJ_DTYPE_TXTBOX );
        $ok = zarilia_cleanRequestVars( $_REQUEST, 'ok', 0 );
        switch ( $ok ) {
            case 0:
            default:
                zarilia_cp_header();
                $menu_handler->render( 1 );
                zarilia_confirm(
                    array( 'op' => 'maintenace',
                        'act' => $act,
                        'ok' => 1
                        ), $addonversion['adminpath'], sprintf( _MD_AD_DOTABLE, $act )
                    );
                break;
            case 1:
                $act = zarilia_cleanRequestVars( $_REQUEST, 'act', '', XOBJ_DTYPE_TXTBOX );
                if ( false == $content_handler->doDatabase( $act ) ) {
                    zarilia_cp_header();
                    $menu_handler->render( 0 );
                    $GLOBALS['zariliaLogger']->sysRender();
                    zarilia_cp_footer();
                    exit();
                }
                redirect_header( $addonversion['adminpath'], 1, sprintf( _MD_AD_DOTABLEFINSHED, $act ) );
                break;
        } // switch
        break;

    case 'help':
        zarilia_cp_header();
        $menu_handler->render( 0 );
        if ( file_exists( ZAR_ROOT_PATH . "/addons/system/admin/" . $fct . "/admin_help.php" ) ) {
            @include ZAR_ROOT_PATH . "/addons/system/admin/" . $fct . "/admin_help.php";
        }
        break;

    case 'about':
        zarilia_cp_header();
        $menu_handler->render( 3 );

        require_once( ZAR_ROOT_PATH . "/class/class.about.php" );
        $zarilia_about = new ZariliaAbout();
        $zarilia_about->display();
        break;

    case 'edit':
    case 'create':
        zarilia_cp_header();
        zarilia_admin_menu(
			_MD_AD_ACTION_BOX, array( $addonversion['adminpath'] . '&amp;op=edit' => _AM_MS_ML_ADD )
            );
        $menu_handler->render( 2 );

		require_once ZAR_CONTROLS_PATH.'/form/control.class.php';

 	    $id = zarilia_cleanRequestVars( $_REQUEST, 'item_id', '', XOBJ_DTYPE_TXTBOX );
		$sites = $zariliaSettings->readCat( $zariliaOption['globalconfig'], 'sites');

		$form = new ZariliaControl_Form('./addons/system/admin/ms_ml/index.php');
		$form->addField('hidden','id', $id);
		$form->addField('text',	'name', @$sites[$id][0], _MA_AD_NAME,  true);
		$form->addField('text',	'url', @$sites[$id][1], _MA_AD_URL,  true);
		$form->addField('text',	'prefix', @$sites[$id][2], _MA_AD_PREFIX, true);
		$form->addField('text',	'move_url', @$sites[$id][3], _MA_AD_MOVE_URL, false);		
		
		$form->addField('hidden', 'op', 'save');

		echo $form->render();
        break;

    case 'clone':
        $lang_id = zarilia_cleanRequestVars( $_REQUEST, 'lang_id', 0 );
        $isBase = ( isset( $type ) && $type == 'ext' ) ? false : true;
        $_xlang_obj = $xlanguage_handler->get( $lang_id, $isBase );
        print_r_html( $_xlang_obj );
        $_xlang_obj->setVar( 'lang_id', '' );
        $_xlang_obj->setVar( 'lang_name', $_xlang_obj->getVar( 'lang_name' ) . '_cloned' );
        $_xlang_obj->setNew();
        if ( !$xlanguage_handler->insert( $_xlang_obj, false ) ) {
            $GLOBALS['zariliaLogger']->setSysError( E_USER_ERROR, sprintf( _FAILSAVEIMG, $_xlang_obj->getVar( 'lang_name' ) ) );
        }
        /**
         */
        if ( $GLOBALS['zariliaLogger']->getSysErrorCount() ) {
            zarilia_cp_header();
            $menu_handler->render( 1 );
            $GLOBALS['zariliaLogger']->sysRender();
        } else {
            redirect_header( $addonversion['adminpath'] . '&amp;op=list', 1, _DBUPDATED );
        }
        break;

    case 'save':

		global $zariliaSettings;

        $name = zarilia_cleanRequestVars( $_REQUEST, 'name', '', XOBJ_DTYPE_TXTBOX );
        $url = zarilia_cleanRequestVars( $_REQUEST, 'url', '', XOBJ_DTYPE_TXTBOX );
        $prefix = zarilia_cleanRequestVars( $_REQUEST, 'prefix', '', XOBJ_DTYPE_TXTBOX );
        $murl = zarilia_cleanRequestVars( $_REQUEST, 'move_url', '', XOBJ_DTYPE_TXTBOX );
        $id = zarilia_cleanRequestVars( $_REQUEST, 'id', 0 );

		if (!($id===0)) {
			$zariliaSettings->remove($zariliaOption['globalconfig'], 'sites', $id);
			$isNew = true;
		}
		$zariliaSettings->write($zariliaOption['globalconfig'], 'sites', $name, array('url'=>$url,'prefix'=>$prefix,'move_url'=>$murl));

        if ( $GLOBALS['zariliaLogger']->getSysErrorCount() ) {
            zarilia_cp_header();
            $menu_handler->render( 1 );
            $GLOBALS['zariliaLogger']->sysRender();
        } else {
            return redirect_header( $addonversion['adminpath'] . '&amp;op=list', 1, ( isset($isNew) ) ? _DBCREATED : _DBUPDATED );
        }
        break;   
    case 'delete':
        $lang_id = zarilia_cleanRequestVars( $_REQUEST, 'lang_id', 0 );
        echo $lang_id;
        $ok = zarilia_cleanRequestVars( $_REQUEST, 'ok', 0 );
        $isBase = ( isset( $type ) && $type == 'ext' ) ? false : true;
        $_xlang_obj = $xlanguage_handler->get( $lang_id, $isBase );
        if ( !is_object( $_xlang_obj ) ) {
            zarilia_cp_header();
            $menu_handler->render( 1 );
            $GLOBALS['zariliaLogger']->sysRender();
            zarilia_cp_footer();
            exit();
        }

        switch ( $ok ) {
            case 0:
            default:
                zarilia_cp_header();
                $menu_handler->render( 1 );
                zarilia_confirm(
                    array( 'op' => 'delete',
                        'lang_id' => $_xlang_obj->getVar( 'lang_id' ),
                        'ok' => 1
                        ), $addonversion['adminpath'], sprintf( _MD_AM_WAYSYWTDTR, $_xlang_obj->getVar( 'lang_name' ) )
                    );
                break;
            case 1:
                $xlanguage_handler->delete( $_xlang_obj );
                if ( $GLOBALS['zariliaLogger']->getSysErrorCount() ) {
                    zarilia_cp_header();
                    $menu_handler->render( 1 );
                                $GLOBALS['zariliaLogger']->sysRender();
                    zarilia_cp_footer();
                    exit();
                } else {
                    redirect_header( $addonversion['adminpath'] . "&amp;op=list", 1, _DBUPDATED );
                }
                break;
        } // switch
        break;

    case 'list':

		$sites = &$zariliaSettings->readCat( $zariliaOption['globalconfig'], 'sites');

//        require_once ZAR_ROOT_PATH . '/class/class.tlist.php';

        /*
        * required for Navigation
        */
	    $nav['start'] = zarilia_cleanRequestVars( $_REQUEST, 'start', 0 );
        $nav['sort'] = zarilia_cleanRequestVars( $_REQUEST, 'sort', 'lang_id' );
        $nav['order'] = zarilia_cleanRequestVars( $_REQUEST, 'order', 'ASC', XOBJ_DTYPE_TXTBOX );
        $nav['limit'] = zarilia_cleanRequestVars( $_REQUEST, 'limit', 10 );

        $display = zarilia_cleanRequestVars( $_REQUEST, 'display', 3 );
        $display_array = array( '3' => _MD_AD_SHOWALL_BOX, '0' => _MD_AD_SHOWHIDDEN_BOX, '1' => _MD_AD_SHOWVISIBLE_BOX );
        $list_array = array( 5 => "5", 10 => "10", 15 => "15", 25 => "25", 50 => "50" );
        $form = "<div style='padding-bottom: 5px;'>" . _MD_AD_DISPLAYAMOUNT_BOX . "</div><div style='padding-bottom: 5px;'>" . zarilia_getSelection( $list_array, $nav['limit'], "limit", 1, 0, false, false, "onchange=\"location='" . ZAR_URL . "/addons/system/" . $addonversion['adminpath'] . "&amp;op=list&amp;display=" . $display . "&amp;limit='+this.options[this.selectedIndex].value\"" , 0, false ) . "</div>";

        zarilia_cp_header();
        $menu_handler->render( 1 );
        zarilia_admin_menu(
			_MD_AD_ACTION_BOX, array( $addonversion['adminpath'] . '&amp;op=edit' => _AM_MS_ML_ADD ),
            _MD_AD_FILTER_BOX
            );

		require_once ZAR_CONTROLS_PATH.'/tlist/control.class.php';
        $tlist = new ZariliaControl_TList();
        $tlist->AddHeader( 'name', '5%', 'center', false );
        $tlist->AddHeader( 'url', '25%', 'left', true );
        $tlist->AddHeader( 'prefix', '', 'left', true );
        $tlist->AddHeader( 'move_url', '', 'left', true );
        $tlist->AddHeader( 'ACTION', '', 'center', false );
        $tlist->AddFormStart( 'post', $addonversion['adminpath'] . '&amp;op=' . $op, 'multilanguage' );
        $tlist->addFooter();
        $tlist->setPath( 'op=' . $op );



//		$config = &$zariliaSettings->readAll($zariliaOption['localconfig']);

        $button = array( 'edit', 'delete', 'clone' );
        foreach ( $sites as $lang_name => $site ) {
			  $id = rawurlencode($lang_name);
              $buttons = "<a href='" . $addonversion['adminpath'] . "&amp;op=edit&amp;type=base&amp;item_id=" . $id . "'>" . zarilia_img_show( 'edit', _EDIT ) . "</a><a href='" . $addonversion['adminpath'] . "&amp;op=delete&amp;type=base&amp;item_id=" . $id . "'>" . zarilia_img_show( 'delete', _DELETE ) . "</a><a href='" . $addonversion['adminpath'] . "&amp;op=clone&amp;type=base&amp;item_id=" . $id . "'>" . zarilia_img_show( 'clone', _CLONE ) . "</a>";
              $tlist->add(
                    array( $lang_name,
                        @$site[ 'url' ],
                        @$site[ 'prefix' ],
						@$site[ 'move_url' ],
                        $buttons
                        ) );
        }

//		require_once ZAR_CONTROLS_PATH.'/tree/control.class.php';

//		$sites = array_keys($zariliaSettings->readCat( $zariliaOption['globalconfig'], 'sites'));
//		$sites['default'] = ;

/*		$icon = 'folder.gif';
		$tree  = new ZariliaControl_Tree("menuLayer", ZAR_CONTROLS_URL.'/tree/images/', '_self');
		foreach ($sites as $name => $languages) {
			$tree->add($name, null, $icon);
		}
//		$node0 = &$tree->add('INBOX','',$icon,true,false);
//		$node0->add('file');
		$tree->render();*/

        $tlist->render();
        zarilia_cp_legend( $button );
//        zarilia_pagnav( $_xlang_obj['count'], $nav['limit'], $nav['start'], 'start', 1, $addonversion['adminpath'] . '&amp;op=' . $op );
        break;

    case 'index':
    case 'default':
        zarilia_cp_header();
        $menu_handler->render( 0 );
        zarilia_admin_menu( _MD_AD_ACTION_BOX, array( $addonversion['adminpath'] . '&amp;op=edit&type=base' => _AM_XLANG_ADDBASE, $addonversion['adminpath'] . '&amp;op=edit&type=ext' => _AM_XLANG_ADDEXT ) );
        break;
}
zarilia_cp_footer();

?>
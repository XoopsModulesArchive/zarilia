<?php
/**
 * $Id: regform_newuser.php,v 1.1 2007/04/21 09:45:41 catzwolf Exp $ Untitled 1.php v0.0 14/04/2007 05:47:43 John
 *
 * @Zarilia - 	PHP Content Management System
 * @copyright 2007 Zarilia
 * @Author : 	John (AKA Catzwolf)
 * @URL : 		http://zarilia.com
 * @Project :	Zarilia CMS
 */

require( ZAR_ROOT_PATH . '/class/captcha/php-captcha.inc.php' );
if ( !PhpCaptcha::Validate( $_POST['captacha'] ) ) {
    $content['form'] = array( 'register_form', array( 'title' => 'Error' ) );
    $content['file'] = 'newuser';
    $content['content'] = 'Captcha Not found';
    $this->addOptions(
        array( 'title' => _US_REGCOPPA,
            'subtitle' => _US_REGCOPPA_DSC,
            'content' => $content
            )
        );
    return true;
}

?>
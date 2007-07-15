<?php
if (!function_exists('zarilia_cleanRequestVars') && defined(ZAR_INSTALL) ) {
	header('location: ./install');
	die();
}
?>
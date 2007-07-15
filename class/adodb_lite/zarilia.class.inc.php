<?php

class ZariliaDatabaseExtention {

   /**
     * ZariliaDatabaseExtention::setPrefix()
     *
     * @param mixed $value
     * @return
     */
    function setPrefix( $value ) {
         $this->prefix = $value;
    }


    /**
     * ZariliaDatabaseExtention::prefix()
     *
     * @param string $tablename
     * @return
     */
     function prefix( $tablename = '' ) {
         return ( $tablename ) ? ZAR_DB_PREFIX . "_$tablename" : ZAR_DB_PREFIX;
     }

	 function errno() {}
	 function error() {}

}

class ZariliaDatabaseFactory {

	function &getDatabaseConnection() {
		static $db =  null;
		if (!$db) {
            require_once ZAR_ROOT_PATH . '/class/adodb_lite/adodb.inc.php';
			$db = ADONewConnection(ZAR_DB_TYPE);
			if ( !($result = $db->Connect(ZAR_DB_HOST, ZAR_DB_USER, ZAR_DB_PASS, ZAR_DB_NAME)) ) {
			    trigger_error( "Database error: could not connect", E_USER_ERROR );
			}
		}
		return $db;
	}

}

?>
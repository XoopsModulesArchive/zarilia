<?php exit(); ?>
return 
array(
  'tables.global' => array( 'users'),
  'tables.multisite' => array( 'configoption','config','events','group_permission','groups','groups_users_link', 'language_base','language_ext','addons',	  'newblocks', 'online', 'tplfile', 'tplset', 'tplsource' ),
  'db' => array ( 'type' => 'mysql','prefix' => 'perchatenpo',   'host' => 'localhost',    'user' => 'root',	'pass' => '',	'name' => 'zarilia',	    'pconnect' => '0'  ),
  'path' =>   array ( 'root' => 'C:/PHPLearnWAMP/Apache2/htdocs/zarilia',	 'check' => 1  ),
  'groups' =>   array (	1 => 'ADMIN',    2 => 'USERS',    3 => 'ANONYMOUS',    4 => 'MODERATORS',    5 => 'SUBMITTERS',	    6 => 'SUBSCRIPTION',		7 => 'BANNED'	  ),
  'sites' => array()
);
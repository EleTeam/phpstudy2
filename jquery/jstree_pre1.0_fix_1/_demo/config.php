<?php
// Database config & class
$db_config = array(
	"servername"=> "localhost",
	"username"	=> "phpstudy",
	"password"	=> "123456",
	"database"	=> "phpstudy",
);
if(extension_loaded("mysqli")) require_once("_inc/class._database_i.php"); 
else require_once("_inc/class._database.php"); 

// Tree class
require_once("_inc/class.tree.php"); 
?>
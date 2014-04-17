<?php
/** 
* Attepmts to connect to the specified database, if it fails it kicks back an error. 
* If developing on localhost set host to 127.0.0.1, if it is set to "localhost" it can take
* an excessive amount on time to resolve the host.
* set mysql:host=host; dbname=database name; username and password
**/
try {
	$db = new PDO("mysql:host=;dbname=;","username","password");
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$db->exec("SET NAMES 'utf8'");
} catch (Exception $e) {
	echo "There was a problem connecting to the database";
	exit;
}
	
?>
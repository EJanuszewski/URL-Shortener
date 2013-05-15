<?php
	// Database credentials
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'YOURPASSWORD');
	define('DB_NAME', 'urlshortener');
	define('DB_TYPE', 'mysql');
	
	// Available tables
	define('TBL_URL', 'url');
	
	$db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASSWORD);
	$db->query("USE ".TBL_URL);
	// Miscellaneous
	define('DEFAULT_HASH_LENGTH', 6);	
?>

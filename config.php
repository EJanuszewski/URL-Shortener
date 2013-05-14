<?php
class Config {
	public function config() {
		$host = "localhost"; //Database host
		$user = "root"; //Database user
		$password = "YOURPASSWORD"; //Database password
		$name = "urlshortener"; //Database name to store data
		$table = "url"; //Database table name
		//Connect to database
		$db = new PDO('mysql:host='.$host.';dbname='.$name,$user,$password);
		if(!defined("DEFAULT_HASH_LENGTH")) define("DEFAULT_HASH_LENGTH",10);
		if(!defined("TABLE")) define("TABLE",$table);
		return $db;
	}
}
?>
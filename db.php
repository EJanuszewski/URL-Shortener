<?php
$user = "admin";
$password = "";
//Connect to database
mysql_connect("localhost",$user,$password);
mysql_select_db("urlshortener");

class HashUtil {
	//Generates a url hash
	public function hashLoop() {
		while(strlen($returnHash) < 5) {
			$returnHash .= $chars[rand(0,count($chars)-1)];
		}
	}
	//Creates a hash
	public function createHash($url) {
		$chars = range("a","Z");
		hashLoop();
		}
	//	$num = mysql_num_rows(mysql_query("SELECT `hash` FROM `url` WHERE `hash` = '".$returnHash."'"));
	//	if ($num == 0) { echo $returnHash;} else {hashLoop();}
		echo $returnHash;

	public function redirectURL($url) {
	//Redirect to the intended url

	}
}
?>
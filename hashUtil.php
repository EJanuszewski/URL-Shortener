<?php

class HashUtil {
	//Generates a url hash
	private static function hashLoop() {
		$returnHash = "";
		$chars = range("a","z");
		while(strlen($returnHash) < 5) {
			$returnHash .= $chars[rand(0,count($chars)-1)];
		}
		echo $returnHash;
	}
	//Creates a hash
	public function createHash($url) {
		self::hashLoop();
	}
	//	$num = mysql_num_rows(mysql_query("SELECT `hash` FROM `url` WHERE `hash` = '".$returnHash."'"));
	//	if ($num == 0) { echo $returnHash;} else {hashLoop();}

	public function redirectURL($url) {
	//Redirect to the intended url

	}
}

?>
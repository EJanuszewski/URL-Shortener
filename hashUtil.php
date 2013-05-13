<?php

class HashUtil {
	//Creates a hash
	public function createHash($url, $length) {
		$returnHash = "";
		$chars = range("a","z");
		while(strlen($returnHash) < $length) {
			$returnHash .= $chars[rand(0,count($chars)-1)];
		}
		return $returnHash;
	}
	//	$num = mysql_num_rows(mysql_query("SELECT `hash` FROM `url` WHERE `hash` = '".$returnHash."'"));
	//	if ($num == 0) { echo $returnHash;} else {hashLoop();}

	public function redirectURL($url) {
	//Redirect to the intended url

	}
}

?>
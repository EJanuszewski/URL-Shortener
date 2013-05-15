<?php
class hashUtil {
	//Creates a hash
	public function createHash($vars, $db, $returnHash = "") {
		$returnHash = self::hashLoop();
		$r = $db->query("SELECT COUNT(*) AS num FROM `".TBL_URL."` WHERE `hash` = '".$returnHash."'");
		$rArr = $r->fetchAll();
		if($rArr[0]['num'] > 0) {
			$returnHash = self::hashLoop();
		} else {
			$q = "INSERT INTO `".TBL_URL."` (`hash`,`url`,`author`) VALUES ('".$returnHash."','".$vars['url']."','".$vars['url']."')";
			$db->query($q);
		}
			return $returnHash;
	}

	//Creates a hash and returns it
	private function hashLoop($returnHash = "") {
		$c = str_split(HASH_CHARACTERS);
		//Generate a hash as long as the specified length
		while(strlen($returnHash) < DEFAULT_HASH_LENGTH) {
			$returnHash .= $c[rand(0,count($c)-1)];
		}
		return $returnHash;
	}
	public function redirectURL($hash, $db) {
	//Redirect to the intended url
		$q = $db->query("SELECT `url` FROM `".TBL_URL."` WHERE `hash` = '".$hash."' LIMIT 1");
		while($row = $q->fetch()) {
			$u = $row['url'];
		}
		//Parse the url to check if it has http://
		$pU = parse_url($u);
		if(empty($pU['scheme'])) $u = "http://$u";
		//Add a hit into the database
		$db->query("UPDATE `".TBL_URL."` SET `count` = `count`+1 WHERE `hash` = '".$hash."'");
		//Redirect to the full URL
		header("Location:".$u);	
	}
}

?>
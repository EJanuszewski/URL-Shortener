<?php
class hashUtil {
	//Creates a hash
	public function createHash($url, $author, $length, $db) {
		$returnHash = "";
		$returnHash = self::hashLoop($length);
		mysql_select_db(TABLE);
		$r = $db->query("SELECT COUNT(*) AS num FROM `".TABLE."` WHERE `hash` = '".$returnHash."'");
		$rArr = $r->fetchAll();
		if($rArr[0]['num'] > 0) {
			$returnHash = self::hashLoop($length);
		} else {
			$q = "INSERT INTO `".TABLE."` (`hash`,`url`,`author`) VALUES ('".$returnHash."','".$url."','".$author."')";
			$db->query($q);
		}
			return $returnHash;
	}

	//Creates a hash and returns it
	private function hashLoop($length) {
		$chars = array_merge(range("a","z"),range(0,9));
		$returnHash = "";
		while(strlen($returnHash) < $length) {
			$returnHash .= $chars[rand(0,count($chars)-1)];

		}
		return $returnHash;
	}
	public function redirectURL($hash, $db) {
	//Redirect to the intended url
		$q = $db->query("SELECT `url` FROM `".TABLE."` WHERE `hash` = '".$hash."' LIMIT 1");
		while($row = $q->fetch()) {
			$u = $row['url'];
		}
		//Parse the url to check if it has http://
		$pU = parse_url($u);
		if(empty($pU['scheme'])) $u = "http://$u";
		//Add a hit into the database
		$db->query("UPDATE `".TABLE."` SET `count` = `count`+1 WHERE `hash` = '".$hash."'");
		//Redirect to the full URL
		header("Location:".$pU);	
	}
}

?>
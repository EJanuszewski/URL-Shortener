<?php
/*
Plugin Name: URL Shortener
Plugin URI: http://www.ejanuszewski.com
Description: Creates shortened url with the domain of your choice and places under the permalink
Version: 0.1
Author: Edward Januszewski
Author URI: http://www.ejanuszewski.com
License: GPL2
*/
/*  Copyright 2013 Edward Januszewski  (email : e.januszewski@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
error_reporting(E_ALL);

//Connect to database
mysql_connect("localhost","admin","");
mysql_select_db("urlshortener");
class HashUtil {
	//Generates a url hash
	public function hashLoop() {
		while(strlen($returnHash) < 5) {
			$returnHash .= $chars[rand(0,count($chars)-1)];
		}
	}

}
function createHash($url) {
	$chars = range("a","Z");
	hashLoop();
	}
//	$num = mysql_num_rows(mysql_query("SELECT `hash` FROM `url` WHERE `hash` = '".$returnHash."'"));
//	if ($num == 0) { echo $returnHash;} else {hashLoop();}
	echo $returnHash;

function redirectURL($url) {
	

}
createHash("someurl.com");

?>
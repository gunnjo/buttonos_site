<?php defined('SYSPATH') or die('No direct script access.');

// Parsing the ID info is considered an expensive operation.
//	All public functions should test if it has been already set...
//	It doesn't change during the life of the BOS machine... hopefully!
class Boscookie {
	private static $uid;

	public static function getnodeid() {
		if (self::$uid === NULL ) {
			self::$uid = self::vuid();
		}
		return(isset(self::$uid['node']) ? self::$uid['node'] : NULL);
	}

	public static function getnodetime() {
		if (self::$uid === NULL ) {
			self::$uid = self::vuid();
		}
		return(isset(self::$uid['time']) ? self::$uid['time'] : NULL);
	}


	public static function getnodeclock() {
		if (self::$uid === NULL ) {
			self::$uid = self::vuid();
		}
		return(isset(self::$uid['clock']) ? self::$uid['clock'] : NULL);
	}

	private static function vuid() {
		if ( isset($_COOKIE['id']) ) {
			if (preg_match("/^[0-9a-f]{8}(-[0-9a-f]{4}){3}-[0-9a-f]{12}$/", $_COOKIE['id'])) {
				return self::wuid($_COOKIE['id']);
			}
		}
		return array();	// Didn't work. don't try again!
	}

	// Use system uuid program to get a translation of a uuid
	private static function wuid($u) {
		$r = null;
		$cmd = "uuid -d ".$u;

		if ( ($fh = popen($cmd, 'r')) === null )
			die("Open failed: ${php_errormsg}\n");

		while (!feof($fh)) {
			$s = fgets($fh, 1024);
			if ( preg_match("/time:\s(.*)/", $s, $m) ) {
				$r['time'] = $m[1];
			} else if ( preg_match("/node:\s.*([0-9a-f]{2}(:[0-9a-f]{2}){5})\s/", $s, $m) ) {
				$r['node'] = $m[1];
			} else if ( preg_match("/clock:\s(\d+)/", $s, $m) ) {
				$r['clock'] = $m[1];
			}
		}
		pclose($fh);
		return($r);
	}
}

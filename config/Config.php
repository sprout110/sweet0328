<?php
class Config {
	//const BASE_URL = "/";
	
	private static $baseUrl;
	
	private function __construct() {
	}

	private static function checkBaseUrl() {
		if(!isset(self::$baseUrl))
		{
			//echo "->";
			echo "\$_SERVER['REQUEST_URI']:" . $_SERVER['REQUEST_URI'] . "<br />";
			//echo "<-";
			
			$Y = strpos(strtolower($_SERVER['REQUEST_URI']), "sweet0328");
			
			if(gettype($Y) <> "integer")
				self::$baseUrl = "/";
			else
				 self::$baseUrl = "/sweet0328/";
		}
	}
	
	public static function getBASE_URL() {
		//echo $_SERVER['PHP_SELF'];
		//echo $_SERVER['REQUEST_URI'];
		
		self::checkBaseUrl();
		if(isset(self::$baseUrl)){
			return self::$baseUrl;
		} else {
			return null;
		}
	}
}



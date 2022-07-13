<?php
class Config {
	//const BASE_URL = "/";
	private static $products;
	private static $market;
	private static $baseUrl;
	
	private function __construct() {
	}

	private static function check() {
		if(!isset(self::$baseUrl))
		{
			//echo "->";
			//echo "\$_SERVER['REQUEST_URI']:" . $_SERVER['REQUEST_URI'] . "<br />";
			//echo "<-";
			
			/*
			$Y = strpos(strtolower($_SERVER['REQUEST_URI']), "sweet0328");
			
			if(gettype($Y) <> "integer")
				self::$baseUrl = "/";
			else
				 self::$baseUrl = "/sweet0328/";
			*/
			self::$baseUrl = $_SERVER['REQUEST_URI'];
		}
		
		if(!isset(self::$market)) {
			$market_dir = dirname(dirname(__FILE__)) . '/upload/';
			
			// 檢查檔案是否存在
			$year = date("Y");
			self::$market = $market_dir . "Market" . $year . ".json";

			while(!file_exists(self::$market) and $year >= 2022)
			{
				//echo self::$market . "不存在" . "<br />";
				self::$market = $market_dir . "Market" . --$year . ".json";
			}
					
			echo "上架檔" . self::$market . "<br />";
		}
		
		if(!isset(self::$products)) {
			self::$products = dirname(dirname(__FILE__)) . '/upload/Products.json';
		}
	}
	
	public static function getBASE_URL() {
		self::check();
		if(isset(self::$baseUrl)){
			return self::$baseUrl;
		} else {
			return null;
		}
	}
	
	public static function getMarket() {
		self::check();
		if(isset(self::$market)){
			return self::$market;
		} else {
			return null;
		}
	}
	
	public static function setMarket() {
		self::check();
		if(isset(self::$market)){
			return self::$market;
		} else {
			return null;
		}
	}
	
	public static function getProducts() {
		self::check();
		if(isset(self::$products)){
			return self::$products;
		} else {
			return null;
		}
	}
}

?>


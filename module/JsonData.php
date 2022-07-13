<?php

class JsonData {

    private static $instance;

    private function __construct() {

    }

    private static function checkInstance() {
      if(!isset(self::$instance))
      {
        self::$instance = array(
			'products' => new JsonDataAccessObject('products', Config::getProducts()),
			'market' => new JsonDataAccessObject('market', Config::getMarket())
		);
      }
    }

    public static function get() {
      self::checkInstance();
      if(isset(self::$instance)){
        return self::$instance;
      } else {
        return null;
      }
    }

    public static function unlinkJsonData() {
      if(isset(self::$instance)){
        self::$instance = null;
      }
    }
}
?>

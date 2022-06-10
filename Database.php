<?php


class Database {

    private static $instance;
    private function __construct() {

    }

    private static function checkInstance() {
      if(!isset(self::$instance))
      {
        self::$instance = new DatabaseAccessObject(
          MySQL::ADDRESS,
          MySQL::USERNAME,
          MySQL::PASSWORD,
          MySQL::DATABASE
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

    public static function unlinkDAO() {
      if(isset(self::$instance)){
        self::$instance = null; // 會自動 close link
      }
    }
}
 ?>

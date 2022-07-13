<?php
/*
把  URL解析成參數文字陣列，之後去判斷去那裡。
*/

class Router {
  private $routers = [
    "^([a-zA-Z0-9_]+)\/?$",
    "^([a-zA-Z0-9_]+)\/([a-zA-Z0-9_]+)\/?$",
    "^([a-zA-Z0-9_]+)\/([a-zA-Z0-9_]+)\/([a-zA-Z0-9_]+)\/?$",
    "^([a-zA-Z0-9_]+)\/([a-zA-Z0-9_]+)\/([a-zA-Z0-9_]+)\/([a-zA-Z0-9_]+)\/?$"
  ];
  private $parameters = [];
  
  public function __construct($url) {
    foreach($this->routers as $route){
      //echo $route . "<br />";
      if(!preg_match("/" . $route . "/", $url, $matches))
        continue;
      //echo $matches;
      $this->parameters = array_slice($matches, 1);
    }
  }

  public function getParameter($index){
    if(isset($this->parameters[($index-1)])){
      return $this->parameters[($index-1)];
    }else{
      return "";
    }
  }

}
?>

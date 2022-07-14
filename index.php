<?php
// initial ----------------------------------------------------------------------------------------------
ini_set('display_errors', 1);
error_reporting(E_ALL);
include(dirname(__FILE__).'/module/function.php');

// header -----------------------------------------------------------------------------------------------
echo Get_Header();

// body -------------------------------------------------------------------------------------------------
$route = new Router(Request::uri()); 		      // 搭配 .htaccess 排除資料夾名稱後解析 URL
$parameter = strtolower($route->getParameter(1)); // 從 http://127.0.0.1/game/aaa/bbb 取得 aaa 字串之意
$controller_array = scandir('controller');
$controller_array = array_change_key_case($controller_array, CASE_LOWER);

if(in_array($parameter.'.php', $controller_array)) {
	include(dirname(__FILE__).'/controller/'.$parameter.'.php');
}else{
	include(dirname(__FILE__).'/controller/default.php');
}

// footer -----------------------------------------------------------------------------------------------
echo Get_Footer();
?>


<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include( dirname(__FILE__) . '/module/function.php' );

echo Get_Header();


echo 'dirname(dirname(__FILE__)):' . dirname(dirname(__FILE__)) . '<br />';
echo "\$_SERVER['PHP_SELF']:" . $_SERVER['PHP_SELF'] . "<br />";
echo "\$_SERVER['REQUEST_URI']:" . $_SERVER['REQUEST_URI'] . "<br />";
if(isset($_SERVER['REDIRECT_URL'])) {
	echo "\$_SERVER['REDIRECT_URL']:" . $_SERVER['REDIRECT_URL'] . "<br />";
} else echo "\$_SERVER['REDIRECT_URL']:Undefine<br />";
echo "explode('?', \$_SERVER['REQUEST_URI'])[0]:" . explode('?', $_SERVER['REQUEST_URI'])[0] . "<br />";


$route = new Router(Request::uri()); //搭配 .htaccess 排除資料夾名稱後解析 URL
$parameter = strtolower($route->getParameter(1)); // 從 http://127.0.0.1/game/aaa/bbb 取得 aaa 字串之意

/*
$controller_array = scandir('controller');
$controller_array = array_change_key_case($controller_array, CASE_LOWER);

if(in_array($parameter.'.php', $controller_array)) {
	include('controller/'.$parameter.'.php');
} else {
	include('controller/default.php');
}
*/



$controller_dir = dirname(dirname(__FILE__)) . '/controller/';
include($controller_dir . $parameter . '.php');
	
echo Get_Footer();
?>

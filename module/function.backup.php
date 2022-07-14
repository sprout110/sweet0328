<?php
session_start();
$dir = dirname(dirname(__FILE__));

include_once('Config.php');
include_once('Request.php');
include_once('Router.php');
include_once('JsonDataAccessObject.php');
include_once('JsonData.php');

function rwd_render($_template, $_data) {
	// 利用 output buffer：ob 取得資料，再送到樣板裡輸出
	ob_start(); // 把輸出轉到一個內部緩衝區
	include_once($_template);
	$result = ob_get_contents(); // 傳回內部緩衝區的內容
	ob_end_clean(); // 結束輸出緩衝區，並清除緩衝區的內容
	return $result;
}

function Set_Index() {
	/*
	JsonData::get()['market']->showItems();
	JsonData::get()['products']->showItems();
	JsonData::get()['products']->add('P017', 
		array(
			"ProductName"=>'123', 
			"Picture"=>'123',
			"Description"=>'123',
			"Price"=>'123'));
	JsonData::get()['products']->showItems();
	JsonData::get()['products']->save();
	*/
	$Index_Info = array(
		'index_title' => '首頁的標題',
		'index_intro' => '首頁的介紹<br /><br />首頁的介紹2'
	);
	
	return $Index_Info;
	
}

function Get_Body() {
	echo 'dirname(dirname(__FILE__)):' . dirname(dirname(__FILE__)) . '<br />';
	echo "\$_SERVER['PHP_SELF']:" . $_SERVER['PHP_SELF'] . "<br />";
	echo "\$_SERVER['REQUEST_URI']:" . $_SERVER['REQUEST_URI'] . "<br />";
	if(isset($_SERVER['REDIRECT_URL'])) {
		echo "\$_SERVER['REDIRECT_URL']:" . $_SERVER['REDIRECT_URL'] . "<br />";
	} else echo "\$_SERVER['REDIRECT_URL']:Undefine<br />";
	echo "explode('?', \$_SERVER['REQUEST_URI'])[0]:" . explode('?', $_SERVER['REQUEST_URI'])[0] . "<br />";
	/*
		explode(separator,string,limit)
	
	 
		參數	描述
		separator	必需。規定在哪裡分割字符串。
		string		必需。要分割的字符串。
		limit		可選。規定所返回的數組元素的最大數目。
		
		$str = "Hello world. It's a beautiful day."; 
		print_r (explode(" ",$str));
		
		Array
		(
		=> Hello
		[1] => world.
		[2] => It's
		[3] => a
		[4] => beautiful
		[5] => day.
		)
	*/
	
	//echo "Config::getBASE_URL() . 'index.php':" . Config::getBASE_URL() . 'index.php' . '<br />';
	//$Site_Route = $_SERVER['PHP_SELF'];
	
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
	/*	
	switch($parameter) {
		case 'contact':
			$Template_Page = $Template_dir . 'contact.php';
			$Content_Data = Set_Index();
			break;
		default:
			$Template_Page = $Template_dir . 'default.php';
			$Content_Data = Set_Index();
			break;
	}
	
	$Html_Page = rwd_render($Template_Page, $Content_Data);
	return $Html_Page;
	*/
	
}

function Set_Header() {
	$Index_Info = array(
		'BASE_URL' => '/sweet0328/',
		'Title' => '韶光食事',
		'Navbar-BackgroundColor' => '#FFEEDD',
		'Navbar-Brand' => ' 韶 光 微 甜 ',
		'Navbar-SubTitle' => ' 純手工製作，請提前一週訂購 '
	);
	
	return $Index_Info;
}

function Set_Footer() {
	$Index_Info = array();
	return $Index_Info;
}

function Get_Header() {
	$Template_Page = dirname(dirname(__FILE__)) . '/view/header/default.php';
	$Content_Data = Set_Header();
	$Html_Page = rwd_render($Template_Page, $Content_Data);
	return $Html_Page;
}

function Get_Footer() {
	$Template_Page = dirname(dirname(__FILE__)) . '/view/footer/default.php';
	$Content_Data = Set_Footer();
	$Html_Page = rwd_render($Template_Page, $Content_Data);
	return $Html_Page;
}
?>

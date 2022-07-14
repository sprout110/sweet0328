<?php
session_start();
$dir = dirname(dirname(__FILE__));

include_once('Config.php');
include_once('Request.php');
include_once('Router.php');
include_once('JsonDataAccessObject.php');
include_once('JsonData.php');

/*
	利用 output buffer：ob 取得資料，再送到樣板裡輸出
*/
function rwd_render($_template, $_data) {
	ob_start(); 					// 把輸出轉到一個內部緩衝區
	include_once($_template);
	$result = ob_get_contents(); 	// 傳回內部緩衝區的內容
	ob_end_clean(); 				// 結束輸出緩衝區，並清除緩衝區的內容
	return $result;
}

function Set_Index() {
	$Index_Info = array(
		'index_title' => '首頁的標題',
		'index_intro' => '首頁的介紹<br /><br />首頁的介紹2'
	);
	
	return $Index_Info;
	
}

function Set_Header() {
	$Header_Info = array(
		'BASE_URL' => Config::getBASE_URL(),
		'Title' => '韶光食事',
		'Navbar-BackgroundColor' => '#FFEEDD',
		'Navbar-Brand' => ' 韶 光 微 甜 ',
		'Navbar-SubTitle' => ' 純手工製作，請提前一週訂購 '
	);
	
	return $Header_Info;
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

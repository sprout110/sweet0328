<?php

session_start();
$dir = dirname(dirname(__FILE__));
include_once($dir . '/config/Config.php');

function rwd_render($_template, $_data) {
	//$dir = dirname(dirname(__FILE__));
	
	// 利用 output buffer：ob 取得資料，再送到樣板裡輸出
	ob_start(); // 把輸出轉到一個內部緩衝區
	include_once($_template);
	$result = ob_get_contents(); // 傳回內部緩衝區的內容
	ob_end_clean(); // 結束輸出緩衝區，並清除緩衝區的內容
	return $result;
}

function Set_Index() {
	$Index_Info = array(
		'index_title' => '首頁的標題',
		'index_intro' => '首頁的介紹<br /><br />首頁的介紹2'
	);
	
	return $Index_Info;
	
}


function Set_Index() {
	$Index_Info = array(
		'index_title' => '首頁的標題',
		'index_intro' => '首頁的介紹<br /><br />首頁的介紹2'
	);
	
	return $Index_Info;
	
}

function Get_SiteInfo() {
	echo 'dirname(dirname(__FILE__)):' . dirname(dirname(__FILE__)) . '<br />';
	
	$Template_dir = dirname(dirname(__FILE__)) . '/template/';
	$Site_Route = $_SERVER['PHP_SELF'];
	
	echo "\$_SERVER['PHP_SELF']:" . $_SERVER['PHP_SELF'] . "<br />";
	echo Config::getBASE_URL() . '/index.php' . '<br />';
	
	switch($Site_Route) {
		case Config::getBASE_URL() . 'index.php':
			$Template_Page = $Template_dir . 'index_tpl.php';
			$Content_Data = Set_Index();
			break;
		case Config::getBASE_URL() . 'herblog.php':
			$Template_Page = $Template_dir . 'herblog_tpl.php';
			$Content_Data = Set_Index();
			break;
	}
	$Html_Page = rwd_render($Template_Page, $Content_Data);
	return $Html_Page;
	
}

?>

<?php
/*
	$Template_Page = dirname(dirname(__FILE__)) . '/view/body/default.php';
	$Content_Data = Set_Index();
	$Html_Page = rwd_render($Template_Page, $Content_Data);
	echo $Html_Page;
*/
	$now = new DateTime();
	if(date('w') == 0) $now->modify('+1 days');
	else $now->modify('+' . (8-date('w')) . ' days');
	
	$Markets = JsonData::get()['market']->getItems();
	$Products = JsonData::get()['products']->getItems();
	
	print_r($Markets);
	print_r($Products); 
	
	$Choices = $Markets['2022/07/04'];
	
	include('view/body/default.php');
?>

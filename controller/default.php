<?php
	$markets = JsonData::get()['market']->getItems()['2022/07/04'];
	$products = JsonData::get()['products']->getItems();
	
	foreach($markets as $marketItem) {
		$products[$marketItem['ProductId']]['ProductId'] = $marketItem['ProductId'];
		$_data[] = $products[$marketItem['ProductId']];
	}
	
	include('view/body/default.php');
?>

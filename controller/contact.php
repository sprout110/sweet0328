<?php
	$Template_dir = dirname(dirname(__FILE__)) . '/view/body/';
	//echo "\$Template_dir:" . $Template_dir . "<br />";
	$Template_Page = $Template_dir . 'contact.php';
	//echo "\$Template_Page:" . $Template_Page . "<br />";
	$Content_Data = Set_Index();
	$Html_Page = rwd_render($Template_Page, $Content_Data);
	echo $Html_Page;
?>
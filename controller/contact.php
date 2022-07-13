<?php
    include( . '');
	$Template_Page = $Template_dir . 'contact.php';
	$Content_Data = Set_Index();
	$Html_Page = rwd_render($Template_Page, $Content_Data);
	echo $Html_Page;
?>
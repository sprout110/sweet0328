<?php
//if(!isset($_COOKIE['eShopHasCookie']) or $_COOKIE['eShopHasCookie'] <> "Yes") {
//  $Msg = urlencode("本網頁須使用 Cookie 功能，請先開啟 Cookie 功能！");
//  header("Location: index.php?Msg=$Msg");
//}
?>

<?php

if(isset($_POST['ProductId'])) {
  $id = $_POST['ProductId'];
  $products = JsonData::get()['products']->getItems();
  $_data = $products[$id];
  include('view/body/detail.php');
}
?>

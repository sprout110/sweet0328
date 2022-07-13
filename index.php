<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include( dirname(__FILE__) . '/module/function.php' );

echo Get_Header();
echo Get_Body();
echo Get_Footer();
?>

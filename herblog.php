<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo 'dirname(__FILE__):' . dirname(__FILE__) . '<br />';

include( dirname(__FILE__) . '/module/function.php' );
$show_html = Get_SiteInfo();
echo $show_html;

?>

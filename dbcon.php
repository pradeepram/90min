<?php
$link = mysql_connect('http://192.168.0.70', 'root', '') or die('error');
@mysql_select_db('next90minapp',$link) or die('error');	
?>

<?php
$link = mysql_connect('localhost', 'root', '') or die('error');
@mysql_select_db('smarthospital',$link) or die('error');	
?>

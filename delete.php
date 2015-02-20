<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	include('dbcon.php');
	
	$userip = $_SERVER['REMOTE_ADDR'];
	
	mysql_query("delete from facebook_posts where p_id ='".$_REQUEST['id']."' AND userip ='".$userip."'");
	mysql_query("delete from facebook_posts_comments where post_id ='".$_REQUEST['id']."'");
	
?>
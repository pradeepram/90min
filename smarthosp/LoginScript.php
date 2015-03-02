<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
			header("Content-type: text/plain");
$username = (string) $_GET["username"];
$pwd  = (string) $_GET["pwd"];
	
		
		$retrieve = mysql_query("select user_id,roleid from m_user
								 WHERE username='$username' AND password='$pwd' ");
			$check_result = mysql_num_rows(@$retrieve);
		
		$row = mysql_fetch_row($retrieve);
		
		echo json_encode($row);
		
?>
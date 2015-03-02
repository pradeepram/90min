<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
			header("Content-type: text/plain");

	
		
		$add = mysql_query("SELECT roleid,rolename FROM m_roles ");
		
		$my_values = array();
	$my_values1 = array();
while($row = mysql_fetch_array($add))
{
    $rolename= "{$row['rolename']}" ;
    $roleid="{$row['roleid']}" ;
  $my_values[] = $rolename;
    $my_values1[] = $roleid;                                      
} 		

	
  echo json_encode(array("rolename"=>$my_values,"roleid"=>$my_values1));
		
?>
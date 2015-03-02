<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$id = (string) $_GET["id"];		
        
$add = mysql_query("SELECT name,m_id  FROM master");



$my_values = array();
$my_values1 = array();
while($row = mysql_fetch_array($add))
{
    $firstname= "{$row['name']}" ;
    $mid= "{$row['m_id']}" ;
  $my_values[] = $firstname;  
  $my_values1[] = $mid;                                                                 
} 		
  echo json_encode(array("name"=>$my_values,"id"=>$my_values1));
?>


<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		
        




	 $add = mysql_query("SELECT FROM_UNIXTIME(UNIX_TIMESTAMP(TimeCreated),'%Y %D %M %h:%i') as date from d_patientreg");	 

$my_values = array();
while($row = mysql_fetch_array($add))
{
    $firstname= "{$row['date']}" ;
  $my_values[] = $firstname;                                                                 
} 		
  echo json_encode($my_values);
?>


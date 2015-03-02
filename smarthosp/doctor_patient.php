<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$doctor = (string) $_GET["doctor"];		
        

 $add = mysql_query("SELECT first_name FROM d_patientreg WHERE doctor=0 and track=0 and doctor_name='$doctor' and DATE(TimeCreated)=DATE(NOW()) ");


$my_values = array();
while($row = mysql_fetch_array($add))
{
    $firstname= "{$row['first_name']}" ;
  $my_values[] = $firstname;                                                                 
} 		
  echo json_encode($my_values);
?>


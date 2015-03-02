<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$id = (string) $_GET["id"];		
        



if ($id == "1") {
	 $add = mysql_query("SELECT first_name FROM d_patientreg WHERE doctor=0 and track=0 and DATE(TimeCreated)=DATE(NOW()) ");	 
}
elseif ($id == "2")
{
 $add = mysql_query("SELECT first_name FROM d_patientreg WHERE physician=0 and track=0 and DATE(TimeCreated)=DATE(NOW()) ");
}
elseif ($id == "3")
{
 $add = mysql_query("SELECT doctor_name as first_name FROM d_doctor_list");
}
elseif ($id == "4")
{
 $add = mysql_query("SELECT name as first_name FROM master");
}
elseif ($id == "5")
{
 $add = mysql_query("SELECT first_name FROM d_patientreg WHERE lab=0 and track=0 and DATE(TimeCreated)=DATE(NOW()) ");
}
else {
	$add = mysql_query("SELECT first_name FROM d_patientreg WHERE lab=0 and track=0 and DATE(TimeCreated)=DATE(NOW()) ");	
}
$my_values = array();
while($row = mysql_fetch_array($add))
{
    $firstname= "{$row['first_name']}" ;
  $my_values[] = $firstname;                                                                 
} 		
  echo json_encode($my_values);
?>


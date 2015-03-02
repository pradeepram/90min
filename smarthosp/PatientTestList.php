<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$patient = (string) $_GET["patient"];		
        

 $add = mysql_query("select c.child_name,c.m_id from d_patientreg p,child c where c.m_id=p.m_id and p.first_name='$patient' ");


$my_values = array();
$my_values1 = array();
while($row = mysql_fetch_array($add))
{
    $childname= "{$row['child_name']}" ;
    $m_id= "{$row['m_id']}" ;
  $my_values[] = $childname;
   $my_values1[] = $m_id;   
                                                               
} 		
  echo json_encode(array("childname"=>$my_values,"mid"=>$my_values1));
?>


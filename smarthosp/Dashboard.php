<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
		

 $totalpatient = mysql_query("SELECT count(p_id)as total FROM d_patientreg WHERE DATE(TimeCreated)=DATE(NOW()) ");

 $doctor = mysql_query("SELECT count(p_id) as doctor FROM d_patientreg WHERE doctor=1 and DATE(TimeCreated)=DATE(NOW()) ");

 $physician = mysql_query("SELECT count(p_id) as physician FROM d_patientreg WHERE physician=1 and DATE(TimeCreated)=DATE(NOW()) ");
 
 $lab = mysql_query("SELECT count(p_id) as lab FROM d_patientreg WHERE lab=1 and DATE(TimeCreated)=DATE(NOW()) ");

 $awaiting = mysql_query("SELECT count(p_id) as Awaiting FROM d_patientreg WHERE lab=0 and physician=0 and doctor=0 and DATE(TimeCreated)=DATE(NOW()) ");
 


$my_values1 = array();
$my_values2 = array();
$my_values3 = array();
$my_values4 = array();
$my_values5 = array();
while($row1 = mysql_fetch_array($totalpatient))
{
    $tot= "{$row1['total']}" ;        
  $my_values1[] = $tot;                                                              
} 
while($row2 = mysql_fetch_array($doctor))
{ 
    $doc= "{$row2['doctor']}" ;   
   $my_values2[] = $doc;
                                                                    
} 
	while($row3 = mysql_fetch_array($physician))
{ 
    $phy= "{$row3['physician']}" ;
  $my_values3[] = $phy;
                                                                    
} 	
while($row4 = mysql_fetch_array($lab))
{ 
    $la= "{$row4['lab']}" ;
  $my_values4[] = $la;
                                                                    
} 	
while($row5 = mysql_fetch_array($awaiting))
{ 
    $awa= "{$row5['Awaiting']}" ;
  $my_values5[] = $awa;
                                                                    
} 	
   echo json_encode(array("total"=>$my_values1,"doctor"=>$my_values2,"physician"=>$my_values3,"lab"=>$my_values4,"awaiting"=>$my_values5));
?>


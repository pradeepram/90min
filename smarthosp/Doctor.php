<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$patientname = (string) $_GET["p_name"];		
        $userid = (string) $_GET["userid"];        
		$docname = (string) $_GET["doc_name"];		
        $master =  json_decode(stripslashes($_GET["test"]));
       

print $patientname;
print $userid;
	print $master;
	

 $add = mysql_query("INSERT INTO d_doctor(p_name,user_id) VALUES('$patientname','$userid')");

foreach($master as $d){
   $test = mysql_query("INSERT INTO test(doctor_name,patient_name,m_id) VALUES('$docname','$patientname',$d)");
   $update = mysql_query("update d_patientreg SET doctor=1,m_id='$d' WHERE first_name='$patientname' and doctor_name='$docname'");
  }


	
	 
	 
	 
	 	 	$check_result = mysql_num_rows(@$add);
		
		
		echo $check_result;
		echo json_encode($check_result);	
			
?>


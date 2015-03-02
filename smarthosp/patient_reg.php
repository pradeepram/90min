<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
$firstname = (string) $_GET["fname"];
$phone  = (string) $_GET["ph"];
$DOB  = (string) $_GET["dob"];
$userid = (string) $_GET["userid"];
$patientid = (string) $_GET["patent_id"];
$doctor = (string) $_GET["doctor"];
		print $firstname;
		print $phone;
		print $DOB;
		
	
	 $add = mysql_query("INSERT INTO d_patientreg(first_name,phone,DOB,user_id,patient_id,doctor_name) VALUES('$firstname','$phone','$DOB','$userid','$patientid','$doctor')");
	 	 	$check_result = mysql_num_rows(@$add);
		
		
		echo $check_result;
		echo json_encode($check_result);				
?>
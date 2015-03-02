<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$patientname = (string) $_GET["p_name"];		
        $userid = (string) $_GET["userid"];

print $patientname;
print $userid;
	
	 $add = mysql_query("INSERT INTO d_lab_reception(p_name,user_id) VALUES('$patientname','$userid')");
	  $update = mysql_query("update d_patientreg SET lab=1 WHERE first_name='$patientname'");
	 	 	$check_result = mysql_num_rows(@$add);
		
		
		echo $check_result;
		echo json_encode($check_result);				
?>


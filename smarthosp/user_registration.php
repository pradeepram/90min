<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
		$email = (string) $_GET["email"];
		
		
		$password = (string) $_GET["pwd"];
		
$firstname = (string) $_GET["fname"];

$phone  = (string) $_GET["phone"];


$gender = (string) $_GET["gen"];
		$username = (string) $_GET["username"];
$role = (string) $_GET["role"];


		$add = mysql_query("select roleid from m_roles where rolename='$role'");

while ($i = mysql_fetch_array($add)){
    $result .= $i["roleid"];
    echo $result;
    
	 $add = mysql_query("INSERT INTO m_user(emailaddress,username,password,firstname,phone,Gender,roleid) VALUES('$email','$username','$password','$firstname','$phone','$gender','$result')");
	 	 	$check_result = mysql_num_rows(@$add);
		
		
		echo $check_result;
		echo json_encode($check_result);		
}
?>
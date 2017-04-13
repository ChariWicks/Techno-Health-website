<?php
include 'config.php'; ?>


<!DOCTYPE html>
<html lang = "en-US">

	<head>
		<title>sign</title>
		<link rel = "stylesheet" type = "text/css" href = "css/HomePageStylingSheet.css">
		<link rel = "stylesheet" type = "text/css" href = "css/signup.css">
		<!--<link rel = "stylesheet" type = "text/css" href = "style.css">-->

		</head>
	<body>
	<?php  include 'header.php'; 
	

if(isset($_POST['Signupbtn'])){
	
	$fName = $_POST['Firstname'];
	$lName = $_POST['Lastname'];
	$contact = $_POST['Contactnumber'];
	$email = $_POST['Email'];
	$pwd = $_POST['Password'];
	
	$sql_cus = "SELECT * FROM customers WHERE email='".$email."' AND password='".$pwd."'"; 
	$result_cus =  mysql_query($sql_cus);
	$result_count = mysql_num_rows($result_cus);
	

	
	if ($result_count==0){
				
	mysql_query("INSERT INTO customers(fName,lName,email,contactNo,password) VALUES('$fName','$lName','$email','$contact','$pwd')");
	header("location:login.php");
	}else{
		echo " <span> You have already signed up</span>";
	//header("location:login.php");
		
	}
		
}

?>
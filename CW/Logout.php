<?php

session_start();

//End session

if(isset($_SESSION['userid'])){
	session_unset();

//redirect to home page

	header("Location:HomePage.php");

}
?>
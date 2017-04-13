<?php
session_start();

include 'config.php';

if(isset($_POST['gobtn'])){
	
$username=$_POST['username']; 
$password=$_POST['password']; 

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$sql="SELECT * FROM customers WHERE email='$username' and password='$password'";

$result=mysql_query($sql);
$count=mysql_num_rows($result);

if($count==1){

$row=mysql_fetch_array($result);
 
$_SESSION['userid']=$row['customer_id'];
$_SESSION['username']=$row['email'];
$_SESSION['password']=$row['password'];

echo $_SESSION['username'];


if(isset($_SESSION["cartItem"])){
	foreach(($_SESSION["cartItem"]) as $itemscode=> $item){
		$customer_id = $_SESSION['userid'];
		$product_id = $_SESSION["cartItem"][$itemscode]["prod_code"];
		$order_qty = $_SESSION["cartItem"][$itemscode]["qty"];
		$rate = $_SESSION["cartItem"][$itemscode]["prod_price"];
		$order_date = date('Y-m-d');
		$amount = number_format($order_qty*$rate,2,'.','');
		//echo $items;
		$orderRes = mysql_query("SELECT * FROM orders WHERE customer_id='$customer_id' AND product_id='$product_id' AND order_date='$order_date' ");
		
		$orderRow = mysql_num_rows($orderRes);
		
		
		if($orderRow==0){
			
			mysql_query("INSERT INTO orders('customer_id','product_id','order_qty','amount','order_date') VALUES('$customer_id','$product_id','$order_qty','$amount','$order_date')");
			
		}else{
			
		}
		
	}
	
}

header("location:OurProducts.php");
}
else {

header("location:wrongUser.php");

}
}

?>
<?php
//include connection
include 'config.php';

//check whether update button is set or not.
if(isset($_POST['updatebtn'])){
			
		//check whether qty or remove check box are set.
		  if(isset($_POST["productqty"]) || isset($_POST["remove_code"]))
{
	//update item quantity in product session

		if(isset($_POST["productqty"]) && is_array($_POST["productqty"])){
		foreach($_POST["productqty"] as $key => $value){
		
		$get_pdCode = $key;
		//ordered qty in first time
		$oldQty = $_SESSION["cartItem"][$key]["qty"];
		
		//retrive product data from the db 
		$results_qty = mysql_query("SELECT product_code, product_qty FROM products WHERE product_code='$get_pdCode'");
		
		while($row_qty = mysql_fetch_array($results_qty)){
			//currently available qty in the db 	
			$balance = $row_qty['product_qty']+ $oldQty;
		}
		
		//if new qty is lower than the available qty
			if($value<=$balance){
				if(is_numeric($value)){
					//if old qty is lower than new qty substract the difference of the qty
					if($oldQty<=$value){
						mysql_query("UPDATE products SET product_qty=(product_qty-($value-$oldQty)) WHERE product_code='$get_pdCode'");
					}
					else{
						//otherwise add difference of the qty 
						mysql_query("UPDATE products SET product_qty=(product_qty+($oldQty-$value)) WHERE product_code='$get_pdCode'");
					}				
				//update qty in the session array to new qty
				$_SESSION["cartItem"][$key]["qty"] = $value;
				
				 
			}else{
				
			}
			}
		
			
		}
	}
	
	//remove an item from product session
	
	if(isset($_POST["remove_code"]) && is_array($_POST["remove_code"])){
		foreach($_POST["remove_code"] as $key){
			//get the product code and qty of the selected item
			$pdCode = $_SESSION["cartItem"][$key]['prod_code'];
			$pdQty = $_SESSION["cartItem"][$key]['qty'];
			//update product code
			mysql_query("UPDATE products SET product_qty=(product_qty+$pdQty) WHERE product_code='$pdCode'");  
			//remove from the session array
			unset($_SESSION["cartItem"][$key]);
			
		    
		}	
	}
}

	   }

	   //if the session is set and is not empty then display the cart
if(isset($_SESSION["cartItem"]) && count($_SESSION["cartItem"])>0)
{	
	   
	echo '<div class="cart-view-table-front" id="view-cart">';
	echo '<h3>Your Shopping Cart</h3>';
	echo '<form method="post" action="#">';
	echo '<table class = "viewcart" width="100%"  cellpadding="6" cellspacing="0" >';
	echo '<tr>';
	echo '<th>Product Name</th>';
	echo '<th>Price</th>';
	echo '<th>Total</th>';
	echo '<th>Qty</th>';
	//user should be logged in to checkout further
	echo '<th><a href="'; if(!isset($_SESSION['userid'])){ echo 'login.php';}else{ header("location:OurProducts.php");} echo '">Proceed to checkout</a></th></tr>';
	

	$total = 0;	
	$subtotal = 0;
	$finaltotal=0;
	$finalsubtotal=0;
	foreach ($_SESSION["cartItem"] as $cart_itm)
	{
		$product_name = $cart_itm["prod_name"];
		$product_qty = $cart_itm["qty"];
		$product_price = $cart_itm["prod_price"];
		$product_code = $cart_itm["prod_code"];
		
		echo '<td>'.$product_name.'</td>';
		echo '<td>'.$product_price.'</td>';
		$subtotal = ($product_price * $product_qty);
		$finalsubtotal = number_format($subtotal, 2, '.', '');
		echo '<td>'.$finalsubtotal.'</td>';
		echo '<td><input type="text" size="2" name="productqty['.$product_code.']" value="'.$product_qty.'" /></td>';		
		echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /> Remove</td>';
		echo '</tr>';
		
		$total = ($total + $subtotal);
		$finaltotal = number_format($total, 2, '.', '');
			}
	echo '<tr>';	
	echo '<td></td><td></td><td>'.$finaltotal.'</td>';
	echo '
	<td><input type="submit" value="Update" name="updatebtn"></td>
	<td><a href="OurProducts.php">Add more items</a></td>';
	echo '</tr></table>';
	
	echo '</form>';
	echo '</div>';
	
	
 
}
?>


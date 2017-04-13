<!--start the session-->
<?php session_start(); ?>

<div id = "Up-most navigation bar">
		<table id = "firstLBar"><!--Up most nav bar-->
			<tr>
				<td width = "60%"></td>
				<td width = "80%"><font size = "2"><a href = "#fo"><!--bookmark leads to the footer of page-->Page editor</a><a href = "creator.php">Creators</a><a href = "myCart.php">My Cart</a><a href = "login.php">Log In or Sign Up</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src = "images/cartC.png" style="width:20px;height:20px;"></font></td>
			</tr>
		</table>
		<div id = "Second Sec">
		<table id = "NameBar"><!--Description bar-->
			<tr>
				<td class = "image" width = "10%"><img src = "images/moneyc.png" style="width:50px;height:50px;"></td>
				<td class = "des" width = "23%"><font size = "5" style="font-family:Arial;"><b>Money back</b></font></br><font size = "2"><i>30 days money back gurantee</i></font></b></td>
				<td class = "image" width = "10%"><img src = "images/clockc.png" style="width:50px;height:50px;"></td>
				<td class = "des" width = "23%"><font size = "5" style="font-family:Arial;"><b>Opening hours</b></font></br><font size = "2"><i>Every day 10.00 AM to 10.00 PM</i></font></b></td>
				<td class = "image" width = "10%"><img src = "images/shipc.png" style="width:50px;height:50px;"></td>
				<td class = "des" width = "23%"><font size = "5" style="font-family:Arial;"><b>Free shipping</b></font></br><font size = "2"><i>Products over Rs.2000</i></font></td></b>
			</tr>
		</table>
		<div id = "nav">
			<a href = "HomePage.php"> Home </a><a href = "Aboutus.php"> About us </a><a href = "OurProducts.php"> Our products </a><a href = "ContactUs.php"> Contact us </a><?php if(isset($_SESSION['userid'])){ //setting session variables
		echo '<a href="Logout.php">Logout</a>';
	}
	echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href = "https://www.facebook.com/"><img src = "images/facebook_icon.png" style="width:25px;height:21px;"></a><a href = "https://plus.google.com/up/accounts/upgrade/?continue=https://plus.google.com/"><img src = "images/google-plus_icon.png" style="width:25px;height:21px;"> </a><a href = "https://www.skype.com/en/"> <img src = "images/skype_icon.png" style="width:25px;height:21px;"> </a><a href = "https://twitter.com/?lang=en"> <img src = "images/twitter_icon.png" style="width:25px;height:21px;"> </a>'; ?>
		</div>
		<table id = "logo" align = "center">  <!--logo and site title-->
			<tr>
				<td width = "10%"><img class = "logo" src = "images/lo.jpg" style="width:200px;height:200px;"></td>
				<td width = "90%"><h1 class="mainHeading">TECHNO HEALTH</h1></br></td>
			</tr>
		</table>
		</div>
	</div>
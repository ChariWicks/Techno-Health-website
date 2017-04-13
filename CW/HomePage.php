
<!DOCTYPE html>
<html lang = "en-US">
	<head>
		<title>Home</title>
		<link rel = "stylesheet" type = "text/css" href = "css/HomePageStylingSheet.css">
	</head>
	<body>
	<?php  include 'header.php';?>
	
	<div id = "SlideShow">
	<table id = "SlideShow" align = "center"><!--slide show-->
		<tr>
			<td>
				<img class = "mySlides" src = "images/medi.jpg" style="width:1330px;height:500px;">
				<img class = "mySlides" src = "images/met.jpg" style="width:1330px;height:500px;">
				<img class = "mySlides" src = "images/wheel1.jpg" style="width:1330px;height:500px;">
				<img class = "mySlides" src = "images/fri.jpg" style="width:1330px;height:500px;">
			</td>
		</tr>
	</table>
	</div>
	<script>
	var myIndex = 0;
	carousel();

	function carousel() {
		var i;
		var x = document.getElementsByClassName("mySlides");
		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";  //x[i] element will not be displayed
		}
		myIndex++;
		if (myIndex > x.length) {myIndex = 1}    
		x[myIndex-1].style.display = "block";  //element will be displayed
		setTimeout(carousel, 3000);   //call carousel() after 3 seconds 
	}   
	
	</script>
	</br></br>
	<table id = "BelowSection" align = "center"><!--section below the slide show-->
	<tr>
		<td width = "50%">
		</td>
		<td width = "50%">
		<div class = "box"><!--path to the quiz-->
		<center><font face = "Calibri"><b>Test your knowledge on health..</b></font></center></br>
		<center><a href = "Health quiz timer.php" class = "click">Click Here..</a></center><!--link to the quiz page-->
		</div>
		</td>
		<td width = "50%">
		</td>
	</tr>
	</table>
	</br>
	<center><a href = "#NameBar" class = "arrow"><img src = "images/arrow.png" style="width:30px;height:30px;" align = "middle"></a></center></br></br>
	<footer id = "fo">
	</br>
	Copyright 1999-2016 by Refsnes Data. All Rights Reserved.</br>
	Last modified date : 15th April 2016</br>
	Created by : Charitha Wickramanayake - 2015020 - charitha.2015020@iit.ac.lk
	</br></br>
	</footer>
	</body>
</html>

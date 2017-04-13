<!DOCTYPE html>
<html lang = "en-US">
	<head>
		<title>Health Quiz!!</title>
		<link rel = "stylesheet" type = "text/css" href = "HomePageStylingSheet.css">
	</head>
	<body>
	<div id = "Up-most navigation bar">
		<table id = "firstLBar">
			<tr>
				<td width = "60%"></td>
				<td width = "80%"><font size = "2"><a href = "#fo">Page editor</a><a href = "">Creators</a><a href = "">My Cart</a><a href = "">Sign Up</a><a href = "">Log In</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src = "cartC.png" style="width:20px;height:20px;"></font></td>
			</tr>
		</table>
		</br>
		<div id = "Second Sec">
		<table id = "NameBar">
			<tr>
				<td class = "image" width = "10%"><img src = "moneyc.png" style="width:50px;height:50px;"></td>
				<td class = "des" width = "23%"><font size = "6" style="font-family:Arial;"><b>Money back</b></font></br><font size = "2"><i>30 days money back gurantee</i></font></b></td>
				<td class = "image" width = "10%"><img src = "clockc.png" style="width:50px;height:50px;"></td>
				<td class = "des" width = "23%"><font size = "6" style="font-family:Arial;"><b>Opening hours</b></font></br><font size = "2"><i>Every day 10.00 AM to 10.00 PM</i></font></b></td>
				<td class = "image" width = "10%"><img src = "shipc.png" style="width:50px;height:50px;"></td>
				<td class = "des" width = "23%"><font size = "6" style="font-family:Arial;"><b>Free shipping</b></font></br><font size = "2">Pr<i>oducts over Rs.2000</i></font></td></b>
			</tr>
		</table>
		</br>
		<table id = "logo" align = "center">
			<tr>
				<td width = "10%"><img class = "logo" src = "logo.png" style="width:200px;height:200px;"></td>
				<td width = "90%"><h1>TECHNO HEALTH</h1></br></td>
			</tr>
		</table>
		</div>
		
		<div id = "Social-wrapper">
		<table id = "Social" align = "right">
			<tr>
				<td width = "100%"></td>
				<td><a class = "s", href = ""><img src = "facebook_icon.png" style="width:35px;height:35px;"></a></td>
				<td><a class = "s", href = ""><img src = "skype_icon.png" style="width:35px;height:35px;"></a></td>
				<td><a class = "s", href = ""><img src = "google-plus_icon.png" style="width:35px;height:35px;"></a></td>
				<td><a class = "s", href = ""><img src = "twitter_icon.png" style="width:35px;height:35px;"></a></td>
			</tr>
		</table>
		</div>
		</br>
	</div>
	<div id = "nav">
	<a href = ""> Home </a><a href = ""> About us </a><a href = ""> Our products </a><a href = ""> Promos </a><a href = ""> Contact us </a>
	</div>
	</br>
	
	<div id='wrapper'>

	<center><font face='Andalus' size='5'>Health Quiz for a <b>better life...</b></font></center>
	<br />
	<br />
	<br /><br />
	
	<table>
		<tr>
			<td width = "20%"></td>
			<td width = "70%">
				<p><font face='AR CENA' size='4'>You are given 2 minutes to complete following questions...</font></p></br></br>
				<button onclick="setTimeout(myFunction, 100000);">Start the quiz..</button></br></br>
				
				<script>
				function myFunction() {
					alert('Sorry! Your time is up....');
				}
				</script>
				<?php
	
	echo "

	<form name = 'Techno Health Quiz' action = 'answers.php' method = 'post' id = 'quiz'>
	
	<p class='question'>1. How many calories does it take to create one pound of fat?</p>        
	<ol class='answers'>            
	<input type='radio' name='q1' value='a' id='q1a'><label for='q1a'>785</label><br/>          
	<input type='radio' name='q1' value='b' id='q1b'><label for='q1b'>1590</label><br/>            
	<input type='radio' name='q1' value='c' id='q1c'><label for='q1c'>2000</label><br/>            
	<input type='radio' name='q1' value='d' id='q1d'><label for='q1d'>3500</label><br/>       
	</ol> 
	
	<p class='question'>2. You eat a late night meal; what happens to the calories?</p>        
	<ol class='answers'>            
	<input type='radio' name='q2' value='a' id='q1a'><label for='q1a'>All the calories are stored as fat.</label><br/>          
	<input type='radio' name='q2' value='b' id='q1b'><label for='q1b'>Some of the calories are stored as fat.</label><br/>            
	<input type='radio' name='q2' value='c' id='q1c'><label for='q1c'>The food is not digested properly.</label><br/>            
	<input type='radio' name='q2' value='d' id='q1d'><label for='q1d'>The food is digested and metabolized in the same way as during the rest of the day.</label><br/>       
	</ol>
	
	<p class='question'>3. You work out extra hard today and when you check the scale you are down by two pounds. Why?</p>        
	<ol class='answers'>            
	<input type='radio' name='q3' value='a' id='q1a'><label for='q1a'>You lost two pounds of fat.</label><br/>          
	<input type='radio' name='q3' value='b' id='q1b'><label for='q1b'>You lost two pounds of water.</label><br/>            
	<input type='radio' name='q3' value='c' id='q1c'><label for='q1c'>Both</label><br/>            
	<input type='radio' name='q3' value='d' id='q1d'><label for='q1d'>Neither</label><br/>       
	</ol>
	
	<p class='question'>4. This food group is the bodies main source of energy</p>        
	<ol class='answers'>            
	<input type='radio' name='q4' value='a' id='q1a'><label for='q1a'>Fruits and Vegetables</label><br/>          
	<input type='radio' name='q4' value='b' id='q1b'><label for='q1b'>Carbohydrates</label><br/>            
	<input type='radio' name='q4' value='c' id='q1c'><label for='q1c'>Proteins</label><br/>            
	<input type='radio' name='q4' value='d' id='q1d'><label for='q1d'>None of the above</label><br/>       
	</ol>
	
	<p class='question'>5. Which of these food types has the most calories per saving?</p>        
	<ol class='answers'>            
	<input type='radio' name='q5' value='a' id='q1a'><label for='q1a'>Vegetables</label><br/>          
	<input type='radio' name='q5' value='b' id='q1b'><label for='q1b'>Fats</label><br/>            
	<input type='radio' name='q5' value='c' id='q1c'><label for='q1c'>Proteins/Dairy</label><br/>            
	<input type='radio' name='q5' value='d' id='q1d'><label for='q1d'>Fruits</label><br/>       
	</ol>

	<p class='question'>6. How many servings of fruits and vegetables should you have everyday?</p>        
	<ol class='answers'>            
	<input type='radio' name='q6' value='a' id='q1a'><label for='q1a'>1 to 3</label><br/>          
	<input type='radio' name='q6' value='b' id='q1b'><label for='q1b'>2 to 4</label><br/>            
	<input type='radio' name='q6' value='c' id='q1c'><label for='q1c'>5 to 9</label><br/>            
	<input type='radio' name='q6' value='d' id='q1d'><label for='q1d'>10 to 15</label><br/>       
	</ol>
	
	<p class='question'>7. Orange juice has a lot of which vitamin?</p>         
	<ol class='answers'>            
	<input type='radio' name='q7' value='a' id='q1a'><label for='q1a'>A</label><br/>          
	<input type='radio' name='q7' value='b' id='q1b'><label for='q1b'>B</label><br/>            
	<input type='radio' name='q7' value='c' id='q1c'><label for='q1c'>C</label><br/>            
	<input type='radio' name='q7' value='d' id='q1d'><label for='q1d'>D</label><br/>       
	</ol>
	
	<p class='question'>8. Why are green vegetables so important?</p>        
	<ol class='answers'>            
	<input type='radio' name='q8' value='a' id='q1a'><label for='q1a'>They look good in salads</label><br/>          
	<input type='radio' name='q8' value='b' id='q1b'><label for='q1b'>They keep your teeth shiny</label><br/>            
	<input type='radio' name='q8' value='c' id='q1c'><label for='q1c'>They are rich source of proteins</label><br/>            
	<input type='radio' name='q8' value='d' id='q1d'><label for='q1d'>They have lots of vitamins and minerals</label><br/>       
	</ol>
	
	<p class='question'>9. The pigment that gives colour to the skin is</p>        
	<ol class='answers'>            
	<input type='radio' name='q9' value='a' id='q1a'><label for='q1a'>Hypoxanthine</label><br/>          
	<input type='radio' name='q9' value='b' id='q1b'><label for='q1b'>Carotine</label><br/>            
	<input type='radio' name='q9' value='c' id='q1c'><label for='q1c'>Melanin</label><br/>            
	<input type='radio' name='q9' value='d' id='q1d'><label for='q1d'>Himoglobin</label><br/>       
	</ol>
	
	<p class='question'>10. Tueberculosis is caused by</p>        
	<ol class='answers'>            
	<input type='radio' name='q10' value='a' id='q1a'><label for='q1a'>Mastuitos</label><br/>          
	<input type='radio' name='q10' value='b' id='q1b'><label for='q1b'>Virus</label><br/>            
	<input type='radio' name='q10' value='c' id='q1c'><label for='q1c'>Bacteria</label><br/>            
	<input type='radio' name='q10' value='d' id='q1d'><label for='q1d'>The devil</label><br/>       
	</ol>
	
	<input type='submit' value='Submit Quiz'>

	</form>;"
	?>
			</td>
			<td width = "30%"></td>
		</tr>
	</table>



	</div>
	
	
	

	</br></br>
	
	<a href = "#NameBar"><center>To the top..</center></a></br></br>
	
	<footer id = "fo">
	</br>
	Copyright 1999-2016 by Refsnes Data. All Rights Reserved.</br>
	Last modified date : 15th April 2016</br>
	Created by : Charitha Wickramanayake - 2015020 - charitha.2015020@iit.ac.lk
	</br></br>
	</footer>
	</body>
</html>

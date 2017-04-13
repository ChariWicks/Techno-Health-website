


<!DOCTYPE html>
<html lang = "en-US">
	<head>
		<title>Login Form</title>    
        <link rel="stylesheet" href="css/style.css">   
		<link rel = "stylesheet" type = "text/css" href = "css/HomePageStylingSheet.css">
	</head>
	<body>
	
	<?php include 'header.php'; 
	?>	
	
<div class="pen-title">
  <h1>Login Form</h1>
  
</div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    <form action="checklogin.php" method="post" >
      <div class="input-container">
        <input type="text" id="username" name="username" required="required"/>
        <label for="Username">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="password" name="password" required="required"/>
        <label for="Password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <input type="submit" name="gobtn" value="GO">
      </div>
      <div class="footer"><a href="question.html">Forgot your password?</a></div>
    </form>
  </div>
  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">Register
      <div class="close"></div>
    </h1>
    <form action="signup.php" method="post">
      <div class="input-container">
        <input type="text" id="Firstname" name="Firstname" required="required"/>
        <label for="Firstname">Firstname</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="text" id="Lastname" name="Lastname" required="required"/>
        <label for="Lastname">Lastname</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="text" id="Contactnumber" name="Contactnumber" required="required"/>
        <label for="Contactnumber">Contact number</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="text" id="Email" name="Email" required="required"/>
        <label for="Email">Email</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Password" name="Password" required="required"/>
        <label for="Password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Repeat Password" required="required"/>
        <label for="Repeat Password">Repeat Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
	   <input type="submit" name="Signupbtn" value="Sign Up">        
      </div>
    </form>
  </div>
</div>

    <script src='js/jquery.min.js'></script>

       <script src="js/index.js"></script>









 	<footer id = "fo">
	</br>
	Copyright 1999-2016 by Refsnes Data. All Rights Reserved.</br>
	Last modified date : 24th April 2016</br>
	Created by : Tharindu De Zoysa - 2015188<br>
				 Wageesha Ishani - 2015114 - wageesha.2015114@iit.ac.lk
	</br></br>
	</footer>
	</body>
</html>

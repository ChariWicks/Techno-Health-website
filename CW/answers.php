<html>
<head>
<title>Your marks!!</title>
</head>

<body bgcolor="#e1e1e1">

<div id="wrapper">

<center><font face="Andalus" size="5">Your Score</font></center>
<br />
<br />

<?php


if(isset($_POST['Submitbtn'])){ //clicking submit button
	
	$answer1= $_POST['q1'];
	$answer2= $_POST['q2'];
	$answer3= $_POST['q3'];
	$answer4= $_POST['q4'];
	$answer5= $_POST['q5'];
	$answer6= $_POST['q6'];
	$answer7= $_POST['q7'];
	$answer8= $_POST['q8'];
	$answer9= $_POST['q9'];
	$answer10= $_POST['q10'];
	$score = 0;
	
	//checking answers
	if ($answer1 == "c"){
		echo "<center><font face='Berlin Sans FB' size='4'>1.Correct! Answer is c.</font></center></br>";
		$score++;}
		else{
			echo "<center><font face='Berlin Sans FB' size='4'>1.Wrong! Answer is c.</font></center></br>";
		}
	if ($answer2 == "b"){
		echo "<center><font face='Berlin Sans FB' size='4'>2.Correct! Answer is b.</font></center></br>";
		$score++;}
		else{
			echo "<center><font face='Berlin Sans FB' size='4'>2.Wrong! Answer is b.</font></center></br>";
		}
	if ($answer3 == "b"){
		echo "<center><font face='Berlin Sans FB' size='4'>3.Correct! Answer is b.</font></center></br>";
		$score++;}
		else{
			echo "<center><font face='Berlin Sans FB' size='4'>3.Wrong! Answer is b.</font></center></br>";
		}
	if ($answer4 == "b"){
		echo "<center><font face='Berlin Sans FB' size='4'>4.Correct! Answer is b.</font></center></br>";
		$score++;}
		else{
			echo "<center><font face='Berlin Sans FB' size='4'>4.Wrong! Answer is b.</font></center></br>";
		}
	if ($answer5 == "b"){
		echo "<center><font face='Berlin Sans FB' size='4'>5.Correct! Answer is b.</font></center></br>";
		$score++;}
		else{
			echo "<center><font face='Berlin Sans FB' size='4'>5.Wrong! Answer is b.</font></center></br>";
		}
	if ($answer6 == "b"){
		echo "<center><font face='Berlin Sans FB' size='4'>6.Correct! Answer is b.</font></center></br>";
		$score++;}
		else{
			echo "<center><font face='Berlin Sans FB' size='4'>6.Wrong! Answer is b.</font></center></br>";
		}
	if ($answer7 == "c"){
		echo "<center><font face='Berlin Sans FB' size='4'>7.Correct! Answer is c.</font></center></br>";
		$score++;}
		else{
			echo "<center><font face='Berlin Sans FB' size='4'>7.Wrong! Answer is c.</font></center></br>";
		}
	if ($answer8 == "d"){
		echo "<center><font face='Berlin Sans FB' size='4'>8.Correct! Answer is d.</font></center></br>";
		$score++;}
		else{
			echo "<center><font face='Berlin Sans FB' size='4'>8.Wrong! Answer is d.</font></center></br>";
		}
	if ($answer9 == "c"){
		echo "<center><font face='Berlin Sans FB' size='4'>9.Correct! Answer is c.</font></center></br>";
		$score++;}
		else{
			echo "<center><font face='Berlin Sans FB' size='4'>9.Wrong! Answer is c.</font></center></br>";
		}
	if ($answer10 == "c"){
		echo "<center><font face='Berlin Sans FB' size='4'>10.Correct! Answer is c.</font></center></br>";
		$score++;}
		else{
			echo "<center><font face='Berlin Sans FB' size='4'>10.Wrong! Answer is c.</font></center></br>";
		}
	
	$score = (($score * 2) - (10 - $score)); //calculating total
	
	//changing background color
	if($score == "20"){
		echo"<body style = 'background-color:#FF7F50'>";
	}
	else if($score == "17"){
		echo"<body style = 'background-color:#6495ED'>";;
	}
	elseif($score == "14"){
		echo"<body style = 'background-color:#BDB76B'>";
	}
	elseif($score == "11"){
		echo"<body style = 'background-color:#ADFF2F'>";
	}
	elseif($score == "8"){
		echo"<body style = 'background-color:#BA55D3'>";
	}
	elseif($score == "5"){
		echo"<body style = 'background-color:#HFFA500'>";
	}
	elseif($score == "2"){
		echo"<body style = 'background-color:#CD853F'>";
	}
	elseif($score == "-1"){
		echo"<body style = 'background-color:#F5DEB3'>";
	}
	elseif($score == "-4"){
		echo"<body style = 'background-color:#6B8E23'>";
	}
	elseif($score == "-7"){
		echo"<body style = 'background-color:#380000'>";
	}
	echo "<center><font face='Berlin Sans FB' size='8'>Your Score is <br> $score/20</font></center>"; 
	
}
	
?>




</div><!--- end of wrapper div --->

</body>
</html

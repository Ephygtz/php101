<!DOCTYPE html>
<html>
<head>
	<title>Conditional Statements</title>
</head>
<body>
	<?php  
	//Conditional staements are used to perform different actionbased on different conditions
	/* conditional if
	if(condition){
		code to be executed
	} 
	*/
	echo "<h2>Conditional IF</h2> ";
	$a = 79;
	$b = 24;
	if($a > $b){
		echo "A is greater than B <br>";
	}
	//Real life example 
	//Only welcome new users
	$newUser = false;
	if($newUser) {
		echo "<h3>Welcome!</h3>";
		echo "<p>WE are glad you signed up</p>";
	}

	//Don't divide by zero
	$numerator = 20;
	$denominator = 0;
	if($denominator > 0){
		$result = $numerator / $denominator;
		echo "<h2>Result is:  $result</h2>" ;
	} else {
		echo "<h3>Sorry, you cannot divide a number by zero</h3>";
	}

	echo "<h1> If-else statements</h1>";
	/* if-else syntax
	if(condition){
	 //code to run if condition is true
	} else {
		//code to be run if condition is false
	}
	*/
	$c = 3;
	$d = 4;
	if($c > $d){
		echo "C is greater than D";
	}else {
		echo "C is not greater than D";
	}
	echo "<h1>If else-if conditions</h1>";
	/* Syntax 
		if(condition1){
			execute this block
		}elseif(condition2){
			execute this block
		} elseif(condition3){
			execute this block
		} else{
			do this
		}
	*/
		$x = 3;
		$y= 30;
		if ($x > $y) {
			echo "X is greater than y";
		} elseif($x < $y){
			echo "X is less than Y";
		} else {
			echo "X is equals to y";
		}
		echo "<br>";
		//school grading system
		$marks = 750;
		if($marks > 0 && $marks <= 35){
			echo "Woi! <h2>Fail You have o retake the course</h2><br>";
		} elseif($marks > 35 && $marks <= 60){
			echo "<h2>Pass</h2> Put more effort <br>";
		} elseif ($marks >=61 && $marks <=100){
			echo "<h2>Excellent</h2> Well done";
		} else {
			echo "Kindly takje the test";
		}
		//ToDo
		// Write a script that gets the current month and printd one of the following
		// -if it's august - print "It's August, so it's really hot ""
		// -if it's not august, then print "It's Month, so atleast not in the peak of the heat."
		// Hint=date("")
		// month = date("F");
		echo "<br><hr><hr>";

		$monthCurrent = date("F");
		// echo "$monthCurrent";
		if($monthCurrent == "August"){
			echo "It's August, so it's really hot ";
		} else {
			echo "It's $monthCurrent, so atleast not in the peak of the heat.";
		}


	?>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</body>
</html>
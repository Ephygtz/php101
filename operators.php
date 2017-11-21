<!DOCTYPE html>
<html>
<head>
	<title>Operators</title>
</head>
<body>
	<h1>Arithmetic Operators</h1>
	<?php 
		$a = 50;
		$b = 34.78;
		// Adiition
		$c = $a + $b;
		echo "The addition result = " . $c ;
		echo "<br>";
		$c = $a - $b;
		echo "Subtraction =" . $c;
		echo "<br>";
		$c = $a * $b;
		echo "Multiplication " . $c;
		echo "<br>";
		$c = $a / $b;
		echo "Division " . $c;
		echo "<br>";
		$c = $a % $b;
		echo "Modulus/Remainder " . $c;
		echo "<br>";
		$c = $a++;
		echo "Increment operation ". $c;
		echo "<br>";
		$c = $a--;
		echo "Decrement operator " . $c;
	 ?>
	 <h1>Comparison operators</h1>
	 <?php 
	 //Useed insid e conditions to compare different values
	/* == checks if the value of two operands are equal or not, if yes, then condition becomes true
	 != 
	 >
	 <
	 >=
	 <= */
	 echo "<br> <hr>";
	 $num1 = 42;
	 $num2 = 20;
	 if($num1 == $num2){
	 	echo "Num1 is equals to num 2";
	 } else {
	 	echo "Num1 is not equal to num2";
	 }
	echo "<br> <hr>";

	if($num1 > $num2){
		echo "Number 1 is greater";
	} else{
		echo "Number 2 is greater";
	}
	echo "<br> <hr>";
	if($num2 != $num1) {
		echo "Is not equals";
	} else {
		echo "The numbers are the same";
	}
	  ?>
	  <h1>Logical operator</h1>
	  <p>Used to combine conditional statements</p>
	  <?php 
	  	// and && - logical and.. RETURNS TRUE ONLY IF BOTH CONDITIONS ARE TRUE
	  	// or || returns true if either of the condition being checked is true 
	  	// ! if condition is true, it returns false
	  echo "<br> <hr>";
	  	$cond1 = true;
	  	$cond2 = false;
	  	$cond3 = true;

	  	if($cond1 && $cond3) {
	  		echo "Both conditions are true";
	  	} 
	  	echo "<br> <hr>";
	  	if($cond1 || $cond2) {
	  		echo "Wither the condition true";
	  	}
	  	echo "<br> <hr>";
	  	if(!$cond1){
	  		echo "This will run";
	  	}
	   ?>
	   <h1>Assingment operators</h1>
	   = Simple assingment operator c= a + b will assign the value of a + b into c
	   += adds the right operand to left operand and assings the result to the left operand 
	   c += a is c = c+ a;
	   -= c-= a is c = c - a;
	   *= c *= a is c = c * a;
	   /= c /=a is c = c / a;
	   %= c %=a is c = c%a
	Assingment
	Write a script to produce the output below by only manipulating one variable

	Value is now 8;
	Add 2. Value is now 10;
	Subtract 4. Value is now 6.
	Multiply by 5. Value is now 30.
	Divide by 3. Value is now 10.
	Increment value by one. Value is now 11.
	Decrement value by one. Value is now 10.

	Hint: In the script each statement end with
	"Value is now " . $variable;

	  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>
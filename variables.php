<!DOCTYPE html>
<html>
<head>
	<title>PHP VARiables</title>
</head>
<body>
	<?php 
		echo "<h2>PHP VARIABLES</h2>";
		echo "<br />";
		// This is a single line comment
		/* this is 
			a multi-line comment

		*/
			echo "Variables rules";
			// a variable must start with a $ sign
			// a variable must start with either a letter or an underscore
			// $myVariable
			// $_myVariable
			// A variable cannot start with a number
			// $4hgdhdf - PDF_set_word_spacing()
			// $my3456;
			// variable names are case sensitive
			// $a;
			// $A;
			// echo phpinfo();
			echo "<br>";
			echo "<h1>PHP DATA TYPES</h1>";
			$string = "A string is anything inside double or single quotations marks";
			echo $string . "<br>";
			$string1 = "123434 is a string as well <br>";
			$myName = "Ephraim";
			echo $myName;
			echo "<br>";
			$myName = "Githinji";
			echo $myName;
			$integer = 123;
			$integer2 = 654345678;
			echo "First interger " . $integer . " second full no is " . $integer2;
			echo "<br>";
			$sum = 34 + 56;
			echo $sum . "<br>";
			$divide = $sum / 3;
			echo $divide;
			$double = 123.987;
			$double2 = 45.9876;
			$sumDouble = $double + $double2;
			echo $sumDouble;
			echo "<br>";
			$yearBornIn = 1990 ;
			$current_year = 2017;
			$myAge = $current_year - $yearBornIn;
			echo "I am " . $myAge . " years old";
			$boolean = false;
			$boolean2 = true;

			echo "<br>";
			$married = true;
			if($married) {
				echo "Congrats and goodluck with that <br>";
			} 
			$num1 = 500;
			$num2 = 70;
			if($num1 > $num2){
				echo "Number is greater than num 2 <br>";
			}
			// array()
			$array1 = array(12, 45, 67, 90, 75, 45);
			$array2 = ["val1", 23, false, 23.98, "string"];
			echo $array1[4];

			$mixedArray = ["Kenya", "Nairobi", 47, "Mike Sonko"];
			// I live in kenya which has 47 counties. My county is Nairobi and my govener is Mike Sonko;
			echo "I live in " .$mixedArray[0] . "   which has " . $mixedArray[2] . " counties. My county is ". $mixedArray[1];
			echo "<br>";
			//COnstant variable,
			$weather = "Sunny";
			define("ID", "my id no");
			echo ID;
			define("ID", " difderent value");
			echo ID;
			


	?>
</body>
</html>
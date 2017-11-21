<!DOCTYPE html>
<html>
<head>
	<title>Loops in PHP</title>
</head>
<body>
	<?php  
		echo "<h1>While loop</h1>";
		// While loop loops through a block of code as long as the specified condition is true
		// while(condition){block of code will run}
		$counter = 0;
		while($counter <= 10){
			echo "Ephraim <br>";
			echo "The valu of count ryt now is $counter <br>";
			$counter++;
		}
		echo "The count variable after the loop is done is: " .$counter;
		echo "<br>";

		$even_num = 1;
		while($even_num <= 70){
			echo "Odd number is: $even_num <br>";
			$even_num+=2;
		}
		echo "The value of num after loop runs is: $even_num <br>";

		// 
		$count = 10;
		while($count  >= 0){
			echo "abc ";
			$count --;
		}
		echo "<br>";
		$multiple_three = 0;
		while($multiple_three <= 100){
			if($multiple_three % 3 == 0){
				echo $multiple_three . "<br>";
			} else{
				echo $multiple_three . " is not a multiple of three <br>";
			}
			$multiple_three++;
		}
		
	?>
	<h1>For-loop</h1>
	<?php  
	//A for loop is a compact version of a while
	// countervariable
	// while(condition){
	// 	print something
	// 	increment
	// }
	// Syntax of a for loop
	// for(counter; condition; increment){
	// 	code tobe run
	// }
	for($y=0; $y <= 10; $y++){
		echo "For loop runniing.....Number is: $y <br>";
	}
	// print even numbers from 20 to 40;
		for($k=20; $k <=40; $k+=2){
			echo "Even number from 20 is : $k <br>";
		}
		// 
		// echo "<hr>";
		for($z=50; $z <= 70; $z++){
			if($z % 2 == 0){
				echo "$z is an even number<br>";
			} else{
				echo "$z is an odd number <br>";
			}
		}
		echo "<p> Square for numbers 1 - 12 </p>";
		for($sq =1; $sq <=12; $sq++){
			$square = $sq * $sq;
			echo "$sq * $sq = $square <br>";
		}
	?>
	<p>Using either a while or forloop, between 0 - 115, print fizz if a number is a multiple of 3, print buzz if a number is a multiple of 5, print FizzBuzz if a number is both a multiple of 3 and 5, else,print the number..</p>
	<p>Using a for loop, print this to the screen <br># <br>## <br> ### <br> #### <br> ##### <br> ###### <br> ####### <br> 	
	
	</p>




	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>
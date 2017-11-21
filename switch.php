<!DOCTYPE html>
<html>
<head>
	<title>PHP Switch statements</title>
</head>
<body>
	<?php 
		echo "<h1>PHP SWitch Statement</h1>";

		$weatherCondition = "Windy";
		if($weatherCondition == "Sunny"){
			echo "It's pretty hot, kindly wear something light <br>";
		}elseif ($weatherCondition == "Rainy") {
			echo "Carry an umbrella <br>";
		} elseif($weatherCondition == "Windy"){
			echo "Maybe wear sunglasses, there's gonna be debri in the air <br>";
		}elseif ($weatherCondition == "Snowy") {
			echo "It's snowy, kindly stay indoors";
		}else{
			echo "No such weather condition";
		}
		echo "<br><hr> <h2>Switch statement<h2>";
		/* Syntax
		 $value = "value"
		switch(value){
			case test_value:
				code to be run;
				break;
		}
		*/
		$weatherCond = "not in conditiony";
		switch($weatherCond){
			case "Sunny":
				echo "It's sunny, wear something light<br>";
			break;
			case 'Windy':
				echo "Maybe wear sunglasses, there's gonna be debri in the air <br>";
			break;
			case "Rainy":
				echo "It's raining, carry an umbrella <br>";
			break;
			case "Stormy":
				echo "Remain indoors, it could get ustormy <br>";
			break;
			default:
				echo "No such weather condition<br>";
		}

	?>
	<h4>Chinese Zodiac sign</h4>
	<?php  
	$yearOfBirth = 1997;
	echo "I was born in the year " . $yearOfBirth . "<br>";
	switch(($yearOfBirth - 4) % 12){
		case 0: $zodiac = "Monkey"; break;
		case 1: $zodiac = "Ox"; break;
		case 2: $zodiac = "Tiger"; break;
		case 3: $zodiac = "Rabbit"; break;
		case 4: $zodiac = "Dragon"; break;
		case 5: $zodiac = "Rooster"; break;
		case 6: $zodiac = "Elephant"; break;
		case 7: $zodiac = "Dog"; break;
		case 8: $zodiac = "Cat"; break;
		case 9: $zodiac = "Lion"; break;
		case 10: $zodiac = "Sushi"; break;
		case 11: $zodiac = "Snake"; break;
	}
	echo "$yearOfBirth is the year of the $zodiac";
	?>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>
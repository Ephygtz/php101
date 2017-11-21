<!DOCTYPE html>
<html>
<head>
	<title>WOrking with Arrays</title>
</head>
<body>
	<h2>Working with arrays</h2>
	<?php  
	echo "<h4>Indexed arrays</h4>";
	//An array is a variable that stores multiple values 
	$myArray = array(23, 45.09, "string", "Another string", false, array("nested", 56)) ;
	$secondArray = ["Imaelda", "Nathan", "Levi"];

	print_r($myArray);
	//How to access indexed arrays
	echo "<br>";
	echo "Item at position 3 is: " . $myArray[2];
	echo "<br>";
	echo "The item at first position is: " . $secondArray[0];
	echo "<br>";

	$mixedArray = ["eMobilis", "Ephraim", 27, array("Print me", "Print me too!!"), true];
	echo "Values in the nested array are: " . $mixedArray[3][1];
	$mixedArray[0] = "This class is awesome";
	print_r($mixedArray);
	$mixedArray[] = "New value";
	print_r($mixedArray);

	?>
	<h2>Associative arrays</h2>
	<?php  
	$assoc = array("first_name" => "Ephraim", "last_name" => "Githinji", "hobby" => "Caffeineting", "best_site" => "reddit");
	echo "My names are: " . $assoc["first_name"] . " " .$assoc["last_name"]. " and my hobby is " . $assoc["hobby"] . " and i love to visity " . $assoc['best_site'];
	$assoc["favorite_language"] = "JavaScript";
	echo "<pre>";
	print_r($assoc);
	echo "</pre>";
	$num = [23, 56, 67, "String value"];
	echo "<pre>";
	print_r($num);
	echo "</pre>";
	echo "<br>";
	
	$marks = array(
			"Imelda" => array(
				"PHP" => 42,
				"HTML" => 74,
				"CSS" => 89
				),
			"Nathan" => array(
				"PHP" => 69,
				"HTML" => 83,
				"CSS" => 24
				),
			"Levi" => array(
				"PHP" => 69,
				"HTML" => 83,
				"CSS" => 24
				)
		);
	echo "<pre>";
	print_r($marks);
	echo "</pre>";

	?>

	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>
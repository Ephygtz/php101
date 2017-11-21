<!DOCTYPE html>
<html>
<head>
	<title>For each loop in PHP</title>
</head>
<body>
	<?php  
		echo "<h1>For each loops in PHP</h2>";

		//first way
		$numbers = array(34,75, 89, 34, 876);
		print_r($numbers);
		echo "<br>";
		echo "Item at position 3 is: " . $numbers[2] . "<br>";

		echo "Item at position 4 is: " . $numbers[3] . "<br>";
		echo "Count items in my array " . count($numbers) . "<br>";
		echo "Max value in my array: " . max($numbers) . "<br>";
		echo "Sort array: " . sort($numbers);
		echo "<pre>";
		print_r($numbers);
		echo "</pre>";
		echo "Reverse sort array: " .rsort($numbers);
		echo "<pre>";
		print_r($numbers);
		echo "</pre>";
		echo "<h3>Nesting arrays</h3>";
		$mixedArray = [45, "Ephraim", false, array("Hobby", "stack overflow"), "Class is awesome"];
		echo "<pre>";
		print_r($mixedArray);
		echo "</pre>";
		echo "<br><hr>";
		echo "My name is " .$mixedArray[1] ." and i'm " . $mixedArray[0] . " old. My ". $mixedArray[3][0] . " is visiting ". $mixedArray[3][1] ." and this  
		". $mixedArray[4];
	?>
	<h3>Associative arrays</h3>
	<?php  
		$grades = ["Anto" => "42", "Hamdi"=> "90", "Levi"=> "65", "Imelde" => "32"];
		echo "<pre>";
		print_r($grades);
		echo "</pre>";
		echo "Anto got
		; " . $grades["Anto"] . " Marks";
		echo "<h1>Using a for-loop to access values in an indexed Array</h1>";
		$hobbies = ["Drinkinking Coffee", "Attending hackathons", "Watching the sunset"];
		print_r($hobbies);
		echo "<br>";
		$arrayLength = count($hobbies);
		for($i = 0; $i < $arrayLength; $i++ ){
			echo "The item at index " .$i . " is: ; " . $hobbies[$i] . "<br>";
		}
		$add10 = [21, 45, 78, 6543, 1000];
		// using a for loop, add 10 to every element in the array, then print out, "The element at index after adding 10 is :"
		print_r($add10);
		for($z=0; $z < count($add10); $z++){
			echo "The element at indesx " .$z . " after 1dding 10 is:" . ($add10[$z] +10) . "<br>";
		}
		echo "<h2> For each loop</h2>";
		$names = ["Strings", 45, 45.78, "Name"];
		foreach($add10 as $name){
			echo "name: :" . $name . "<br>";
		}
		echo "Associative array <br>";
		$ages = ["Hamdi" => 16, "Levi" => 19, "Alexx" => 21];
		foreach($ages as $key => $value){
			echo $key . " is: " . $value ." years old<br>";
		}
		echo "<h3>Real case use </h3><hr>";

		$person = array(
			"first_name" => "Ephraim",
			"last_name" => "The Guy",
			"address" => "Gigiri, Nairobi",
			"Country" => "kenya",
			"email_id" => "ephraim@emobilis.org"
		);
		echo "<pre>";
		print_r($person);
		echo "</pre>";
		echo "<h3>prettify this data</h3>";
		foreach($person as $attribute => $data){
			$attr_pretty = ucwords(str_replace("_", " ", $attribute));
			echo $attr_pretty ." : " .$data . "<br>";
		}
	?>
	<h1>Exercise</h1>
	<p>Create an indexed array with the following values : Tokyo, Mexico City, New York City, Mumbai, Seoul, Shanghai, Lagos, Buenos Aires, Cairo, London. <br> Using a foreach loop, print the values out separetad by a comma. <br> Sort the array, then print the values to the browser. <br> Add the corresponding countries, now in an associative array to the array: Tokyo, Mexico City, New York City, Mumbai, Seoul, Shanghai, Lagos, Buenos Aires, Cairo, London and print this out, using the countries as key, <br> <strong>"$city is in $country</strong></p>

	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</body>
</html>
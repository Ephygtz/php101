<!DOCTYPE html>
<html>
<head>
	<title>Loops Recap</title>
</head>
<body>
	<h5>Loops in PHP</h5>
	<ul>
		<li>While loop <br> <em>Syntax</em> <br> 
		<code>
			while(condition){
			code to be run
			-change condition
		}
		</code> 
	</li>
		<li>do-While loop <br>Syntax <br> do{ code to be run} while(condition); </li>
		<li>for loop <br> Syntax <br> for(initialize; condition;increment){ code to be run;}</li>
		<li>for-each loop <br>Syntax <br> foreach($array as $value){
			code to be executed
		} </li>
	</ul>
	<?php  
	echo "<hr><h2>While loop</h2>";

	$count = 0;
	while($count <=1000){
		echo "The value of count is: " .$count . "<br>";
		$count +=2; 
	}
	echo "The value of count after loop stops running is " .$count;
	echo "<h2>For Loop</h2>";
	for($counter=10; $counter <=50; $counter++){
		if($counter % 2 ==0){
			echo $counter . " is an even number <br>";
		} else {
			echo $counter . " is an odd number <br>";
		}
	}
	?>


	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>
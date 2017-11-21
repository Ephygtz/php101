<!DOCTYPE html>
<html>
<head>
	<title>PHP Inbuilt functions</title>
</head>
<body>
	<?php  
		echo "<h2>String       inbuilt functions</h2>";

		$first = "The quick brown fox";
		$second = " jumped over the lazy dog.";

		$third = $first;
		$third .= $second;
		echo $third;
	?>
	<br/ >
	Lowercase: <?php echo strtolower($third); ?><br>
	Uppercase: <?php echo strtoupper($third); ?><br>
	Uppercase first: <?php echo ucfirst($third); ?> <br />
	Uppercase word: <?php echo ucwords($third); ?> <br>	
	Length: <?php echo strlen($third); ?> <br>
	Find: <?php echo strstr($third, "brown"); ?> <br>
	Replace: <?php echo str_replace("quick", "super-fast", $third); ?> <br>
	Repeat: <?php echo str_repeat($third, 4); ?> <br>
	Make substring: <?php echo substr($third, 3, 12) ?> <br>
	Find position: <?php echo strpos($third, "fox"); ?>
</body>
</html>
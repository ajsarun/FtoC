<html>
<body>
<?php 
	$f = $_GET["fahrenheit"];
	$c = 5.0/9.0 * ($f - 32);
	echo "<h1>";
	echo $f." Fahrenheit is " .$c. " Celsius";
	echo "</h1>";  
?>
</body>
</html>
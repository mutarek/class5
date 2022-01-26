<!DOCTYPE html>
<html>
<head>
	<title>Advance Calculator</title>
</head>
<body>
	<h1>This is Our Advance Calculator</h1>

	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
		<label>Enter Somethings</label>
		<br></br>
	<input type="text" name="usertext">
<br></br>
<input type="number" name="usernumber">
<br></br>
<input type="submit" name="call" value="Show">
	</form>

	<?php
	if (isset($_GET['call'])) {
		$text = $_GET['usertext'];
		$number = $_GET['usernumber'];
	  	if (!empty($text) || !empty($number)) {
	  		for ($i=0; $i <$number ; $i++) { 
	  			echo "<h1 style='color:green'> $text </h1> <br>";
	  		}
	  	}
	  	else
	  	{
	  		echo "All Flild Are Required";
	  	}
	  }  
	 ?>

</body>
</html>
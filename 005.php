<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<form method="post">
			<input type="number" name="unum" placeholder="Enter your birth year">
			<input type="submit" value="OK">

		</form>
</body>
</html>

<?php
	$unum = $_POST['unum'];
	$unum -= 638;
	$unum %= 7;
	echo "Your Maharbote = $unum <br>";

	$a="Hello ";

	for ($i=0; $i <6 ; $i++) { 
		$a.="World";
	}
	
	echo $a;
  ?>
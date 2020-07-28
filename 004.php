<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<input type="color" name="a">
		<input type="submit" value="Choose Color">
	</form>
</body>
</html>

<?php 
	$c = $_POST['a'];
	echo "<h1 style='color:$c'> hello </h1>";
 ?>
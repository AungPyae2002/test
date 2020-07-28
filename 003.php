<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<input type="color" name="a" >
		<input type="submit" value="choose">
	</form>
		
</body>
</html>

<?php 
	$a = $_POST['a'];
	echo $a;
	
 ?>
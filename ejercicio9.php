<?php
if ($_POST){

	$valorA=$_POST['valorA'];
	$valorB=$_POST['valorB'];

	if ($valorA > $valorB){

		echo "El valor de A es mayor que el valor de B";
	}
}



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<form action="ejercicio9.php" method="post">
	valor A:
	<input type="text" name="valorA" id="">
	<br/>
	valor B:
	<input type="text" name="valorB" id="">
	<br/>
	<input type="submit" value="Calcular" >

		
	</form>

</body>
</html>
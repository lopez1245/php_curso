<?php
if ($_POST){

	$valorA=$_POST['valorA'];
	$valorB=$_POST['valorB'];

	if ($valorA != $valorB){

		echo "El valor de A es DIFERENTE al de B";
	}else{
		echo "el valor de A es igual al de B";
	}

}



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>if y else</title>
</head>
<body>

	<form action="ejercicio12.php" method="post">
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
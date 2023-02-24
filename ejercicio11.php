<?php
if ($_POST){

	$valorA=$_POST['valorA'];
	$valorB=$_POST['valorB'];

	$suma=$valorA+$valorB;

	$resta=$valorA-$valorB;

	$division=$valorA/$valorB;
	
	$multiplicacion=$valorA*$valorB;

	echo "<br/>".$suma;
	echo "<br/>".$resta;
	echo "<br/>".$division;
	echo "<br/>".$multiplicacion;
	if ($valorA=$valorB) {
		
		echo "el valor de A igual a el valor de b <br/>";
		if ($valorA==4){
			echo "el valor es 4 <br/>";

		}
		if ($valorA==5){
			echo "El valor es 5 <br/>";
		}
	}
	if ( ($valorA==$valorB) && ($valorA==4) ) {

		echo "El valor de A es igual a B y es un numero 4";
		// code...
	}

}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>If Anidado </title>
</head>
<body>

	<form action="ejercicio11.php" method="post">
		Valor A:
		<input type="text" name="valorA" id="">
		<br/>
		Valor B:
		<input type="text" name="valorB" id="">
		<br/>

		<input type="submit" value="Calcular">
	</form>



</body>
</html>
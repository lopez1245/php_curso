<?php

if ($_POST) {

	$boton=$_POST['btnValor'];

	switch($boton){

		case 1:
				echo "presiono el boton 1";
		break;

		case 2:
				echo "presiono el boton 2";
		break;

		case 3:
				echo "presiono el boton 3";
		break;
			
	}

}



?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>uso de sw</title>
</head>
<body>

	<form action="ejercicio13.php" method="post">

	<input type="submit" name="btnValor" value="1">
	<br/>
	<input type="submit" name="btnValor" value="2">
	<br/>
	<input type="submit" name="btnValor" value="3">	
		
	</form>

</body>
</html>
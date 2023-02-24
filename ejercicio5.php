<?php
if ($_POST) {
	$txtNombre=$_POST['txtNombre'];
	$txtApellido=$_POST['txtApellido'];
	echo "Hola ".$txtNombre." ".$txtApellido;
	
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
</head>
<body>
	<form action="ejercicio5.php" method="post">

   	   Nombre:
   	 	<input type="text" name="txtNombre" id="">
    	<br/>

        Apellido
    	<input type="text" name="txtApellido" id="">
    	<br/>

    	<input type="submit" name="Enviar">

   </form>
</body>
</html>
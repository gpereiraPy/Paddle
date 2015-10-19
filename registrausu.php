<!-- Archivo que inserta datos de usuarios en la bd -->
<html>
<head>
	<title></title>
</head>
<body>
	<?php 

		require ("conexion.php");

		$nombre = $_GET['nombretxt'];
		$edad = $_GET['edadtxt'];
		$direccion = $_GET['direcciontxt'];
		$email = $_GET['emailtxt'];
		$telef= $_GET['teltxt'];

		$query= "Insert into usuarios (nombre, edad, email, telefono, direccion) values ('$nombre','$edad','$email','$telef','$direccion')";
		$datos= mysqli_query($conexion,$query) or die("ERROR, No se realizo el registro: ".mysqli_error($conexion));

		echo "Datos registrados exitosamente<br>";
		echo "<br><br><a href='index.html'> Inicio </a>";	

	 ?>



</body>
</html>
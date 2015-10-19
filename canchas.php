<!-- Archivo que consulta canchas alquiladas -->
<html>
<head>
	<title></title>
</head>
<body>
	<h2> Canchas y Horas Alquiladas </h2>
	<style type="text/css">

		body {
			background-image: url(http://www.zonaps.es/_img_fondo/fondo09.jpg);
		}
		h2, td, th, p {
			color: white;
		}
	</style>

<?php 

	require ("conexion.php"); //incluye archivo conexion.php que tiene los datos de conexion a la base de datos

	
	//Obtener datos ingresados por usuario
	$fecha = $_GET['fecha'];
	$hora = $_GET['hora'];

	//Consulta para la bd
	$query = "Select fecha, hora, id_cancha, cant_hora from alquiler where fecha='$fecha' and hora='$hora' limit 10"; 
	$datos = mysqli_query($conexion,$query);
	
	//estilo para la tabla
	echo "<style type='text/css'> td, th, h1,h2{color: white;} </style>";
	
	//tabla contenedora de datos
	echo "<table border='2'>";
		
	echo "<th>Fecha</th><th>Hora</th><th>Cancha</th><th>Horas Alquiladas</th>";
	if (!$renglon=mysqli_fetch_array($datos)) {
		echo "<p>No hay registros para esta consulta</p> <br><br>";
	}else{
	
		while ($renglon=mysqli_fetch_array($datos)) {
			echo "<tr>";
			echo "<td>".$renglon['fecha']."</td>";
			echo "<td>".$renglon['hora']."</td>";
			echo "<td>".$renglon['id_cancha']."</td>";
			echo "<td>".$renglon['cant_hora']."</td>";
		
		echo "</tr>";
		}
	echo "</table>";	
	}
	echo "<style> A:visited { text-decoration: none ; color: white; </style>";
	echo "<br><br><a href='index.html'> Inicio </a>";

 ?>

 </body>
</html>
<!-- Archivo para Consulta de alquiler por usuario -->

<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">
		body {
			background-image: url(http://www.mundipadel.com/wp-content/uploads/2015/05/kdp0460.jpg);
		}	
		h2, td, th {
			color: white;
		}
	
	</style>
<?php 

	require ("conexion.php");

	$fecha = $_GET['fecha2'];
	$usuario = $_GET['user'];
	


	$query= "Select a.nombre, b.id_cancha, b.fecha, b.hora, b.cant_hora
	from alquiler as b 
	left join usuarios as a 
	on b.id_usuario= a.id_usuario 
	where b.fecha='$fecha' and a.nombre like '$usuario%' limit 10";
	

	$datos = mysqli_query($conexion,$query);

	echo "<table border='2'>";
	
	echo "<h2> Alquiler por Usuario </h2> <br>";
	echo "<th>Nombre</th><th>Cancha</th><th>Fecha</th><th>Horario</th><th>Horas Alquiladas</th>";
	
		while ($renglon=mysqli_fetch_array($datos)) {
			echo "<tr>";
			echo "<td>".$renglon['nombre']."</td>";
			echo "<td>".$renglon['id_cancha']."</td>";
			echo "<td>".$renglon['fecha']."</td>";
			echo "<td>".$renglon['hora']."</td>";
			echo "<td>".$renglon['cant_hora']."</td>";
	
		echo "</tr>";

		}
	echo "</table>";	
	
	echo "<style> A:visited { text-decoration: none ; color: white; </style>";
	echo "<br><br><a href='index.html'> Inicio </a>";
 ?>

 </body>
</html>
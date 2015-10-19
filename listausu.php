<!-- Archivo para listado de todos los usuarios registrados -->

<html>
<head>
	<title></title>
</head>
<body>
	<h1> Canchas - Padelmania</h1>
	<h4> Listado de Usuarios </h4>
		<style type="text/css">
		body {

			background-image: url(http://www.zonaps.es/_img_fondo/fondo09.jpg);
		}

		h1, h4{
			color: white;
		}
		div {
			background: white;
			width: 590px;
			margin: left;
			padding-left: 5px;
		}

		</style>


	<?php 

		require("conexion.php");

		$query = "Select * from usuarios";

		$datos = mysqli_query($conexion,$query);

		echo "<div>";
		echo "<table border='2'>";

		echo "<th>ID</th><th>Nombre</th><th>Edad</th><th>Email</th><th>Telefono</th><th>Direccion</th>";
			if (!$renglon=mysqli_fetch_array($datos)) {
				echo "No hay registros para esta consulta <br><br>";
			}else{
			
				while ($renglon=mysqli_fetch_array($datos)) {
					echo "<tr>";
					echo "<td>".$renglon['id_usuario']."</td>";
					echo "<td>".$renglon['nombre']."</td>";
					echo "<td>".$renglon['edad']."</td>";
					echo "<td>".$renglon['email']."</td>";
					echo "<td>".$renglon['telefono']."</td>";
					echo "<td>".$renglon['direccion']."</td>";
				echo "</tr>";
				}
			echo "</table>";	
		echo "</div>";
			}

	 ?>
</body>
</html>
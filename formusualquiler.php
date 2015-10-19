<!-- Formulario para consultas de alquiler por usuario -->
<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">
		body {

			background-image: url(http://www.ronald-hernandez.com/Fotos_Servicios/13036833770.jpg);
		}
		h1, h4 {
			color: white;
		}

		form {
			background: white;
			width: 190px;
			margin: left;
			padding-left: 5px;
		}
		p {
			padding: 7px;
		}

	</style>
	<h1> Canchas - Padelmania</h1><br>
	<h4> Consulta de Usuario - Alquiler </h4>
	<form action="consultauser.php" method="GET">
		<p>Ingresa fecha</p>
		<input type="text" name="fecha2"><br>
		<p>Ingresa nombre de Usuario</p>
		<input type="text" name="user"><br><br>
		<input type="submit">
	</form>

</body>
</html>


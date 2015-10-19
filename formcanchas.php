<!-- Formulario para consulta de canchas alquiladas -->

<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">
		body {

			background-image: url(http://theobjective.com/externals/theluxonomistimages/padelpala.jpg);
		}
		h1, p, h4 {
			color: white;
		}

	</style>
	<h1> Canchas - Padelmania</h1><br>
	<h4> Consulta de Canchas disponibles </h4>
	<form action="canchas.php" method="GET">
			<p>Ingresa Fecha</p>
			<input type="text" name="fecha"><br>
			<p>Ingresa Hora</p>
			<input type="text" name="hora"><br><br>
			<input type="submit"><br><br>
	</form> 


</body>
</html>
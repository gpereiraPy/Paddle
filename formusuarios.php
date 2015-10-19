<!-- Formulario para registro de usuarios -->

<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">
		body {

			background-image: url(http://www.ronald-hernandez.com/Fotos_Servicios/13036833770.jpg);
		}
		h1, h4{
			color: white;
		}
		form {
			background: white;
			width: 240px;
			margin: left;
			padding-left: 5px;
		}
		p {
			padding: 7px;
		}
	</style>

	<h1> Canchas - Padelmania</h1>
	<h4> Registro de Usuarios </h4>
	<form action="registrausu.php" method="GET">
		<table>
			<tr>
				<td>Nombre </td>
				<td><input type="text" name="nombretxt"></td>
			</tr>
			<tr>
				<td>Edad </td>
				<td><input type="text" name="edadtxt"></td>
			</tr>
			<tr>
				<td>Direccion </td>
				<td><input type="text" name="direcciontxt"></td>
			</tr>
			<tr>
				<td>Email </td>
				<td><input type="email" name="emailtxt"></td>
			</tr>
			<tr>
				<td>Telefono </td>
				<td><input type="text" name="teltxt"></td>
			</tr>
			<tr></tr>
			<tr>

				<td><input type="submit"></td>
			</tr>

		</table>

	</form>

</body>
</html>
<?php 

	//datos de conexion a la Base de Datos 

		$server="localhost";
		$user="root";
		$pass="";
		$db="paddle";

		$conexion = mysqli_connect($server, $user, $pass) or die("Error al conectar".mysql_error());
			if ($conexion){

			mysqli_select_db($conexion, $db);
			
			}



 ?>
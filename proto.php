<?php

	$dbserver = mysqli_connect('127.0.0.1', 'root', '','proyecto');//conexion a base de datos local
			if (!$dbserver)die('No se logro la conexion'.mysqli_error()) ;//Muestra un error en la conexion 
	
	//Realiza la consulta a la base de datos
	$resultado_consulta_mysql=mysqli_query($dbserver,'SELECT * FROM hardware');
	//Recorre la db para recoger el dato
	while($registro=mysqli_fetch_array($resultado_consulta_mysql)){
 	echo $registro['status']."<br>";
 	echo $registro['producto']."<br>";
	}
	//termina la conexion
	mysqli_close($dbserver);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	
	require("variables_conexion.php");
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);
	
	if(mysqli_connect_errno()){
		
		echo "FALLO EN LA CONEXI&Oacute;N";
		exit();
		
	}
	
	mysqli_select_db($conexion,$db_nombre) or die ("NO SE ENCONTRO LA BASE DE DATOS");
	
	mysqli_set_charset($conexion,"utf8");
	
	$consulta="INSERT INTO PRODUCCION (CODIGO, NOMBRE, PRECIO, CANTIDAD, DEPARTAMENTO, FECHA_CREACION, FECHA_VENCIMIENTO, CODIGO_LOTE) VALUES ('T005F', 'FRESA', 550, 276, 'TETAS', '08 09 2017', '09 12 2017', 'T22A')";
	
	$resultado=mysqli_query($conexion,$consulta);
	
	mysqli_close($conexion);
	
?>
</body>
</html>
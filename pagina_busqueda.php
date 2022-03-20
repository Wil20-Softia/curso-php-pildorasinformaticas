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
	
	$consulta="SELECT * FROM PRODUCCION WHERE CANTIDAD < 200";
	
	$resultado=mysqli_query($conexion,$consulta);
	
	echo "<table align='center' border='2px' bgcolor='#66FF99' width='100%'><tr><td>CODIGO</td><td>NOMBRE</td><td>PRECIO</td><td>CANTIDAD</td><td>DEPARTAMENTO</td><td>FECHA DE CREACI&Oacute;N</td><td>FECHA DE VENCIMIENTO</td><td>CODIGO DE LOTE</td></tr>";
	
	while($fila=mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
		
		echo "<tr><td>". $fila['CODIGO'] . "</td><td>";
		echo $fila['NOMBRE'] . "</td><td>";
		echo $fila['PRECIO'] . "</td><td>";
		echo $fila['CANTIDAD'] . "</td><td>";
		echo $fila['DEPARTAMENTO'] . "</td><td>";
		echo $fila['FECHA_CREACION'] . "</td><td>";
		echo $fila['FECHA_VENCIMIENTO'] . "</td><td>";
		echo $fila['CODIGO_LOTE'] . "</td></tr>";
	
	}
	
	echo "</table>";
	
	mysqli_close($conexion);
?>
</body>
</html>
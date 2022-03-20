<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	
	$codigo=$_GET["codigo"];
	$nombre=$_GET["nombre"];
	$precio=$_GET["precio"];
	$cantidad=$_GET["cantidad"];
	$departamento=$_GET["departamento"];
	$f_c=$_GET["f_c"];
	$f_v=$_GET["f_v"];
	$c_l=$_GET["c_l"];
	
	require("variables_conexion.php");
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);
	
	if(mysqli_connect_errno()){
		
		echo "FALLO EN LA CONEXI&Oacute;N";
		exit();
		
	}
	
	mysqli_select_db($conexion,$db_nombre) or die ("NO SE ENCONTRO LA BASE DE DATOS");
	
	mysqli_set_charset($conexion,"utf8");
	
	$consulta="INSERT INTO PRODUCCION (CODIGO, NOMBRE, PRECIO, CANTIDAD, DEPARTAMENTO, FECHA_CREACION, FECHA_VENCIMIENTO, CODIGO_LOTE) VALUES ('$codigo', '$nombre', $precio, $cantidad, '$departamento', '$f_c', '$f_v', '$c_l')";
	
	$resultado=mysqli_query($conexion,$consulta);
	
	if($resultado==false){
		
		echo "REGISTO FALLIDO";
	
	}else{
		
		echo "REGISTRO GUARDADO CON EXITO<br><br>";
		
		echo "<table><tr><td>CODIGO: </td><td>$codigo</td></tr>";
		echo "<tr><td>NOMBRE: </td><td>$nombre</td></tr>";
		echo "<tr><td>PRECIO UNITARIO: </td><td>$precio</td></tr>";
		echo "<tr><td>CANTIDAD: </td><td>$cantidad</td></tr>";
		echo "<tr><td>DEPARTAMENTO: </td><td>$departamento</td></tr>";
		echo "<tr><td>FECHA DE CREACIÓN: </td><td>$f_c</td></tr>";
		echo "<tr><td>FECHA DE VENCIMIENTO: </td><td>$f_v</td></tr>";
		echo "<tr><td>CODIGO DEL LOTE DE PRODUCCIÓN: </td><td>$c_l</td></tr></table>";
		
	}
	
	mysqli_close($conexion);
	
?>
</body>
</html>
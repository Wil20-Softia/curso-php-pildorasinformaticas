<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	
	$codigo=$_GET["codigo"];
	
	require("variables_conexion.php");
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);
	
	if(mysqli_connect_errno()){
		
		echo "FALLO EN LA CONEXI&Oacute;N";
		exit();
		
	}
	
	mysqli_select_db($conexion,$db_nombre) or die ("NO SE ENCONTRO LA BASE DE DATOS");
	
	mysqli_set_charset($conexion,"utf8");
	
	$consulta="DELETE FROM PRODUCCION WHERE CODIGO LIKE '$codigo'";
	
	$resultado=mysqli_query($conexion,$consulta);
	
	if($resultado==false){
		
		echo "CONSULTA FALLIDA";
	
	}else{
		
		if(mysqli_affected_rows($conexion)==0){
			
			echo "NO HAY PRODUCTOS REGISTRADOS CON EL SIGUIENTE CODIGO: ". $codigo;
		
		}else if(mysqli_affected_rows($conexion)==1){
			
			echo "SE HA ELIMINADO SATISFACTORIAMENTE EL PRODUCTO";
			
		}else{
			
			echo "SE HAN ELIMINADO SATISFACTORIAMENTE ". mysqli_affected_rows($conexion) ." PRODUCTOS";
			
		}
		
	}
	
	mysqli_close($conexion);
	
?>
</body>
</html>
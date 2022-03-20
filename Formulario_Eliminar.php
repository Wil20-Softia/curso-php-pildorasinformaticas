<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Eliminación de Productos</title>
<style>

h1{
	text-align:center;
	color:#00F;
	border-bottom:dotted #0000FF;
	width:50%;
	margin:auto;
}

table{
	border:1px solid #F00;
	padding:20px 50px;
	margin-top:50px;
}

body{
	background-color:#FFC;
}
</style>

</head>

<body>
<h1>Eliminación de Productos</h1>
<form name="form1" method="get" action="Eliminar_Registro.php">
  <table align="center">
    <tr>
      <td><label for="codigo">Código</label></td>
      <td><input type="text" name="codigo" id="codigo" required></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="enviar" id="enviar" value="Eliminar"></td>
      <td align="center"><input type="reset" name="Borrar" id="Borrar" value="Borrar"></td>
    </tr>
  </table>
</form>
</body>
</html>
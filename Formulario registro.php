<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro de Producción</title>
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
<h1>Registro de Artículos</h1>
<form name="form1" method="get" action="Insertar_Registro.php">
  <table align="center">
    <tr>
      <td><label for="codigo">Código</label></td>
      <td><input type="text" name="codigo" id="codigo" required></td>
    </tr>
    <tr>
      <td><label for="nombre">Nombre</label></td>
      <td><input type="text" maxlength="10" name="nombre" id="nombre" required></td>
    </tr>
    <tr>
      <td><label for="precio">Precio</label></td>
      <td><input type="number" name="precio" id="precio" required></td>
    </tr>
    <tr>
      <td><label for="cantidad">Cantidad</label></td>
      <td><input type="number" name="cantidad" id="cantidad" required></td>
    </tr>
    <tr>
      <td><label for="departamento" >Departamento</label></td>
      <td><select name="departamento" id="departamento">
      		<option value="">&nbsp;</option
      		<option value="HELADOS CREMOSOS">HELADOS CREMOSOS</option>
            <option value="TETAS">TETAS</option>
            </select>
      </td>
    </tr>
    <tr>
      <td><label for="f_c">Fecha de Creación</label></td>
      <td><input type="date" name="f_c" id="f_c" required></td>
    </tr>
    <tr>
      <td><label for="f_v">Fecha de Vencimiento</label></td>
      <td><input type="date" name="f_v" id="f_v" required></td>
    </tr>
    <tr>
      <td><label for="c_l">Codigo de Lote</label></td>
      <td><input type="text" name="c_l" id="c_l" required></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="enviar" id="enviar" value="Guardar"></td>
      <td align="center"><input type="reset" name="Borrar" id="Borrar" value="Borrar"></td>
    </tr>
  </table>
</form>
</body>
</html>
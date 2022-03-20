<?PHP
$nombre= $_REQUEST['nom'];
$edad= $_REQUEST['edad'];
$cargo= $_REQUEST['cargo'];

$num= (int)$edad;

echo	"Su Nombre es: " . $nombre . ". Tiene un cargo de: " . $cargo . ". Y tiene " . ($num-1) . " años mas 1";

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<script>
function enviar(){
	var nombre = document.forms.formulario.nompal.value;
	var edad = document.forms.formulario.edad.value;
	var cargo = document.forms.formulario.cargo.value;
	
	window.location = "prueba1.php?nom=" + nombre + "&edad=" + edad + "&cargo=" + cargo;
}
</script>
</head>

<body>
<form name="formulario" method="post" action="javascript:enviar()">

<label> Nombre y Apellido: </label><br>
<input size="50" type="text" name="nompal"><br><br>

<label> Edad: </label><br>
<input size="50" type="number" name="edad"><br><br>

<label> Cargo: </label><br>
<input size="50" type="text" name="cargo"><br><br>
<hr>
<input type="submit" value="Enviar la Información" name="enviar">
</form>
</body>
</html>

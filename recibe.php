<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?PHP
$nombre= $_REQUEST['nom'];
$edad= $_REQUEST['edad'];
$cargo= $_REQUEST['cargo'];

$num= (int)$edad;

echo	"Su Nombre es: " . $nombre . ". Tiene un cargo de: " . $cargo . ". Y tiene " . ($num-1) . " años mas 1";

?>
</body>
</html>

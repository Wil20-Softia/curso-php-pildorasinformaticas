<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<script>

var edad=20;

<?php
	(int)$edad = "<script>document.write(edad);</script>";
?>

</script>
</head>

<body>
<?php 
	if($edad == "20"){
		echo "Aprovecha el tiempo Tienes ".$edad." años de edad";
	}else if($edad != "20"){
		echo "Ponte las Pilas Menor tu edad es de ".$edad;	
	}
?>
</body>
</html>
<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>

<?php

	if(isset($_POST["enviando"])){
		edad=$_POST["edad_usuario"];
		
		if(edad>=0 && edad<=18){
			echo "ERES MENOR DE EDAD";
		}else if(edad<=40){
			echo "ERES JOVEN";
		}else if(edad<=65){
			echo "ERES MADURO";
		}else{
			echo "Cu&iacute;date";
		}
	}
?>
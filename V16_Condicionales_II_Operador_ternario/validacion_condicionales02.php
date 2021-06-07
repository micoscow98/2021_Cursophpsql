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

	if(isset($_POST['enviando'])){
		$contra=$_POST['contra'];

		$nombre=$_POST['nombre_usuario'];

		/*if($edad<18){
			echo "eres menor de edad. No tienes acceso";
		}else {
			echo "eres mayor de edad. Puedes acceder";
		}*/

		//echo $edad<18 ? "eres menor de edad. No puedes acceder" : "puedes acceder";

		$resultado= $nombre=="Juan" && $contra=="1234" ? "puedes acceder" : "no puedes acceder";
		echo $resultado;

	}

?>

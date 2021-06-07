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
		$contra=$_POST["contra_usuario"];

		$nombre=$_POST["nombre_usuario"];

		switch (true) :
			case $nombre=="Juan" && $contra=="1234":
				echo "Usuario autorizado. Hola Juan";
				break;
			case $nombre=="María" && $contra=="5555":
				echo "usuario autorizado. hola Maria";
				break;
			case $nombre=="Pedro" && $contra=="1111":
				echo "usuario autorizado. hola Pedro";
				break;

			default:
				echo "usuario no autorizado";

		endswitch;

		/*if($edad<=18){
			echo "eres menor de edad";
		}elseif ($edad<=40) {
			echo "eres joven";
		}elseif ($edad<=65) {
			echo "eres maduro";
		}else {
			echo "cu&iacute;date";
		}*/
	}

?>

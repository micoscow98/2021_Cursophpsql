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
		$edad=$_POST['edad_usuario'];

		if($edad<=18){
			echo "eres menor de edad";
		}elseif ($edad<=40) {
			echo "eres joven";
		}elseif ($edad<=65) {
			echo "eres maduro";
		}else {
			echo "cu&iacute;date";
		}
	}

?>

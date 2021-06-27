<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Documento sin titulo</title>
    </head>
    <body>
        <?php
            $datos=array("nombre"=>"juan","apellido"=>"gomez","edad"=>21);
            $datos["pais"]="españa";
            //echo $datos["apellido"];

            foreach ($datos as $clave=>$valor){
                echo "A $clave le corresponde $valor <br>";
            }
         ?>
    </body>
</html>

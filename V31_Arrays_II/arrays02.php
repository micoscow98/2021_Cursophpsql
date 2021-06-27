<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Documento sin titulo</title>
    </head>
    <body>
        <?php
            $datos=array("nombre"=>"juan","apellido"=>"gomez","edad"=>21);
            //echo $datos["apellido"];

            if(is_array($datos)){
                echo "es un array";
            }else{
                echo "no es un array";
            }
         ?>
    </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Documento sin titulo</title>
    </head>
    <body>
        <?php

            function incrementa($valor1){
                $valor1++;
                return $valor1;
            }
            $numero=5;
            echo incrementa($numero) . "<br>";
            echo $numero;

         ?>
    </body>
</html>

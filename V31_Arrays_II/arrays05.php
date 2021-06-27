<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Documento sin titulo</title>
    </head>
    <body>
        <?php
            $semana[]="lunes";
            $semana[]="martes";
            $semana[]="miercoles";
            $semana[]="jueves";

            for($i=0;$i<count($semana);$i++){
                echo $semana[$i] . "<br>";
            }
            $semana[]="viernes";
            for($i=0;$i<count($semana);$i++){
                echo $semana[$i] . "<br>";
            }
         ?>
    </body>
</html>

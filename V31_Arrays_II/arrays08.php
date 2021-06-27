<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Documento sin titulo</title>
    </head>
    <body>
        <?php
            $semana=array("lunes","martes","miercoles","jueves");
            sort($semana);

            for($i=0;$i<count($semana);$i++){
                echo $semana[$i] . "<br>";
            }
         ?>
    </body>
</html>

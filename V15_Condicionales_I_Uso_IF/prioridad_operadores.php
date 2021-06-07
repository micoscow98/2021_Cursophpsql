<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
    <?php

        $var1=true;
        $var2=false;
        //$resultado=$var1 && $var2;//rsultado=false
        $resultado=$var1 and $var2;//rsultado=true

        if($resultado==true){
            echo "correcto";
        }else{
            echo "incorrecto";
        }


     ?>
    </body>
</html>

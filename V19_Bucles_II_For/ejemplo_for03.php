<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            for ($i=0; $i <=20 ; $i+=2) {
                    echo "<p>hemos entrado en el bucle</p>";
                    if($i==6){
                        echo "<p>bucle interrumpido</p>";
                        break;
                    }
            }

         ?>

    </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            for ($i=10; $i =-10 ; $i--) {
                if($i==0){
                    echo "division por 0 no es posible <br>";
                    continue;
                }
                echo "9 / $i= " . 9/$i . "<br>";
            }
            echo "hemos salido del bucle";

         ?>

    </body>
</html>

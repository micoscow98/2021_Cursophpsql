<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php

            include("vehiculos.php");

            $mazda=new Coche();

            $pegaso=new Camion();

            

            echo "el mazda tiene " . $mazda->ruedas . " ruedas <br>";
            echo "el pegaso tiene " . $pegaso->ruedas . " ruedas <br>";





         ?>
    </body>
</html>

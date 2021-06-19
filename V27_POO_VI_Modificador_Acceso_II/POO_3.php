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

            echo "El mazda tiene " . $mazda->get_ruedas() . " ruedas<br>";
            echo "el pegaso tiene " . $pegaso->get_ruedas() . " ruedas<br>";
            echo " el mazda tiene motor de " . $mazda->get_motor(). " cc<br>";







         ?>
    </body>
</html>

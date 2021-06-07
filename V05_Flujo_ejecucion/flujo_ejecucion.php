<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Documento sin titulo</title>
</head>

<body>


    <?php

    echo "este es el primer mensaje <br>";

    //include ("proporciona_datos.php");

    require("proporciona_datos.php");

    dameDatos();

    echo "este es el segundo mensaje <br>";

    dameDatos();
    dameDatos();

    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>documento sin titulo</title>
    <style media="screen">
        .resaltar {
            color: #f00;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php

    $variable1 = "Casa";
    $variable2 = "CASA";

    //$resultado=strcmp($variable1,$variable2);//devuelve 1 si no son iguales. 0 si son iguales

    echo "el resultado es: " . $resultado . "<br>";

    $resultado = strcasecmp($variable1, $variable2);

    echo "el resultado es: " . $resultado . "<br>";

    if ($resultado) {

        echo "no coinciden";
    } else {

        echo "coinciden";
    }
    ?>
</body>

</html>
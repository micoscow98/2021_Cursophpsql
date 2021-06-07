<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Documento sin titulo</title>
    <style media="screen">
        .resaltar {
            color: #f00;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php

    $nombre = "juan";

    echo "<p class='resaltar'> esto es un ejemplo de clase</p>";

    echo "<p class=\"resaltar\"> esto es un ejemplo de clase</p>";

    echo "hola $nombre<br>";

    echo 'hola $nombre';


    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Documento sin titulo</title>
</head>

<body>
    <?php

    $nombre = "juan";

    function dameNombre()
    {
        global $nombre;
        $nombre = "El nombre es: " . $nombre;
    }

    dameNombre();

    echo $nombre;


    ?>
</body>

</html>
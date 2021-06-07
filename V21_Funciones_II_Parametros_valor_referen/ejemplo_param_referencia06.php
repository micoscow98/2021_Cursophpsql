<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Documento sin titulo</title>
    </head>
    <body>
        <?php

            function cambia_mayus(&$param){
                $param=strtolower($param);
                $param=ucwords($param);
                return $param;
            }
            $cadena="hOlA mUndO";
            echo cambia_mayus($cadena) . "<br>";
            echo $cadena;

         ?>
    </body>
</html>

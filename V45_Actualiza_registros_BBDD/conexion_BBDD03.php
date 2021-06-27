<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Documento sin titulo</title>
        <style media="screen">
            table{
                width: 50%;
                border: 1px dotted #FF0000;
                margin: auto;
            }
        </style>
    </head>
    <body>
        <?php

            require("datos_conexion.php");

            $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

            if(mysqli_connect_errno()){
                echo "fallo al conectar con la BBDD";
                exit();
            }

            mysqli_select_db($conexion, $db_nombre) or die ("no se encuentra la BBDD");

            mysqli_set_charset($conexion, "utf8");

            $consulta="SELECT * FROM PRODUCTOS  WHERE PAÍSDEORIGEN='ESPAÑA'";

            $resultados=mysqli_query($conexion, $consulta);

            while($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){

            echo "<table><tr><td>";

            echo $fila['CÓDIGOARTÍCULO'] . "</td><td> ";
            echo $fila['NOMBREARTÍCULO'] . "</td><td> ";
            echo $fila['SECCIÓN'] . "</td><td> ";
            echo $fila['IMPORTADO'] . "</td><td> ";
            echo $fila['PRECIO'] . "</td><td> ";
            echo $fila['PAÍSDEORIGEN'] . "</td><td></tr></table> ";


            echo "<br>";
            echo "<br>";

            }
            //mysql_close($conexion);

         ?>
    </body>
</html>

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

            while(($fila=mysqli_fetch_row($resultados))==true){

            echo "<table><tr><td>";

            echo $fila[0] . "</td><td> ";
            echo $fila[1] . "</td><td> ";
            echo $fila[2] . "</td><td> ";
            echo $fila[3] . "</td><td> ";
            echo $fila[4] . "</td><td> ";
            echo $fila[5] . "</td><td> ";
            echo $fila[6] . "</td><td></tr></table>";

            echo "<br>";
            echo "<br>";

            }
            //mysql_close($conexion);

         ?>
    </body>
</html>

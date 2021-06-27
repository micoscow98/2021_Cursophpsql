<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Documento sin titulo</title>
    </head>
    <body>
        <?php

            $db_host="localhost";
            $db_nombre="pruebas";
            $db_usuario="root";
            $db_contra="";

            $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

            if(mysqli_connect_errno()){
                echo "fallo al conectar con la BBDD";
                exit();
            }

            mysqli_select_db($conexion, $db_nombre) or die ("no se encuentra la BBDD");

            mysqli_set_charset($conexion, "utf8");

            $consulta="SELECT * FROM DATOSPERSONALES";

            $resultados=mysqli_query($conexion, $consulta);

            while(($fila=mysqli_fetch_row($resultados))==true){



            echo $fila[0] . " ";
            echo $fila[1] . " ";
            echo $fila[2] . " ";
            echo $fila[3] . " ";

            echo "<br>";

            }
            mysql_close($conexion);

         ?>
    </body>
</html>

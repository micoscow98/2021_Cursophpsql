<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>documento sin titulo</title>
    </head>
    <body>
        <?php


            //$busqueda=$_GET["buscar"];

            require("datos_conexion.php");

            $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

            if(mysqli_connect_errno()){
                echo "fallo al conectar con la BBDD";
                exit();
            }

            mysqli_select_db($conexion, $db_nombre) or die ("no se encuentra la BBDD");

            mysqli_set_charset($conexion, "utf8");

            $consulta="INSERT INTO PRODUCTOS (CÓDIGOARTÍCULO, SECCIÓN, NOMBREARTÍCULO) VALUES ('AR44', 'DEPORTES', 'RAQUETA BADMINTON')";

            $resultados=mysqli_query($conexion, $consulta);


            //mysql_close($conexion);


         ?>

    </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Documento sin titulo</title>
    </head>
    <body>
        <?php

            $busqueda=$_GET["buscar"];

            require("datos_conexion.php");

            $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

            if(mysqli_connect_errno()){
                echo "fallo al conectar con la BBDD";
                exit();
            }

            mysqli_select_db($conexion, $db_nombre) or die ("no se encuentra la BBDD");

            mysqli_set_charset($conexion, "utf8");

            $consulta="SELECT * FROM PRODUCTOS  WHERE NOMBREARTÍCULO LIKE '%$busqueda%'";

            $resultados=mysqli_query($conexion, $consulta);

            while($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){

            //echo "<table><tr><td>";

            echo "<form action='Actualizar.php' method='get'>";

            echo "<input type='text' name='c_art' value='" . $fila['CÓDIGOARTÍCULO'] . "'><br>";
            echo "<input type='text' name='n_art' value='" . $fila['NOMBREARTÍCULO'] . "'><br>";
            echo "<input type='text' name='seccion' value='" . $fila['SECCIÓN'] . "'><br>";
            echo "<input type='text' name='importado' value='" . $fila['IMPORTADO'] . "'><br>";
            echo "<input type='text' name='precio' value='" . $fila['PRECIO'] . "'><br>";
            echo "<input type='text' name='fecha' value='" . $fila['FECHA'] . "'><br>";
            echo "<input type='text' name='p_orig' value='" . $fila['PAÍSDEORIGEN'] . "'><br>";

            echo "<input type='submit' name='enviando' value='Actualizar!'>";
            echo "</form>";

            }
            //mysql_close($conexion);

         ?>
    </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>documento sin titulo</title>
    </head>
    <body>
        <?php


            //$busqueda=$_GET["buscar"];

            $cod=$_GET["c_art"];
            $sec=$_GET["seccion"];
            $nom=$_GET["n_art"];
            $pre=$_GET["precio"];
            $fec=$_GET["fecha"];
            $imp=$_GET["importado"];
            $por=$_GET["p_orig"];

            require("datos_conexion.php");

            $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

            if(mysqli_connect_errno()){
                echo "fallo al conectar con la BBDD";
                exit();
            }

            mysqli_select_db($conexion, $db_nombre) or die ("no se encuentra la BBDD");

            mysqli_set_charset($conexion, "utf8");

            $consulta="UPDATE PRODUCTOS SET CÓDIGOARTÍCULO='$cod', SECCIÓN='$sec', NOMBREARTÍCULO='$nom',  PRECIO='$pre', FECHA='$fec', IMPORTADO='$imp', PAÍSDEORIGEN='$por' WHERE  CÓDIGOARTÍCULO='$cod'";

            $resultados=mysqli_query($conexion, $consulta);

            if($resultados==false){
                echo "error en la consulta";
            }else{
                echo "registro guardado <br><br>";

                echo "<table><tr><td>$cod</td></tr>";
                echo "<table><tr><td>$sec</td></tr>";
                echo "<table><tr><td>$nom</td></tr>";
                echo "<table><tr><td>$pre</td></tr>";
                echo "<table><tr><td>$fec</td></tr>";
                echo "<table><tr><td>$imp</td></tr>";
                echo "<table><tr><td>$por</td></tr></table>";


            }


            //mysql_close($conexion);


         ?>


    </body>
</html>

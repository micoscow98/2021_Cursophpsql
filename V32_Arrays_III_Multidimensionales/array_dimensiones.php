<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>documento sin titulo</title>
    </head>
    <body>
        <?php
            $alimentos=array("fruta"=>array("tropical"=>"kiwi",
                                            "citrico"=>"mandarina",
                                            "otros"=>"manzana"),
                             "leche"=>array("animal"=>"vaca",
                                            "vegetal"=>"coco"),
                             "carne"=>array("vacuno"=>"lomo",
                                            "porcino"=>"pata"));

            //echo $alimentos["carne"]["vacuno"];
            /*foreach ($alimentos as $clave_alim=> $alim) {
                echo "$clave_alim: <br>";

                foreach ($alim as $clave=> $valor) {
                    echo "$clave: $valor <br>";
                 }
                 echo "<br>";
             }*/

             echo var_dump($alimentos);

         ?>
    </body>
</html>

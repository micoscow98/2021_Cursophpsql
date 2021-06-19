<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php


            class Coche{
                var $ruedas;
                var $color;
                var $motor;
                function __construct(){ // METODO CONSTRUCTOR

                    $this->ruedas = 4;

                    $this->color="";

                    $this->motor=1600;

                }

                function arrancar(){
                    echo "estoy arrancando<br>";
                }
                function girar(){
                    echo "estoy girando<br>";
                }
                function frenar(){
                    echo "estoy frenando<br>";
                }
                function establece_color($color_coche, $nombre_coche){
                    $this->color=$color_coche;
                    echo "el color de " . $nombre_coche . " es: " . $this->color . "<br>";
                }
            }
            $renault=new Coche(); //Estado inicial al objeto o instancia
            $mazda=new Coche();
            $seat=new Coche();

            $renault->establece_color("rojo", "renault");
            $seat->establece_color("azul", "seat");

            //$mazda->girar();
            //echo $mazda->ruedas;



         ?>
    </body>
</html>

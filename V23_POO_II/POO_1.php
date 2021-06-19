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
            }
            $renault=new Coche(); //Estado inicial al objeto o instancia
            $mazda=new Coche();
            $seat=new Coche();

            $mazda->girar();
            echo $mazda->ruedas;



         ?>
    </body>
</html>

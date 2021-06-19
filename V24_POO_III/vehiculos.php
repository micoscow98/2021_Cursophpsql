        <?php


            class Coche{
                var $ruedas;
                var $color;
                var $motor;
                function __construct(){ // METODO CONSTRUCTOR

                    $this->ruedas = 4;

                    $this->color="gris";

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




         ?>

         //---------------------------------------------------------------------------------------------------

         <?php


             class Camion{
                 var $ruedas;
                 var $color;
                 var $motor;
                 function __construct(){ // METODO CONSTRUCTOR

                     $this->ruedas = 8;

                     $this->color="";

                     $this->motor=2600;

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




          ?>

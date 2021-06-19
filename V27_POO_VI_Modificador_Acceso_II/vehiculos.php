        <?php


            class Coche{
                protected $ruedas;
                var $color;
                protected $motor;
                function __construct(){ // METODO CONSTRUCTOR

                    $this->ruedas = 4;

                    $this->color="";

                    $this->motor=1600;

                }
                function get_motor(){
                    return $this->motor;
                }
                function get_ruedas(){
                    return $this->ruedas;
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
                function set_color($color_coche, $nombre_coche){
                    $this->color=$color_coche;
                    echo "el color de " . $nombre_coche . " es: " . $this->color . "<br>";
                }
            }




         ?>

         //---------------------------------------------------------------------------------------------------<br>

         <?php


             class Camion extends Coche{
                 var $ruedas;
                 var $color;
                 var $motor;
                 function __construct(){ // METODO CONSTRUCTOR

                     $this->ruedas = 8;

                     $this->color="gris";

                     $this->motor=2600;

                 }
                 function set_color($color_camion, $nombre_camion){ //sobreescritura de metodo
                     $this->color=$color_camion;
                     echo "el color de " . $nombre_camion . " es: " . $this->color . "<br>";
                 }
                 function arrancar(){
                     parent::arrancar();
                     echo "camión arrancado";
                 }
             }




          ?>

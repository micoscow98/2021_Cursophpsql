<?php

    class Compra_vehiculo{
        private $precio_base;


        function __construct($gama){
            if ($gama=="urbano"){
                $this->precio_base=10000;
            }elseif ($gama=="compacto") {
                $this->precio_base=20000;
            }elseif ($gama=="berlina") {
                $this->precio_base=30000;
            }
        }//fin constructor

        function climatizador(){
            $this->precio_base+=2000;
        }//fin climatizador
        function navegador_gps(){
            $this->precio_base+=2500;
        }//fin navegador gps
        function tapiceria_cuero($color){
            if($color=="blanco"){
                $this->precio_base+=3000;
            }elseif ($color=="beige") {
                $this->precio_base+=3500;
            }else {
                $this->precio_base+=5000;
            }
        }//fin tapiceria
        function precio_final(){
                        
            return $this->precio_base;
        }//fin precio final

    }//fin clase
 ?>

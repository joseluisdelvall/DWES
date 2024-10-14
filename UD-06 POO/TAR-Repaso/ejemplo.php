<?php

    class Ejemplo {
        public int $dato;

        private function metodo1 () {
            $this->dato = 14;
            $dato = 7; // Comprobamos que el 7 no se guarda en el atributo de la clase ya que es una variable del metodo
        }

        function metodo2() {
            $this->metodo1();
        }

        /**
         * Get the value of dato
         */ 
        public function getDato(){
            return $this->dato;
        }

        /**
         * Set the value of dato
         */ 
        public function setDato($dato){
            $this->dato = $dato;
        }
    }

?>
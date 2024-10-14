<?php
    class Fecha {
        private array $fechas;
        private int $dia;
        private int $mes;
        private int $anyo;
        public function __construct() {
            $this->fechas = array(
                "1"=> array(
                    "0" => "31",
                    "1"=> "Enero",
                ),
                "2"=> array(
                    "0" => "28",
                    "1"=> "Febrero",
                ),
                "3"=> array(
                    "0" => "31",
                    "1"=> "Marzo",
                ),
                "4"=> array(
                    "0" => "30",
                    "1"=> "Abril",
                ),
                "5"=> array(
                    "0" => "31",
                    "1"=> "Mayo",
                ),
                "6"=> array(
                    "0" => "30",
                    "1"=> "Junio",
                ),
                "7"=> array(
                    "0" => "31",
                    "1"=> "Julio",
                ),
                "8"=> array(
                    "0" => "31",
                    "1"=> "Agosto",
                ),
                "9"=> array(
                    "0" => "30",
                    "1"=> "Septiembre",
                ),
                "10"=> array(
                    "0" => "31",
                    "1"=> "Octubre",
                ),
                "11"=> array(
                    "0" => "30",
                    "1"=> "Noviembre",
                ),
                "12"=> array(
                    "0" => "31",
                    "1"=> "Diciembre",
                ),
            );
        } // FIN CONSTRUCTOR

        /*
        * Separa la fecha del string en año, mes y dia,
        * y los guarda en los atributos de la clase
        * 
        * @param string $fechaString
        */
        function convertirFecha(string $fechaString) {
            $fechaUsuario = explode("-", $fechaString);
            $this->anyo = (int) $fechaUsuario[0];
            $this->mes = (int) $fechaUsuario[1];
            $this->dia = (int) $fechaUsuario[2];
        }

        /*
        * Comprueba si el año del atributo de la clase es bisiesto
        * y si lo es, cambia el número de días de febrero
        */
        function esBisiesto() {
            // Un año es bisiesto si es divisible por 4, pero no por 100
            // A menos que también sea divisible por 400
            if (($this->anyo % 4 == 0 && $this->anyo % 100 != 0) || ($this->anyo % 400 == 0)) {
                $this->cambiarFebrero();
                return true;
            } else {
                return false;
            }
        }

        function cambiarFebrero() {
            $this->fechas[2][0] = 29;
        }

        /*
        * Visualiza la fecha en formato "El día DD de MM de AAAA"
        */
        function visualizarFecha() {
            return"El día ". $this->dia." de ".$this->fechas[$this->mes][1]." de ".$this->anyo;
        }
        function visualizarDiasMes() {
            return "El mes tiene ".$this->fechas[$this->mes][0]." días";
        }
    }
?>
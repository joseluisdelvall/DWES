<?php
    class Fecha {
        private array $fechas;
        public int $numDias;
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
            
            $anyo = (int) $fechaUsuario[0];
            $mes = (int) $fechaUsuario[1];
            $dia = (int) $fechaUsuario[2];

            $this->numDias = $this->fechas[$mes][0];
            $this->esBisiesto($anyo);

            return $dia ." de ".$this->fechas[$mes][1]." de ". $anyo;
        }

        /*
        * Comprueba si el año del atributo de la clase es bisiesto
        * y si lo es, cambia el número de días de febrero
        */
        private function esBisiesto($anyo) {
            // Un año es bisiesto si es divisible por 4, pero no por 100
            // A menos que también sea divisible por 400
            if (($anyo % 4 == 0 && $anyo % 100 != 0) || ($anyo % 400 == 0)) {
                $this->cambiarFebrero();
            }
        }

        private function cambiarFebrero() {
            $this->fechas[2][0] = 29;
        }

    }
?>
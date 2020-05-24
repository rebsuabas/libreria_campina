<?php

    require_once './conexion.php';

    class Fecha {

        private static $dias_de_la_semana = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo');
        
        public static function getFecha(){
        $anio = date('Y');
        $mes = date('m');
        $dia = date('d');
        return $dia . '/' . $mes . '/' . $anio;
        } 
        
        public static function getHora(){
        $hora = date('H');
        $minutos = date('i');
        return $hora . ':' . $minutos;
        }
        
        public static function getFechaHora(){
        $fecha = Fecha::getFecha();
        $hora = Fecha::getHora();
        return $fecha . '   ' . $hora;
        }
        
        public static function mostrarDíasDeLaSemana(){
        $cadena_con_dias = implode(', ', self::$dias_de_la_semana);
        return $cadena_con_dias;
        }

    }

?>
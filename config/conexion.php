<?php
/** //TODO! Se habilitaron los errores, se cambio la conexion a DB y cotejamiento de conexion a utf8_spanish_ci : debug de error datatable tn/1 (JSON responde Invalida)*/
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/** //TODO! Inicializacion de Variable de Sesion */
session_start();
/**TODO: Clase para conexion con PDO */
    class Conectar {
        protected $dbh;


        /** //TODO Funcion protegida para la cadena de conexion.*/ 
        protected function conexion(){
            try{
                $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=c_masivos","root","sistemas");
                return $conectar;
            }catch(Exception $e){
                /** //*Obtener mensaje de error en conexion  */
                print "Error" . $e->getMessage()."</br>";
                die();
            }
        }

        /** //TODOImpedimos problemas con las ñ o ´ tildes usando utf8*/
        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }
        /** //TODO! Ruta principal del proyecto  */
        public static function ruta(){
            return "http://localhost:8080/docs/p/php/correosmasivos/CorreosMasivos-admin-php/";
        }
    }

?>
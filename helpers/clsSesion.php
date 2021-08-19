<?php

    class Sesion{
        public function __construct(){
            session_start(); //$_SESSION
        }

        public function crearVariable($nombre, $valor){
            $_SESSION[$nombre] = $valor;
        }

        public function borrarVariable($nombre){
            unset($_SESSION[$nombre]);
            //session_destroy = borra todo el contenido del arreglo $_SESSION
            
        }
    }

?>
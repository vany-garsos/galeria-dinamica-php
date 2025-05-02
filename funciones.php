<?php

        try{
            $conexion= new PDO('mysql:host=localhost; dbname=galerias', 'root', '12345678');
            return $conexion;

            if(!$conexion){
                die();
            }

        }catch(PDOException $error ){
            return false;
        
        }

        function validarMaximoPalabras($texto, $maxPalabras) {
            $numeroPalabras = str_word_count($texto);
            return $numeroPalabras <= $maxPalabras;
        }
 


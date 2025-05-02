<?php

        try{
            $conexion= new PDO('mysql:host=localhost; dbname=galerias', 'USUARIO_DB', 'PASS_DB');
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
 


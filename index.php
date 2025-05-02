<?php

require 'funciones.php';

 
        $statement = $conexion -> prepare("SELECT * FROM fotos");
        $statement -> execute();
        $fotos = $statement->fetchAll();

require 'vistas/galeria.view.php';


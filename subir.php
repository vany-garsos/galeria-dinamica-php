<?php
require 'funciones.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];

    $maxPalabrasTitulo = 15;
    $maxPalabrasDescripcion = 20;

    if (empty($titulo) || empty($descripcion)) {
        $incompleto = "Error: Completa los campos de título y descripción correctamente.";
    } else if (empty($_FILES['foto']['tmp_name'])) {
        $error = "Error: Debes subir una imagen.";
    } else if (!validarMaximoPalabras($titulo, $maxPalabrasTitulo)) {
        $error_titulo = "Error: El título no debe exceder $maxPalabrasTitulo palabras.";
    } else if (!validarMaximoPalabras($descripcion, $maxPalabrasDescripcion)) {
        $error_descripcion = "Error: La descripción no debe exceder $maxPalabrasDescripcion palabras.";
    } else {
        $check = @getimagesize($_FILES['foto']['tmp_name']);
        if ($check !== false) {
            $carpeta_destino = 'img/';
            $archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
            move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);

            $statement = $conexion->prepare('INSERT INTO fotos (titulo, imagen, descripcion) VALUES (:titulo, :imagen, :descripcion)');
            $statement->execute(array(
                ':titulo' => $titulo,
                ':imagen' => $_FILES['foto']['name'],
                ':descripcion' => $descripcion
            ));

            header('Location: index.php');
        } else {
            $error = "El archivo no es una imagen o es muy pesado.";
        }
    }
}

require 'vistas/subir.view.php';



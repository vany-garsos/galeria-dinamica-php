<?php require_once "./layout/header.php" ?>
    <!--Galeria-->
    <div class="galeria">
        <h2 style="color:white" class="text-center">Galería de imágenes</h2>
        <div class="linea"></div>

        <div class="col-12 text-center mb-4">
             <a href="subir.php" class="btn btn-outline-light" type="button">Agregar</a>
        </div>
        <div class="contenedor-imagenes mb-5">
            <?php foreach (array_reverse($fotos) as $foto) : ?>
                <div class="imagen">
                    <a href="img/<?php echo $foto['imagen'] ?>" data-lightbox="models" data-title="<?php echo strtoupper($foto['titulo']) . ". " . $foto['descripcion'] ?>">

                        <img src="img/<?php echo $foto['imagen'] ?>" alt="convivencia wetamo">
                    </a>
                </div>
            <?php endforeach; ?>

        </div>
    </div>

<?php require_once "./layout/footer.php" ?>
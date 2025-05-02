<?php require_once "./layout/header.php" ?>

  <div id="barra-cargando" class="barra-cargando">
    <div class="loader"></div>
  </div>

  <header>
    <h1 class="sub ciclismo text-center pt-5">Subir Foto</h1>
  </header>
  <div class="linea"></div>

  <div class="contenedor-form">
    <!--estamos enviando los datos a la misma pagina-->
    <form class="formulario" method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
      <div class="foto_predeterminada mt-5">
        <img src="img/sinfoto.jpg" id="img">
      </div>
      <div class="btn_cambiar_foto">
        <label for="cambiar_foto" class="text-center">X</label>
      </div>


      <div class="mb-3">
        <label for="foto" class="form-label">Seleccionar foto</label>
        <input id="cambiar_foto" class="form-control inputform" type="file" name="foto" id="foto" placeholder="foto" style="color:white;">
      </div>
      <?php if (isset($error)) : ?>
        <p class="formulario__input-error"><?php echo $error; ?></p>
      <?php endif ?>
      <div class="mb-3" id="grupo__titulo">
        <label for="titulo" class="form-label">Titulo de la foto</label>
        <input type="text" class="form-control inputform" name="titulo" id="titulo" placeholder="Ingresa un titulo (maximo 15 palabras)" style="color:white;">
      </div>
      <?php if (isset($error_titulo)) : ?>
        <p class="formulario__input-error"><?php echo $error_titulo; ?></p>
      <?php endif ?>

      <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea class="form-control inputform" id="descripcion" name="descripcion" rows="3" placeholder="Ingresa una descripcion (maximo 20 palabras)" style="color:white;"></textarea>
      </div>
      <?php if (isset($error_descripcion)) : ?>
        <p class="formulario__input-error"><?php echo $error_descripcion; ?></p>
      <?php endif ?>

      <?php if (isset($incompleto)) : ?>
        <div class="formulario__mensaje">
          <p><i class="fa-solid fa-triangle-exclamation"></i><?php echo $incompleto; ?></p>
        </div>
      <?php endif ?>

      <input type="submit" class="submit btn btn-outline-light mb-5" value="Subir foto" name="subir">

    </form>
  </div>


  <?php require_once "./layout/footer.php" ?>
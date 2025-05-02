<?php
require_once ('c.php');
$sql ="SELECT * FROM b";
$resultado = $conn->query($sql)

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/navbar.css">
</head>
<body class="">

  <!---------barra de navegacion-->
  <div class="">
    <div class="barra">
       <div class="container text-center">
          <div class="row align-items-start">
            <div class="col">
              <img class="img-fluid" src="img/logo1.png" alt="logo">
            </div>
            <div class="col">
              <div   style=" color: white; font-size: 20px; padding-top: 20px;">

                <script>
                  var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Novimbre", "Diciembre");
                  var f = new Date();
                  document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                </script>
              </div> 

            </div>
            <div class="col">
              <div> <a href="admi.html" target="_blank"> <img
                src="img/user.png" width="40" height="40" alt=""></a></div>
            </div>
          </div>
        </div>
      <ul class="nav">

        <li class="nav-item dropdown">
          <a style="font-size: 20px ; color: white;" class="nav-link " data-bs-toggle="dropdown" href="#" role="button"
            aria-expanded="false">☰</a>
          <ul class="dropdown-menu">
            <li><a id="azul" class="dropdown-item" href="mision.html">MISION</a></li>
            <li><a id="verde" class="dropdown-item" href="objetivo.html">OBJETIVO</a></li>
            <li><a id="morado" class="dropdown-item" href="vision.html">VISION</a></li>

          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="index.html" style="   color: white; font-size: 20px;">INICIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="historia.html" style="   color: white; font-size: 20px">HISTORA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="galerias.html" style="   color: white; font-size: 20px">GALERIA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="index.php" style="   color: white; font-size: 20px">CONTACTO</a>
        </li>


        <li class="nav-item">
          <a class="nav-link " href="eventos.html" style="   color: white; font-size: 20px">EVENTOS</a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="rodadasema.html" style="   color: white; font-size: 20px">RODADA SEMANAL</a>
        </li>

       
      </ul>
    </div>
  </div>
  <br>
 
  <!--Termina la barra  navegación-->


<br><br>
<div class="text-center">
    <h1 style="color: red ;">Bienvenido Administrador</h1>
</div>



<div class="text-center">
<h1>Usuarios Inscritos</h1>

 <div class="container">
 <table  class="table table-success table-striped-columns">
    <thead>
        <th>ID</th>
        <th>Nombre del Usuiario</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Telefono</th>
        <th>Correo</th>
        <th>comentario</th>
        <th>fecha de nacimiento</th>
        <th>direccion</th>
        <th></th>
        <th></th>
    </thead>


    <tbody>

    <?php
                while ($registros = $resultado->fetch_assoc()){

                    ?>
                    <tr>
                      <th><?php echo $registros['id']; ?></th>
                        <td  ><?php echo $registros['nombre']; ?></td>
                        <td ><?php echo $registros['apellidopaterno']; ?></td>
                        <td><?php echo $registros['apellidomaterno']; ?></td>
                        <td><?php echo $registros['telefono']; ?></td>
                        <td><?php echo $registros['email']; ?></td>
                        <td ><?php echo $registros['comentario'];?></td>
                        <td><?php echo $registros['fecha']; ?></td>
                        <td ><?php echo $registros['direccion'];?></td>
                        <td><a class="btn btn-danger" href="delete.php?id=<?php echo $registros['id'] ?>">Eliminar</a></th>
                        <th><a class="btn btn-info" href="update.php?id=<?php echo $registros['id'] ?>">Modificar</a></td>
                        
                    </tr>
                <?php

                }
                ?>
    </tbody>
</table>

</div>


</div>

    





    
     
<?php

$conn->close();

?>


<footer class="fouter">
    <div class="container"> <!--Footer1-->
      <div class="row"> <!--Row-->
        <div class="col-4 pd-footer">
          <img src="img/logo1.png" class="img-fluid rounded-start" alt="">
        </div>
        <div class="col-4 pd-footer">
          <h5 style="color: white;">Nosotros</h5>
          <p style="color: white;">LO MEJOR DEL MUNDO DEL DEPORTE</p>
        </div>
        <div style="padding-left: 250px;" class="col-4">
          <h5 style="color: white;">Síguenos</h5>
          <a href="#"> <img src="img/facebook.png" alt=""></a>
          <a href="#"> <img src="img/instangram.png" alt=""></a>
          <a href="#"> <img src="img/youtube.png" alt=""></a>
        </div>
      </div> <!--Termina clase row-->
    </div><!--Termina el footer1-->
  </footer>

   <script src="js/bootstrap.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootbox.js"></script>
</body>
</html>
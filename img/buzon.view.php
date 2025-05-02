<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buzón</title>

  <link rel="stylesheet" href="css/buzon.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="css/style.css">
  <!--Fuente Alegreya-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
  <!--font-awesome icons-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

  <!---------barra de navegacion-->
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand me-auto" href="#">
        <img class="logo" src="img/logopajaroscaidos7.png" alt="">
      </a>

      <div class="offcanvas offcanvas-end dark" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
            <img class="logop" src="img/logopajaroscaidos7.png" alt="">
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.html">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="galerias.html">Galeria</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index .php">Contacto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="eventos.html">Eventos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="rodadasema.html">Rodada semanal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="videos.html">Videos</a>
            </li>
          </ul>
        </div>
      </div>

      <div> <a href="admi.html" target="_blank">
          <svg class="admin" xmlns="http://www.w3.org/2000/svg" ml-2 color="white" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
          </svg>
        </a></div>

      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    </div>
  </nav>
  <!--fin- Navbar-->

  <!--Termina la barra  navegación-->

  <div class="menu-secondary">
    <!-- Button trigger modal -->
    <a class="submenu" href="#" data-bs-toggle="modal" data-bs-target="#visionModal">Visión</a>

    <!-- Modal -->

    <div class="modal fade" id="visionModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content dark-mode">
          <div class="modal-header">
            <h1 class="modal-title fs-5 sub">VISIÓN</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <img class="modales" src="img/VISION2.jpg" alt="imagen vision">
            <br>
            Ser un club ciclista destacando no solo a nivel local, sino también estatal y nacional, promoviendo la salud
            mediante actividad física. Queremos inspirar a nuestra comunidad a adoptar un estilo de vida activo y
            saludable donde todas las personas se sientan bienvenidas sin importar su edad, género, nivel de habilidad o
            antecedentes.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Aceptar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Button trigger modal -->
    <a class="submenu" href="#" data-bs-toggle="modal" data-bs-target="#misionModal">Misión</a>

    <!-- Modal -->

    <div class="modal fade" id="misionModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content" style="background-color: #222222; color:white">
          <div class="modal-header">
            <h1 class="modal-title fs-5 sub">MISIÓN</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <img class="modales" src="img/MISION.jpeg" alt="imagen vision">
            <br>
            Nuestra misión es promover el ciclismo como una actividad física y recreativa. Nos esforzamos por ofrecer
            una plataforma que fomente el crecimiento personal de nuestros miembros, mientras disfrutan de los beneficios
            físicos, mentales y sociales que el ciclismo ofrece. Inspiramos a nuestros integrantes a alcanzar sus objetivos
            individuales mientras exploran nuevas aventuras.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Aceptar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Button trigger modal -->
    <a class="submenu" href="#" data-bs-toggle="modal" data-bs-target="#objetivoModal">Objetivo</a>

    <!-- Modal -->

    <div class="modal fade" id="objetivoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content" style="background-color: #222222; color:white">
          <div class="modal-header">
            <h1 class="modal-title fs-5 sub">OBJETIVO</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <img class="modales" src="img/ciclismo6.jpg" alt="imagen vision">
            <br>
            Ser un punto de encuentro para los amantes del ciclismo, brindando recursos, apoyo y oportunidades de crecimiento a nuestros miembros. Queremos ser una comunidad activa,
            dinámica y comprometida que fomente el compañerismo, la superación personal y el amor por el ciclismo, mientras contribuimos al bienestar de la sociedad y el cuidado del
            medio ambiente.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Aceptar</button>
          </div>
        </div>
      </div>
    </div>
    <div class="fecha">
      <script>
        var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Novimbre", "Diciembre");
        var f = new Date();
        document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
      </script>
    </div>
  </div>


  <!--Comentarios-->
  <div class="box">
    <?php foreach ($comentarios as $comentario): ?>
        <div class="comentario">
            <div class="box-perfil">
                <img src="img/<?php echo $comentario['foto_perfil']; ?>">
                <p><?php echo $comentario['nombre'] . ' ' . $comentario['apellido']; ?></p>
            </div>
            <div class="box-mensaje pt-3"> 
                <p class="opinion"><?php echo $comentario['comentario']; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>



  

  <!--footer-->
  <footer class="footer-distributed">
    <div class="footer-left">
      <img class="logo-footer" src="img/logo1.png" alt="logo">
      <h4>Lo mejor del mundo del deporte</h4>

      <p class="footer-links">
        <a href="index.html">Inicio</a>
        |
        <a href="historia.html">Historia</a>
        |
        <a href="index .php">Contacto</a>
      </p>
      <P class="footer-company-name">&#169 2023-2024 <strong>pajaroscaidos.com.mx</strong></P>

    </div>

    <div class="footer-center text-center">
      <br>
      <div>
        <a href="videos.html"><i class="fa-solid fa-video"></i>
          <p class="footer-links">Videos</p>
        </a>
      </div>
      <div>
        <a href="galerias.html"><i class="fa-solid fa-images"></i></i>
          <p class="footer-links">Galeria</p>
        </a>
      </div>
    </div>

    <div class="footer-right">
      <p class="footer-company-about text-center">
        <span>Ubicación</span>
        Coyuca de Catalán, Gro.
      </p>
      <div class="footer-icons text-center">
        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
        <a href="#"><i class="fa-brands fa-youtube"></i></a>
      </div>

    </div>
  </footer>

  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>

</html>
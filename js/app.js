document.addEventListener('DOMContentLoaded', function() {
  var botones = document.getElementsByClassName("boton");

  

  for (var i = 0; i < botones.length; i++) {
      botones[i].addEventListener("click", ventana);
  }

  function ventana() {
    bootbox.dialog({
        message: `
        <center>
            <img class="mb-4" src="img/EVENTOS.jpg" alt="" width="100" height="100"> 
            <p class="mb-3 fw-normal">Inicia sesión para subir fotos, videos y dejar comentarios!. Al ser parte del club obtienes una clave de acceso. Si aún no la tienes, pidesela al administrador del club.</p>
            <div class="form-floating">
                <input type="text" class="form-control mb-3" id="nombre" placeholder="Usuario">
                <label for="nombre">Nombre de Usuario</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="contra" placeholder="Password" style="color:red">
                <label for="contra">Contraseña</label>
            </div>
            <div class="form-floating mt-3">
            <button class="btn btn-bd-accent" id="mostrar">Mostrar contraseña</button>
        </center>`,
        centerVertical: true,
        size: "medium",
        buttons: {
            ok: {
                label: "Iniciar sesión",
                className: "btn btn-secondary",
                callback: function (result) {
                    let nombre = document.getElementById("nombre").value;
                    let contra = document.getElementById("contra").value;

                    if (nombre == "Admin" && contra == "1234") {            
                        terminos("admi.php");
                    } else if (nombre == "User" && contra == "12300") {
                        terminos("invitado.html");
                    } else {
                        incorrecta();
                    }
                },
            },
        },
    });

    let contra = document.getElementById("contra");
    let icon = document.getElementById("mostrar");
    icon.addEventListener("click", e => {
        if (contra.type === "password") {
            contra.type = "text";
            icon.innerHTML="Ocultar contrseña";
        } else {     
            contra.type = "password";
            icon.innerHTML="Mostrar contrseña";
        }
    });
}
});


function incorrecta() {
  bootbox.alert({
    message:
      '  <center> <img src="img/error.png"/>  <br> <br> <h2>Usuario Invalido</h2>  <p>Verifique que el usuario o contraseña sean correctos</p>    </center>  ',
    centerVertical: true,
    size: "small",
    buttons: {
      ok: {
        label: "OK",
        className: "btn btn-success",

        
      },
    },
  });
}

function terminos($link) {
  bootbox.prompt({
    title: "Terminos y Condiciones",
    message:
      '     <p>A.  PROHIBIDA SU VENTA O DISTRIBUCIÓN SIN AUTORIZACIÓN DE LA UNIVERSIDAD TECNOLÓGICA DE LA TIERRA CALIENTE \n            B.  PROHIBIDA LA ALTERACIÓN DEL CÓDIGO FUENTE O DISEÑO DE LAS INTERFACES GRÁFICAS.\n            C.  LA UNIVERSIDAD TECNOLÓGICA DE LA TIERRA CALIENTE NO SE HACE RESPONSABLE DEL MAL USO DE ESTE SOFTWARE.</p>  ',
    inputType: "checkbox",

    

    inputOptions: [
      {
        text: "<h3>Acepta terminos y condicones<h3>",
        value: "1",
      },
    ],

    callback: function (result) {
      if (result == null) {
        console.log(result);
      } else {
        if (result[0] == "1") {
         acepto($link);
        } else {
          noacepto();
        }
      }
    }
  });
}


function noacepto() {
  bootbox.alert({
    title: "",
    message:
      '  <center> <img src="img/error.png"/>  <br> <br> <h3>ERROR......</h3>  <h5>NO HAS ACEPYTADO TERMINOS Y CONDIONES</h5>    </center>  ',

    buttons: {
      ok: {
        label: "OK",
        className: "btn btn-success",
        callback: function () {
          terminos();
        }

      },
    },

  });
}


function acepto($link){
  bootbox.alert({
    title: "",
    message: '  <center> <img src="img/success.png"/>  <br> <br> <h5>HAS ACEPTADO TERMINOS Y CONDICIONES</h5>     </center>  ',

    buttons: {
      ok: {
        label: "OK",
        className: "btn btn-success",
      },
    },
    callback: function () {
      window.open($link, "_self");
    }

  });

}



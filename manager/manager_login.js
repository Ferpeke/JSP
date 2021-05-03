$(document).ready(function(){
  let nombre;
  let password;
  
  $('#btn_enviar').click(function(){
    
    nombre = $('#nombre').val();
    password = $('#password').val();

    // recolector = "bandera_nombre=" + nombre;

    // comunicacion asincrona
    $.ajax({

      // metodo que voy a ocupar
      type: 'POST',

      // que le voy a mandar
      data: {"bandera_nombre" : nombre, "bandera_password" : password},

      // a donde vamos a dirijir la información
      url: 'control/ctrl_form.php',

      // comprobaremos si si lo logramos mandar o no

      success: function (resultado) {
        resultado = resultado.trim();
        if (resultado == 1) {

          swal("Guardado con exito en la base de datos", {
            icon: "success",
          });

          $('#nombre').val('');
          $('#password').val('');
          
        } else {
          swal("Error al Guardar", {
            icon: "error",
          })
        }
      }

    });


  });
});
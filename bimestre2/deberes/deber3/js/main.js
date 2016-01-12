$(document).ready(function() {




                          

  $( "form#contacto" ).validate({
     rules: {

        nombre: {
          required: true,
          minlength: 2
        },
        email: {
          
          required: true,


          remote: {

        url: "rpc/verificar_correo.php",
        type: "post"


          }
        },
        telefono: {
          
          required: true,
          number:true,
          minlength:6,
          
        },
        
        clave: {
          //clave: true,
          required: true,
        },

        confir_clave: {
          
          required: true,
          equalTo:"#clave",
        },

    usuario: {
        
          required: true,
         remote: {

        url: "rpc/verificar_user.php",
        type: "post"


          }
        }

        },


    messages: {



    nombre: {
      required: "Ingresa tu nombre.",
      minlength: $.validator.format("Al menos {0} caracteres requeridos")
    },

    email: {
      required: "Ingresa una direccion de correo.",
     email: "El Email debe tener la forma nombre@dominio.com",
     remote:$.validator.format("El email {0} ya esta registrado")
    },

    telefono: {
      required: "Ingresa un numero de telefono.",
      number:"solo debes ingresar numeros",
      minlength:$.validator.format("Al menos {0} digitos")
   
    
    },
    
     clave: {
      required: "Ingresa password.",
      
   
    
    },

     confir_clave: {
      required: "Ingresa confirmacion de clave.",
     equalTo:"deben ser iguales las contraseñas"
   
    
    },

     usuario: {
      required: "Por favor ingresa un usuario.",
     remote:$.validator.format("El usuario {0} ya esta registrado,intente con un nuevo usuario ")
    }






  }


  });



    









  $("#btn-enviar").on("click", function(){

    if( $( "form#contacto" ).valid() ) {   
       var $btn = $(this).button('loading');
     
      $.ajax({
        url: 'rpc/procesar.php',
        type: 'post',
        // dataType: 'json',
        data: {"nombre": $("form#contacto #nombre").val(),
              "email": $("form#contacto #email").val(),
               "telefono": $("form#contacto #telefono").val(),
               "direccion": $("form#contacto #direccion").val(),
               "usuario": $("form#contacto #usuario").val(),
               "clave": $("form#contacto #clave").val(),
              },
      })





      .done(function(msg) {
        console.log("success");
        //$("#success").html(msg)

        $('#contact-form').modal('hide')
        alert('Usuario registrado con exito')
      })
      .fail(function(jqXHR, textStatus, errorThrown) {
        console.log("fail: " + textStatus + " " + errorThrown);
        $("#error").html(textStatus)
      })
      .always(function() {
        console.log("complete");
        $btn.button('reset');
      });
    }
    
  })
  $("#contact-form").on("hide.bs.modal", function(){
    $('#contacto')[0].reset();
  })
});
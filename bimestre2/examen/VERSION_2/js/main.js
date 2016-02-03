

$(document).ready(function() {


                      
/*validacion del formulario de resgitro*/
        $( "form#registro_users" ).validate({
          rules: {

            txtnombres: {
                          required: true,
                          minlength: 10
                        },

          txtapellidos: {
                          required: true,
                          minlength: 10
                        },



            txtemail: {
                          
                          required: true,


                           remote: {

                                  url: "rpc/verificar_correo.php",
                                  type: "post"


                                    }
                      },


        
            txtclave: {

                            required: true,
                            minlength:5,

                      },

                            
                            
                          


       txtconfir_clave: {
                            
                            required: true,
                            equalTo:"#clave",
                        },

    
                  },//final rules



    messages: {



    txtnombres: {
                  required: "Ingresa tus nombres.",
                  minlength: $.validator.format("Al menos {0} caracteres requeridos")
                },



    txtapellidos: {
                  required: "Ingresa Apellidos.",
                  minlength: $.validator.format("Al menos {0} caracteres requeridos")
                  },

    txtemail: {
                  required: "Ingresa una direccion de correo.",
                 email: "El Email debe tener la forma nombre@dominio.com",
                 remote:$.validator.format("El email {0} ya esta registrado")
               },

    
    
     txtclave: {
                 required: "Ingresa password.",
                 minlength: $.validator.format("Al menos {0} caracteres requeridos")
                
   
    
              },

    txtconfir_clave: {
                  required: "Ingresa confirmacion de clave.",
                 equalTo:"deben ser iguales las contraseñas"
   
    
              },

  }//final mensajes de validacion 


});//final de la validacion del formulario registro users


/*validacion del formulario de login*/
    

$( "form#login_estudiantes" ).validate({
     rules: {

        



        email: {
          
          required: true,
        },


        
        contrasena: {
          
          required: true,
        },



        
    
    },//final reglas de validacion formulario login estudiantes 



    messages: {



    

      email: {
                required: "Ingresa una direccion de correo para poder ingresar.",
               email: "El Email debe tener la forma nombre@dominio.com"
     
            },

    
    
     contrasena: {
                required: "Ingresa password para poder ingresar.",
                
   
    
                  },
  
    }//final mensajes de validacion formulario login estudiantes 

});





/*registrar estudiante en la base de datos */


 $('#guardar').on('click',  function(event) {


              event.preventDefault();
              if($('form#registro_users').valid())
              {
                
                $.ajax({
                        url: 'rpc/procesar.php',
                        type: 'post',
                        data: {
                                      nombres: $('form#registro_users #nombres').val(),
                                      apellidos: $('form#registro_users #apellidos').val(),
                                      email:$('form#registro_users #email').val(),
                                      clave:$('form#registro_users #clave').val()
                               },
                        })



                .done(function(res) {
                  
                  $('#mensaje').addClass('alert-success');
                  $('#mensaje').html(res);
                  window.location.href='index.php';

                })

                .fail(function() {
                  console.log("error");
                })
                .always(function() {
                  
                  console.log("complete");
                  $('#registro_users')[0].reset();
                });
                
              }
});//final boton click para registrar estudiante en la bd 

 /*regresar al registro de estuadiante */

$("#cancelar").on('click',function(){

        window.location.href='index.php';

});//final boton cancelar






/*SELECCION DE LAS MATERIAS SEGUN EL NIVEL */

$('#nivel').on('change', function(event) {
  event.preventDefault();
  
  $.ajax({
    url: 'rpc/get_materias.php',
    type: 'POST',
    data: {nivel: $('#nivel').val()},




     success: function(data){                                                    
                          $("#carga").empty();
                          $("#carga").html(data);
                                                             
                    }
  })
  .done(function(msg) {
    
    console.log("success");
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
  console.log("complete");
  });

});//final seleccion de niveles


  $('#btn-registrar').on('click', function(event) {
  event.preventDefault();



var x=$("#carga").find("input").val();
  alert(x);
  
  $.ajax({
    url: 'rpc/get_materias.php',
    type: 'POST',
    data: {nivel: $('#nivel').val()},




     success: function(data){                                                    
                          $("#carga").empty();
                          $("#carga").html(data);
                                                             
                    }
  })
  .done(function(msg) {
    
    console.log("success");
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
  console.log("complete");
  });//final seleccion de niveles


});
  

})//final decument.ready

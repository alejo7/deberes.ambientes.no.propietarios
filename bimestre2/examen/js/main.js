

$(document).ready(function() {


                      

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
        },



        txtconfir_clave: {
          
          required: true,
          equalTo:"#txtclave",
        },

    
    },



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
      
   
    
    },

     txtconfir_clave: {
      required: "Ingresa confirmacion de clave.",
     equalTo:"deben ser iguales las contraseñas"
   
    
    },

     






  }


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
 //location.reload();
    })
    .done(function(res) {
      //alert(res.estado);
      //if(res.estado==1)
        $('#mensaje').addClass('alert-success');
      //else
       // $('#mensaje').addClass('alert-danger');

      $('#mensaje').html(res.mensaje);
      //console.log(res.estado);

    })

    .fail(function() {
      console.log("error");
    })
    .always(function() {
      // $('#usuario').reset();
      console.log("complete");
       $('#registro_users')[0].reset();
    
        

    });
    


  }


});

 /*regresar al registro de estuadiante */

$("#cancelar").on('click',function(){

 window.location.href='index.php';

});


/*inicio de seion*/

$('#enviar').on('click',  function(event) {
  event.preventDefault();
  if($('form#sesion').valid())
  {
    
    $.ajax({
      url: 'rpc/verificar_user.php',
      type: 'post',
      data: {
        mail: $('form#sesion #inputEmail').val(),
        clave:$('form#sesion #inputPassword').val()
},

    



    })
    .done(function(res) {
      if(res=="true")
      {

window.location.href='registro.php';

      }


      else{

alert('no existe usuario');


      }

    })

    .fail(function() {
      console.log("error");
    })
    .always(function() {
      // $('#usuario').reset();
      console.log("complete");
      // $('#registro_users')[0].reset();
    
         // $("#carga tbody").load('rpc/get_all_users.php');

    });
    


  }


});









































  
})

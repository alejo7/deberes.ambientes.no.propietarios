

$(document).ready(function() {


                      

  $( "form#registro_users" ).validate({
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



    









 $('#guardar').on('click',  function(event) {
  event.preventDefault();
  if($('form#registro_users').valid())
  {
    
    $.ajax({
      url: 'rpc/procesar.php',
      type: 'post',
      data: {
        nombre: $('form#registro_users #nombre').val(),
        email: $('form#registro_users #email').val(),
        telefono:$('form#registro_users #telefono').val(),
        direccion:$('form#registro_users #direccion').val(),
        usuario:$('form#registro_users #usuario').val(),
        provincia:$('form#registro_users #txtprovincia').val(),
        parroquia:$('form#registro_users #txtparroquia').val(),
        canton:$('form#registro_users #txtcanton').val(),
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
         $('#txtparroquia').html('<option value="">Seleccione...</option>');
          $('#txtcanton').html('<option value="">Seleccione...</option>');
          $("#carga tbody").load('rpc/get_all_users.php');

    });
    


  }


});


$('#txtprovincia').on('change', function(event) {
  event.preventDefault();
  
  $.ajax({
    url: 'rpc/get_cantones.php',
    type: 'POST',
    data: {provincia: $('#txtprovincia').val()},
  })
  .done(function(msg) {
    $('#txtcanton').html(msg);
    $('#txtparroquia').html('<option value="">Seleccione...</option>');
    console.log("success");

  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
   
  });
  
});


$('#txtcanton').on('change', function(event) {
  event.preventDefault();
  
  $.ajax({
    url: 'rpc/get_parroquias.php',
    type: 'POST',
    data: {canton: $('#txtcanton').val()},
  })
  .done(function(msg) {
    $('#txtparroquia').html(msg);
    console.log("success");
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  });
  
});



var td,campo,valor,id;
    $(document).on("click","td.editable span",function(e)
    {
      e.preventDefault();
      $("td:not(.id)").removeClass("editable");
      td=$(this).closest("td");

      campo=$(this).closest("td").data("campo");
      valor=$(this).text();
      id=$(this).closest("tr").find(".id").text();
      td.text(" ").html("<input type='text'  name='"+campo+"' value='"+valor+"'><button id=modificar>modificar</button>");
    });





$(document).on("click","#modificar",function(e)
    {
      
      e.preventDefault();
      nuevovalor=$(this).closest("td").find("input").val();
      if(nuevovalor!="")
      
      {
        $.ajax({
          type: "POST",
          url: "rpc/actualizar.php",
          data: { 
            campo: campo, 
            valor: nuevovalor, 
            id:id }
        })


        .done(function( msg ) {
          
            $("#mensaje_modificacion").html(msg).addClass('alert-success').show().fadeOut(3000);
         td.html("<span>"+nuevovalor+"</span>");
          $("td:not(.id)").addClass("editable");
        });
      }


      else 

        $("#mensaje_modificacion").html("<p class='alert-danger'>Debes ingresar un valor</p>").show().fadeOut(3000);
    });


  $( "#buscar" ).keyup(function(event)
  { 
   
    $.ajax({
          type: "POST",
          url: "rpc/busqueda.php",
          data: { 
            coincidencia:$('form#users_registered #buscar').val(),

          },
          success: function(data){                                                    
                          $("#carga tbody").empty();
                          $("#carga tbody").html(data);
                                                             
                    }
        });







    





  });

  
})

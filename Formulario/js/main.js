

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

/*al dar click sobre un td que contenga la clase editable y un span */
    $(document).on("click","td.editable span",function(e)
    {
      e.preventDefault();
      /*a las etiquetas td que no contengan id remueva la clase editable*/
      $("td:not(.id)").removeClass("editable");
      /*elige  el selector con el this en este caso al dar click sobre un span es decir toma al selector span con la funcion closest elige al td mas inmedianto al span */

      td=$(this).closest("td");

      /*lo que hace es guardar en la variable campo el valor de que contenga el atributo data-campo de tal manera que se almacenara en esta variable el nombre del campos
      sobre el cual damos click */

      campo=$(this).closest("td").data("campo");


      /*al dar click sobre el span lo que hace es tomar el valor que contenga el campo td  para almacenarlo en la variable valor*/
      valor=$(this).text();


         /*al dra click sobre el span toma al selector span busca el tr inmediato a este y el tr mas inmedianto busca un atributo id y con la funcion texto obtiene el valor 
         que tiene este id */
      id=$(this).closest("tr").find(".id").text();


         /*al dar click sobre el td se  hace el cambio del td por un input el cual al dar click tendra el nombre del campo el valor de la variable valor el cual se mostrara 
         dentro del input*/

   /*validacion del campo de tal manera que si se da click sobre el campo contraseña se agregue un input de tipo contraseña caso contrario se agrega un input de tipo texto*/

         if (campo=="contrasena"){


            td.text("").html("<input type='password'  name='"+campo+"' value='"+valor+"'><button id=modificar>modificar</button><button id=cancelar>cancelar</button>");


         }


         else{

      td.text("").html("<input type='text'  name='"+campo+"' value='"+valor+"'><button id=modificar>modificar</button><button id=cancelar>cancelar</button>");


      }

    });





$(document).on("click","#modificar",function(e)
    {
      
      e.preventDefault();



      /*guarda en la variable nuevovalor el valor que se digito dentro del input */

      nuevovalor=$(this).closest("td").find("input").val();







      if(nuevovalor!="")
      
      {
        $.ajax({
                      type: "POST",
                      url: "rpc/actualizar.php",
                      data: { 
                                campo: campo, 
                                valor: nuevovalor, 
                                id:id 
                            }
                })
          

        .done(function( msg ) {

          /*si todo salio bien se muestra un mensaje de exito que muestra que la modificacion fue realizada ademas muestra en el input el nuevo valor que se digito 
          si es que una contraseña nos muestra la palabra cambiar y se le agrega la clase editable de tal manera que se pueda editar nuevamente en el caso de que se solo 
          datos nos muestar el valor editado*/
          
            $("#mensaje_modificacion").html(msg).addClass('alert-success').show().fadeOut(3000);

                if(campo=="contrasena"){

                      td.html("<span>cambiar</span>");
                      $("td:not(.id)").addClass("editable");

                }

                      else{
                               td.html("<span>"+nuevovalor+"</span>");
                                $("td:not(.id)").addClass("editable");


                                }
        });
      }


      else 
/*si el cambo que queremos editar se encuentra vacio envia un mensaje que exige al usuario que se ingrese un valor para poder modificar */
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

$(document).on("click",".cancelar",function(event)
    {
      event.preventDefault();
      td.html("<span>"+valor+"</span>");
      $("td:not(.id)").addClass("editable");
    });

  
})

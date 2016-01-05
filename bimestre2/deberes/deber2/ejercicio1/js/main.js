$(document).ready(function() {
 

  $("#ocultar-info").on('click', function(event) {
    event.preventDefault();
    
    if( $('#informacion').css('display') != 'none'){
      $('#informacion').fadeOut(4000);
 
    }

    
  });

 $("#ocultar-boton").on('click', function(event) {
    event.preventDefault();
    
    if( $('#ocultar-boton').css('display') != 'none'){
      $('#ocultar-boton').fadeOut(40);
    
    }

    
  });

 $("#ocultar-titulo-parrafo1").on('click', function(event) {
    event.preventDefault();
    
    if( $('.intro').css('display') != 'none'){
      $('.intro').fadeOut(4000);
      
    }

    
  });

 $("#uno").on('click', function(event) {
    event.preventDefault();
    
   $("#uno").remove();

    
  });


 $("#n_uno").on('click', function(event) {
    event.preventDefault();
    
   $("#n_uno").remove();
    $("#d_uno").remove();

    
  });








});
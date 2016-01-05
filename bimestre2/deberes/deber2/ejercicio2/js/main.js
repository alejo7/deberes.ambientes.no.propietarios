
 
function celdasColor (){
    var celdas = document.getElementsByTagName("tr");


    for (var i=0; i<celdas.length; i++){
        if (i%2==0){
            celdas[i].className ="par";

        }else {
            celdas[i].className ="impar";
        }
    }
}

$(document).ready(function(){

$("#mensaje").hover(function(){
        $("#mensaje").css("background-color", "yellow");
         $("#mensaje").text('Estas dentro del div ');
        }, function(){
        $("#mensaje").css("background-color", "red");
        $("#mensaje").text('Estas fuera del div');
    });

$("input").focus(function(){
        $(this).css("background-color", "#cccccc");
        
    });


    $("input").blur(function(){
        $(this).css("background-color", "#F60E0E");
    });
});





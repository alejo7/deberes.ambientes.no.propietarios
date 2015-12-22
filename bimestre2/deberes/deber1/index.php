<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="row" id="menu">
        <div class="col-md-offset-1 col-md-10">
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="col-md-3 navbar-brand" href="#">
                  <img id="logo" src="imagenes/menu/logo.png" alt="">
                </a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="navbar-collapse-1">

                <ul class="nav navbar-nav">
                  
                  <li class="active">
                    <a href="#">
                      Inicio <span class="sr-only">(current)</span>
                    </a>
                  </li>
                  
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                      Portafolio 
                      <span class="caret">
                      </span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Fotografias</a></li>
                      <li><a href="#">Videos</a></li>

                      <li role="separator" class="divider"></li>

                      <li><a href="#">Wordpress</a></li>
                      <li><a href="#">JavaScript</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">
                      About
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Contact
                    </a>
                  </li>
                  <li>
                    <button class="btn-blog btn-default btn-sm">blog</button>
                  </li>
                </ul>

                <form class="navbar-form navbar-left" role="search">
                  
                  <button type="submit" class="btn-search btn-default">buscar
                    <img src="imagenes/menu/search.png" alt="search">
                  </button>
                </form>

                
              </div><!-- /.navbar-collapse -->
          </nav>

      <div class="row" id="header">
        <div class="col-md-12">
 
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


       
            <!-- Indicators -->
            <ol class="carousel-indicators">

              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
               <li data-target="#carousel-example-generic" data-slide-to="2"></li>

              
            </ol>


            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img height="300" class="img-responsive" src="imagenes/carusel/principal.png" alt="...">
                <div class="carousel-caption">
                <h1 id="titulocarusel">GOOD DESIGN IS GOOD BUSSINES</h1>
                <p id="parrafocarusel">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                 when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                 <button type="button" class="btn btn-link">LEARN MORE</button>
                </div>
              </div>






              <div class="item">
                <img height="300" class="img-responsive" src="imagenes/carusel/segunda.png" alt="...">
                <div class="carousel-caption">
                  Imagen 2
                  <h1 id="titulocarusel">WHY DO WE USE IT </h1>
                <p id="parrafocarusel">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is
                 that it has a more-or-less normal distribution  of letters, as opposed to using .</p>
                 <button type="button" class="btn btn-link">LEARN MORE</button>
                  
                </div>
              </div>


              <div class="item">
                <img height="300" class="img-responsive" src="imagenes/carusel/tercera.png" alt="...">
                <div class="carousel-caption">
                  Imagen 3
                  <h1 id="titulocarusel">WHERE CAN I GET SOME</h1>
                <p id="parrafocarusel">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words 
                which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum.</p>
                <button type="button" class="btn btn-link">LEARN MORE</button>
               

            

                </div>
              </div>


            </div>




            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>




          </div>

        </div>
      </div>
<button id="botonazul" class="btn btn-primary">OUR SERVICES</button>
            
      <div class="row" id="contenido">
        <div class="col-md-3" id="izquierda">
          <img height="300" class="img-responsive" src="imagenes/header/laptop.png" alt="..."><br>
          <h1 class="panel-title text-center">Web Design</h1><br>
          <p class="text-center  panel-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry.<a href="#">Details...</a></p>

          
        </div>
        <div class="col-md-3" id="centro1">
           <img height="300" class="img-responsive" src="imagenes/header/lupa.png" alt="..."><br>
           <h1 class="panel-title text-center">Search Optimization</h1><br>
          <p class="text-center  panel-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry.<a href="#">Details...</a></p>
        </div>
        <div class="col-md-3" id="centro2">
           <img height="300" class="img-responsive" src="imagenes/header/coche.png" alt="..."><br>
           <h1 class=" panel-title text-center">Online Shop</h1><br>
          <p class="text-center  panel-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry.<a href="#">Details...</a></p>
        </div>
        <div class="col-md-3" id="derecha">
           <img height="300" class="img-responsive" src="imagenes/header/like.png" alt="..."><br>
           <h1 class=" panel-title text-center">Social Media</h1><br>
          <p class="text-center  panel-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry.<a href="#">Details...</a></p>
        </div>
        
      </div>




      <div class="row" id="seccion1">
      <h1 class=" titulo text-left">Our Portfolio Awesome</h1>
      <button class="btn3 btn-link pull-right">More Works</button>

        <div class="col-md-4" id="izquierda">
        <div class="img-thumbnail center-block">
          <img  class="img-responsive center-block" src="imagenes/seccion1/camara.png" alt="..."><br>
          <h1 class="titulo2 text-left">Lorem Ipsum is simply dummy</h1>
          <p class="subtitulo text-left">text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
          </div>
        </div>
        
        <div class="col-md-4" id="centro">
        <div class="img-thumbnail center-block">


        <img   class="img-responsive center-block" src="imagenes/seccion1/camara.png" alt="..."><br>
         <h1 class="titulo2 text-left">Lorem Ipsum </h1>
          <p class="subtitulo text-left">text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
        </div>
        </div>

        <div class="col-md-4" id="derecha">
        <div class="imagen3 img-thumbnail center-block">
         <div class="ojo img-thumbnail center-block">
           <img   class="ojo img-responsive pull-left" src="imagenes/seccion1/ojo.png" alt="..."><a id="linkojo" href="">Details</a>
           <br>
           <br>
           <br>


            <h1 class="titulo3 text-left">Ipsum is simply dummy</h1>
          <p class="subtitulo3 text-left">text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
        </div>
        </div>
        </div>
        
        
      </div>


      <div class="row" id="seccion2">
         <h1 class=" titulos2 panel-title text-center">WHAT WE OFFER</h1>
         <h3 class=" subtitulos2 text-center">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
         The point of using Lorem Ipsum .</h3>


        <div class="col-md-3" id="izquierda">



          
          <h1 class="panel-title text-left">Web Design</h1><br>
          <p class="parrafos text-left  panel-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p><br>
           <button class="btn4 btn-link pull-right">Details</button>

          
        </div>
        <div class="col-md-3" id="centro1">
          
           <h1 class="panel-title text-left">Search Optimization</h1><br>
          <p class="parrafos text-left  panel-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry.<a href="#">Details...</a></p>
        </div>
        <div class="col-md-3" id="centro2">
           
           <h1 class=" panel-title text-left">Online Shop</h1><br>
          <p class="parrafos text-left  panel-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p><br>
           <button class="btn4 btn-link pull-right">Details</button>

        </div>
        <div class="col-md-3" id="derecha">
           
           <h1 class=" panel-title text-left">Social Media</h1><br>
          <p class="parrafos text-left  panel-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry.<a href="#"> >>></a></p>
        </div>
        <hr>







      </div>
      <div class="row" id="seccion3">

        <hr>
                 <h1 class=" titulos2 panel-title text-center">TESTIMONIALS</h1>
                 <h3 class="sub text-center">"Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto." </h3><br><br>
                 <h4 class="autor text-center">John Doe/CEO of Lorem Ipsum</h4>

         <div class="col-md-4" id="izquierdas3">
          

         </div>



         <div class="col-md-4" id="centros3">
         <div class="row">

         <div class="col-md-4" id="izquierdas4">
          <img   class="mujer img-responsive pull-right" src="imagenes/seccion3/mujer.png" alt="...">
               <img   class="barrap img-responsive pull-right" src="imagenes/seccion3/barrap.png" alt="...">
               </div>

         <div class="col-md-4" id="centro4">

              <img   class="img-responsive pull-center" src="imagenes/seccion3/hombre.png" alt="...">
                   <img   class="triangulo img-responsive pull-center" src="imagenes/seccion3/triangulo.png" alt="...">
                        <img   class="img-responsive pull-center" src="imagenes/seccion3/barran.png" alt="...">
                          </div>


                           <div class="col-md-4" id="derecha4">

             <img   class="mujer2 img-responsive pull-left" src="imagenes/seccion3/mujer.png" alt="...">
                   <img   class="barrap1 img-responsive pull-left" src="imagenes/seccion3/barrap.png" alt="...">
                          </div>


         </div>
         <div class="col-md-4" id="derechas3">
              


         </div>

         </div>
         </div>





















      <div class="row" id="footer">
        <div class="col-md-3">
         <h3 class=" titulof text-left">TWITTER FEEDS</h3>
          <h3 class="subtitulof text-left">check out this great theme item </h3>
          <a href="#" id="linkf">http://tadjasfj.com</a>
          <p class="subtitulof text-left">2 weeks ago </p>
          <hr>
            <h3 class="subtitulof text-left">check out this great theme item </h3>
          <a href="#" id="linkf">http://tadjasfj.com</a>
          <p class="subtitulof text-left">2 weeks ago </p>
          <hr>
            <h3 class="subtitulof text-left">check out this great theme item </h3>
          <a href="#" id="linkf">http://tadjasfj.com</a>
          <p class="subtitulof text-left">2 weeks ago </p>





        
        </div>
         <div class="col-md-3">
         <h3 class=" titulof text-left">NEWSLETTER</h3>
           <h3 class="subtitulof text-left">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. 
           Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año Lorem. </h3>
                    
          <hr>
 <h4 color="blue">You email Address</h4>
 <input type="text" class="form-control">
 <button class="btn6 pull-right">Sign up</button>
          


        
        </div>


         <div class="col-md-3">

                          <div class="row">
                                     <div class="col-md-4">
                                          <h3 class=" titulof text-left">RECENT PROJECTS</h3>

                                                  <div class="cuadros img-thumbnail">
                                        
                                                  </div>
        
                                     </div>

                                      <div  class="col-md-8">
                                           <h3 class="subtitulof text-left">check out this great theme item </h3>
                                           <a href="#" id="linkf">http://tadjasfj.com</a>
                                           <p class="subtitulof text-left">2 weeks ago </p>

         

        
                                       </div>



                            </div>
                       <hr>



                

                            <div class="row">
                                           <div class="col-md-4">

                                                      <div class="cuadros img-thumbnail">
                                      
                                                     </div>
        
                                          </div>
                                            <div  class="segundo col-md-8">
                                                     <h3 class="subtitulof text-left">check out this great theme item </h3>
                                                      <a href="#" id="linkf">http://tadjasfj.com</a>
                                                      <p class="subtitulof text-left">2 weeks ago </p>
                                            </div>
                            </div>
                             <hr>

         

        
        



              
               

                             <div class="row">
                
                                            <div class="col-md-4">


                                                  <div class="cuadros img-thumbnail">
                            
                                                  </div>
        
                                            </div>
                                            <div  class="tercero col-md-8">
                                                         <h3 class="subtitulof text-left">check out this great theme item </h3>
                                                          <a href="#" id="linkf">http://tadjasfj.com</a>
                                                          <p class="subtitulof text-left">2 weeks ago </p>

         

        
        



                                              </div>
               
         
                               </div>
     </div>












         <div class="col-md-3">
         <h3 class=" titulof text-left">CONTACT</h3>


                            <div class="row">
                                     <div class="col-md-4">
                                          
                                                   <img   class=" telefono img-responsive pull-left" src="imagenes/footer/telefono.png" alt="...">

                                        
                                                
                                     </div>

                                      <div  class="numeros col-md-8">
                                           <h3 class="datos text-left">1-000-000-0000</h3>
                                           <h3 class="datos1 text-left">1-000-000-0000</h3>
                                          
                                      </div>



                            </div>



                            <div class="row">
                                     <div class="col-md-4">
                                          
                                                   <img   class=" samrt img-responsive pull-left" src="imagenes/footer/smartphone.png" alt="...">

                                        
                                                
                                     </div>

                                      <div  class="numeros2 col-md-8">
                                            <h3 class="datos2 text-left">1-000-000-0000</h3>
                                           <h3 class="datos3 text-left">1-000-000-0000</h3>

         

        
                                       </div>



                            </div>


                            <div class="row">
                                     <div class="col-md-4">
                                          
                                                   <img   class="mensaje img-responsive pull-left" src="imagenes/footer/mensaje.png" alt="...">

                                        
                                                
                                     </div>

                                      <div  class="correos col-md-8">
                                           <a href="" class="correo text-left">abcdef@hijs.dfh</a>
                                           <a href="#" class="correo1 text-left">abcdef@hijs.dfh</ha>


        
                                       </div>



                            </div>

















        
        </div>

      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/main.js"></script>

  </body>
</html>
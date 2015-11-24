<?php

if($_POST){
  $email = $_POST['email'];
  $contrasena=md5($_POST['contrasena']);

  $conn = new mysqli('localhost' , 'root' , '', 'sistema');
    mysql_select_db("sistema", $conn);
                            


                            if ($email!='' and $contrasena!=''){

                                                      $query1="SELECT * FROM usuarios WHERE email='$email' and contrasena='$contrasena'";
                                                      $result=$conn->query($query1);
                                                      $fila=mysqli_num_rows($result);


                                                        if($fila==0){

                                                        http_redirect('index.php?exito=' . urlencode('Usuario o contrasena erroneo'));

                                                     
                                                                                                              
                                                          }
                                                        else {

															           $_SESSION['email'] = $email;
											            	     $_SESSION['contrasena'] = $contrasena;

                                                        }
                            
}

else {


	 http_redirect('index.php?exito=' . urlencode('Por favor, ingrese su contrasena y usario'));
}
}

if(isset( $_SESSION['email'])&&isset( $_SESSION['contrasena'])) {
  http_redirect('inicio.php');
}

$msg = (isset($_GET['exito']) ? $_GET['exito'] : '');

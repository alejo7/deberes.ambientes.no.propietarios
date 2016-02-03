<?php
	session_start(); 

			include ('conexion.php');
			if(isset($_POST['login'])){
				$usuario = $_POST['email'];
				$pw = md5($_POST['contrasena']);
				$log = mysql_query("SELECT * FROM estudiante WHERE email='$usuario' AND contrasena='$pw'");
				if (mysql_num_rows($log)>0) {
					$row = mysql_fetch_array($log);
					$_SESSION["user"] = $row['email']; 
					$_SESSION["nombres"]=$row['nombres'];
					$_SESSION['Id_user']=$row['id_estudiante'];
				  	echo 'Iniciando sesión para '.$_SESSION['user'].' <p>';
					echo '<script> window.location="../inicio.php"; </script>';
				}
				else{
					echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
					echo '<script> window.location="../index.php"; </script>';
				}
			}
		?>	

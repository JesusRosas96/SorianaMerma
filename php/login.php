<?php
	session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "soriana670";
    $b=$_POST['user'];
	$c=$_POST['pass'];

	$conn= new mysqli($servername, $username, $password, $dbname);
	
	if (!$conn){
    	echo "<script type=\"text/javascript\">alert('Error al conectar con la Base de Datos, regresando al Inicio'); window.location='../index.html';</script>";
    	exit;
	}
	else{
		mysqli_select_db($conn, "soriana670");
		$valor=mysqli_query($conn, "SELECT * FROM login where Usuario= '$b' and Contrasena='$c';");
		if(!$valor){
			echo "<script type=\"text/javascript\">alert('No se puede consultar'); window.location='../index.html';</script>";
		}
		else {
			if(mysqli_num_rows($valor)==1){
				$row= mysqli_fetch_array($valor);
				$_SESSION['Usuario']=$row['Usuario'];
				$_SESSION['Contrasena']=$row['Contrasena'];
				header("Status: 301 Moved Permanently");
       			header("Location: ../indexIn.php");
        		exit;
			}
			else{
				echo "<script type=\"text/javascript\">alert('Contraseña o Usuario incorrectos'); window.location='../login.html';</script>";
				exit;
			}
		}
	}
	mysqli_close($conn);
?>
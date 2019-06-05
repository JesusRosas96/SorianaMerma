<?php
    session_start();
	if(!$_SESSION){
		header ("Location: ../Merma/index.html");
	}
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "soriana670";
    $codigo= $_POST['codigo'];
    $nombre= $_POST['nombre'];
    $stock= $_POST['stock'];
    $precio= $_POST['precio'];
    $conn= new mysqli($servername, $username, $password, $dbname);
    mysqli_select_db($conn, "soriana670");
    
    if (!$conn){
        echo "<script type=\"text/javascript\">alert('Error al conectar con la Base de Datos, regresando al Inicio');</script>";
        exit;
    }
    else{
        mysqli_select_db($conn, "soriana670");
        $valor2=mysqli_query($conn, "SELECT * FROM producto WHERE codigo= '$codigo' and nombre= '$nombre' and precio= '$precio';");
        if(mysqli_num_rows($valor2)==1){
            $valor=mysqli_query($conn, "UPDATE producto SET stock= (stock + '$stock');");
            echo "<script type=\"text/javascript\">alert('Producto en existencia, stock actualizado'); window.location='../Merma/indexIn.php';</script>";
            exit;
        }
        else{
            $valor=mysqli_query($conn, "INSERT INTO producto VALUES ('$codigo', '$nombre', '$stock', '$precio');");
            echo "<script type=\"text/javascript\">alert('Formulario completado, regresando al menú principal');        window.location='../Merma/indexIn.php';</script>";
            exit;
        }
    }

?>
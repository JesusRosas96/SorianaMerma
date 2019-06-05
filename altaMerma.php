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
    $area= $_POST['area'];
    $proveedor= $_POST['proveedor'];
    $prodent= $_POST['prodent'];
    $prodreg= $_POST['prodreg'];
    $motivo= $_POST['motivo'];
    $forma= $_POST['forma'];
    $nombre_img = $_FILES['foto']['name'];
    $tipo = $_FILES['foto']['type'];
    $tamano = $_FILES['foto']['size'];
    $conn= new mysqli($servername, $username, $password, $dbname);
    mysqli_select_db($conn, "soriana670");
    $fecha_actual = date("d/m/Y");

    if (($nombre_img == !NULL) && ($_FILES['foto']['size'] <= 200000)) 
    {
       if (($_FILES["foto"]["type"] == "image/jpeg")
       || ($_FILES["foto"]["type"] == "image/jpg")
       || ($_FILES["foto"]["type"] == "image/png"))
       {
          $directorio = $_SERVER['DOCUMENT_ROOT'].'/Merma/img/';
          move_uploaded_file($_FILES['foto']['tmp_name'],$directorio.$nombre_img);
        } 
        else 
        {
           echo "<script type=\"text/javascript\">alert('No se puede subir una imagen con ese formato');</script>";
        }
    } 
    else 
    {
       if($nombre_img == !NULL) echo "<script type=\"text/javascript\">alert('La imagen es demasiado grande');</script>";
    }
    
    if (!$conn){
        echo "<script type=\"text/javascript\">alert('Error al conectar con la Base de Datos, regresando al Inicio');</script>";
        exit;
    }
    else{
        mysqli_select_db($conn, "soriana670");
        $valor=mysqli_query($conn, "INSERT INTO acta VALUES ('', '$codigo', '$area', '$proveedor', '$prodent', '$prodreg', '$motivo', '$forma', '$nombre_img', current_date(), 0);");
        echo "<script type=\"text/javascript\">alert('Formulario completado, verifique el modulo de Actas de Devolución'); window.location='../Merma/indexIn.php';</script>";
        exit;
    }

?>
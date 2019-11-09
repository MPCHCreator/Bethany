<?php

include_once ('config/conexion.php');
$conn= getConexion();
session_start();

if(isset($_POST['nuevo_usuario'])) {
    //usuarios
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$telefono = $_POST['telefono'];

    $insercion_u = "INSERT into usuario(nombre,apellido,correo,contraseña,telefono)".
	" values('$nombre','$apellido','$email','$password','$telefono')";
	
	

    if (mysqli_query($conn, $insercion_u)) {
            $_SESSION['usuario']="ok";   
            header("Location: index.php?usuario=ok");
        } else {
            $_SESSION['mensaje'] = "Error";
            $_SESSION['msg_div'] = "danger";
            header("Location: registrarse.php?usuario=not");
        }
               
	 }
	

?>

<?php
    session_start();
    include_once ('config/conexion.php');

    $u=$_POST['correo'];
    $p=$_POST['contrasena'];
    $conn= getConexion();
    $consulta ="SELECT *".
               " FROM usuario as u". 
               " WHERE correo = '$u'". 
               " AND contraseña = '$p'";


    $resultado= mysqli_query($conn, $consulta);
          
    if(mysqli_num_rows($resultado)>0){
        $_SESSION['usuario'] = "ok";      
        header("Location: index.php");
    }else{
        $_SESSION['mensaje'] = "Usuario no valido";
        $_SESSION['msg_div'] = "danger";
        header("Location: iniciar_sesion.php");
    }
            
?>
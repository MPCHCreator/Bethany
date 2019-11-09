<?php
function getConexion(){
    
    $servidor="localhost:3306";
    $usuario="root";
    $psw="";
    $nom_db="service_db";
    
    
    $conn= mysqli_connect($servidor,$usuario,$psw,$nom_db);

    if(!$conn){
     die("No se establecio la conexion".mysqli_connect.error());
    
    }else{
        echo '';
    }
    mysqli_query($conn,"SET NAMES utf8");
    return $conn;  
}
?>


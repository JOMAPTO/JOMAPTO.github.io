<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="bitacoradeobra";
    $conn=mysqli_connect($host,$user,$pass,$db);
    mysqli_set_charset($conn,'UTF8');
    if(mysqli_connect_errno()){
        echo 'error en la conexion de base de datos';
    }
?>


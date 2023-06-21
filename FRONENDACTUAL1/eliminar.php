<?php 
include 'conexion.php'; 
$id=$_GET['id']; 
$sql="DELETE FROM bitacora WHERE id='$id'"; 
$query=mysqli_query($conexion,$sql); 
if($query){
header("location: reportes.php");
 } 
 ?>

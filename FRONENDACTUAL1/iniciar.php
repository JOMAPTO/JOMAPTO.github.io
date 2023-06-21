<?php
    include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/estilo.css">
</head>


<?php
        if(isset($_POST['listo'])){
            $correo=$_POST['correo'];
            $contraseña1=$_POST['contraseña1'];
            $insert="SELECT FROM usuario WHERE correo='$correo' AND Contraseña1='$Contraseña1'";
            $insertar=mysqli_query($conn,$insert);
                    if(!$insert){
                        echo 'se ha generado un error en la insercion';
                }
        }
?>

<body class="fondoinicio">
    
<form method="post">
    <div class="cuadrologin">
        <h1 class="titulologin">Ingresar</h1>
        
        <div class="caja">
            <form action="" method="post"></form>
                <input type="text" name="correo" placeholder="Correo"><br><br>
                <input type="text" name="contraseña1" placeholder="Contraseña"><br> <br>
                <a class="text1"href="#">Olvidecontraseña</a>
                <a class="text"href="registrarloging.php">Crear cuenta</a>
                <button name= "listo" class="buttoniniciar"><a href="formulario.php">Iniciar sección</a></button>
            </form>
        </form>
        </div>
    </div>
</body>
</html>

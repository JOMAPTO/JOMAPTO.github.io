<?php
    include("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/estilo.css">
    <title>Document</title>
</head>

<body>
            <?php
            if(isset($_POST['registrado'])){
            $id_cc=$_POST['id_cc'];
            $nombres=$_POST['nombres'];
            $apellidos=$_POST['apellidos'];
            $correo=$_POST['correo'];
            $contraseña1=$_POST['contraseña1'];
            $contraseña2=$_POST['contraseña2'];

            $sql="INSERT INTO usuario (id_cc, nombres, apellidos, correo, contraseña1, contraseña2)VALUES
            ('".$id_cc."','".$nombres."','".$apellidos."', '".$correo."','".$contraseña1."', '".$contraseña2."')";

            $insertar=mysqli_query($conn,$sql);
            if(!$sql){
            echo 'error en el login';     
            }
            }
             ?>

    <div class="regiter">
        <form method="POST">
            <h1 class="titulo_registro">Registro</h1>
            <form action="iniciar.php" method="post">
                <label class= "campo1" for="id_cc">Cedula</label>
                <input type="text" class="registro" name="id_cc" placeholder="Ingrese su cedula">
                <label class= "campo1" for="nombres">Nombres</label>
                <input type="text" class="registro" name="nombres" placeholder="Ingrese sus nombres">
                <label class= "campo1" for="apellidos">Apellidos</label>
                <input type="text" class="registro" name="apellidos" placeholder="Ingrese sus apellidos">
                <label class= "campo1" for="correo">Correo</label>
                <input type="email" class="registro" name="correo" placeholder="Ingrese su correo">
                <label class= "campo1"for="contraseña1">Contraseña</label>
                <input type="password" class="registro" name="contraseña1" placeholder="Ingrese su contraseña">
                <label class= "campo1" for="contraseña2">Confirme su contraseña</label>
                <input type="password" class="registro" name="contraseña2" placeholder="Confirme su contraseña">
                <button class= "registrado"> <a name="registrado"  value="registrado" href="iniciar.php">Guardar</a> </button>
            </form>
        </form>
    </div>
</body>
</html>
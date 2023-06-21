<?php
    include 'conexion.php';
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


    <body class="fondoformulario">
    <?php
            if(isset($_POST['enviar'])){
            $id_bitacora=$_POST['id_bitacora'];
            $id_cc=$_POST['id_cc'];
            $asunto=$_POST['asunto'];
            $fecha=$_POST['fecha'];
            $observacion=$_POST['observacion'];
            $firma=$_POST['firma'];
 
            $id_actividades=$_POST['id_actividades'];
            $id_bitacora=$_POST['id_bitacora'];
            $Excavacion=$_POST['Excavacion'];
            $Aplicaciondesubbasegranular=$_POST['Aplicaciondesubbasegranular'];
            $Aplicaciondebasegranular=$_POST['Aplicaciondebasegranular'];
            $Imprimacion=$_POST['Imprimacion'];
            $Aplicaciondeasfalto=$_POST['Aplicaciondeasfalto'];
            $Compactacion=$_POST['Compactacion'];

            $sql="INSERT INTO bitacora (id_bitacora, id_cc, asunto,fecha,observacion, firma)VALUES
            ('".$id_bitacora."', '".$id_cc."','".$asunto."','".$fecha."', '".$observacion."','".$firma."');";

            $insertar=mysqli_query($conn,$sql);
            if(!$sql){
            echo 'error en el login';     
            }
 
            $mostrar="INSERT INTO actividades (id_actividades,id_bitacora,Excavacion, Aplicaciondesubbasegranular,Aplicaciondebasegranular,
            Imprimacion,Aplicaciondeasfalto,Compactacion)VALUES
            ('".$id_actividades."','".$id_bitacora."','".$Excavacion."','".$Aplicaciondesubbasegranular."','".$Aplicaciondebasegranular."', '".$Imprimacion."', 
            '".$Aplicaciondeasfalto."', '".$Compactacion."')";

            $insert=mysqli_query($conn,$mostrar);
            if(!$mostrar){
            echo 'error en el login';     
            }
        }
            ?>

  <article>
        <form method="post">
        <img src="IMG/logo proyecto2.png" alt="">
        <form action="formulario.php" method="post">

        
            <a class="btn btn-info" href="reportes.php">Ver reportes</a>

            <input name="id_bitacora" type="text"class="">
            <input name="id_cc" type="text"placeholder="cedula"class="cedula">

            <label for="asunto">Asunto</label>
            <input name="asunto" type="text"class="ancho1">
            
            <label for="fecha"></label>
            <input name="fecha" type="date"class="ancho">
            <br>
            
            <div class="titulo2">
            <strong>Descripcion de actividades</strong> 
            </div>

            <input name="id_actividades" type="text" placeholder="id_actividades" class="form-control mb-3" > 
            <input name="id_bitacora" type="text" placeholder="id_bitacora" class="form-control mb-3" > 
            <input name="Excavacion" class="form-control mb-3" type="text" placeholder="Excavacion" class="Excavacion" > 
            <input name="Aplicaciondesubbasegranular" class="form-control mb-3" type="text" placeholder="Aplicacion de sub base granular" class="Aplicaciondesubbasegranular" > 
            <input name="Aplicaciondebasegranular" class="form-control mb-3" type="text" placeholder="Aplicacion de base granular" class="Aplicaciondebasegranular" >
            <input name="Imprimacion" type="text" class="form-control mb-3" placeholder="Imprimacion" class="Imprimacion" >
            <input name="Aplicaciondeasfalto" class="form-control mb-3" type="text" placeholder="Aplicacion de asfalto" class="Aplicaciondeasfalto" > 
            <input name="Compactacion" class="form-control mb-3" type="text" placeholder="Compactacion" class="Compactacion" > 

            <div class="titulo2">
            <strong>Observaciones</strong>
            </div>

            <input name="observacion" type="text" placeholder="Escribe tus Observaciones" class="form-control1 mb-3" > 
            <input name="firma" type="text"placeholder="firmas"class="firmas">

            <input type="submit" name="enviar" class="botonguardar" value="Guardar">
            <input type="submit" class="botoncrearreporte" value="Crear reporte">
            
        </form>
        </form>
        </article> 
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php
    include 'conexion.php';
?>
<div class="col-md-8">
        <table class="table">
            <thead class="table-success table-striped">
                <tr>
                    <th>id_bitacora</th>
                    <th>fecha</th>
                    <th>Excavación</th>
                    <th>Aplicacióndesubbasegranular</th>
                    <th>Aplicacióndebasegranular</th>
                    <th>Imprimación</th>
                    <th>Aplicacióndeasfalto</th>
                    <th>Compactación</th>
                    <th>observación</th>
                    <th>firma</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
         
            <tbody>
                <?php
                    $sql="SELECT * FROM bitacora";
                    $result=mysqli_query($conexion,$sql);
                    while($mostrar=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <th><?php echo $mostrar['id_bitacora'] ?></th>
                    <th><?php echo $mostrar['fecha'] ?></th>
                    <th><?php echo $mostrar['observación'] ?></th>
                    <th><?php echo $mostrar['firma'] ?></th>
                    <th><a class="btn btn-info"href="editar.php?=<?php echo $mostrar['id'] ?>">editar</a></th>
                    <th><a class="btn btn-danger"href="eliminar.php?=<?php echo $mostrar['id'] ?>">eliminar</a></th>
                </tr>
                <?php
                    }
                ?>
                <?php
                    $sql="SELECT * FROM actividades";
                    $result=mysqli_query($conexion,$sql);
                    while($mostrar=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <th><?php echo $mostrar['Excavación'] ?></th>
                    <th><?php echo $mostrar['Aplicacióndesubbasegranular'] ?></th>
                    <th><?php echo $mostrar['Aplicacióndebasegranular'] ?></th>
                    <th><?php echo $mostrar['Imprimación'] ?></th>
                    <th><?php echo $mostrar['Aplicacióndeasfalto'] ?></th>
                    <th><?php echo $mostrar['Compactación'] ?></th>
                    </tr>
                <?php
                    }
                ?>


            </tbody>
        </table>
    </div>
</body>
</html>
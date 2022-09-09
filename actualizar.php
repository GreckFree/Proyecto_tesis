<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM cliente WHERE id_cli='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id_cli" value="<?php echo $row['id_cli']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="rut" placeholder="rut" value="<?php echo $row['rut']  ?>">
                                <input type="text" class="form-control mb-3" name="nom_cli" placeholder="Nombres" value="<?php echo $row['nom_cli']  ?>">
                                <input type="text" class="form-control mb-3" name="ape_cli" placeholder="Apellidos" value="<?php echo $row['ape_cli']  ?>">
                                <input type="text" class="form-control mb-3" name="tel_cli" placeholder="telefono" value="<?php echo $row['tel_cli']  ?>">
                                <input type="text" class="form-control mb-3" name="direc_cli" placeholder="direccion" value="<?php echo $row['direc_cli']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>
<?php
include("conexion.php");
$con = conectar();

$sql = "SELECT * from cliente";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Crear Usuario</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <!--aca se divide la tabla-->

            <div class="col-md-3">
                <h1>Crear Usuario</h1>
                <form action="insertar.php" method="POST">


                     <input type="text" class="form-control mb-3" name="txtrut" placeholder="1.111.111-1">
                    <input type="text" class="form-control mb-3" name="txtnomb" placeholder="Ingrese su nombre">
                    <input type="text" class="form-control mb-3" name="txtape" placeholder="Ingrese su apellido">
                    <input type="text" class="form-control mb-3" name="txtfono" placeholder="+569 12345678">
                    <input type="text" class="form-control mb-3" name="txtdire" placeholder="Ingrese su dirección">


                    <input type="submit" class="btn btn-primary" name="btnguardar" value="Guargar">
                    <?php
                    error_reporting(0);


                    if ($_POST['btnguardar'] == "Guardar"); {

                        include("conexion.php");
                        $cnn = conectar();

                        $rut = $_POST['txtrut'];
                        $nomb = $_POST['txtnomb'];
                        $ape = $_POST['txtape'];
                        $fno = $_POST['txtfono'];
                        $sex = $_POST['txtdire'];
                      

                        $sql = "insert into clientes values 
                ('$rut','$nomb','$ape','$fna','$sex','$reg','$fno')";
                        mysqli_query($cnn, $sql);
                        //mysqli_query($cnn, "insert into clientes values ('rut','nomb','ape','fna','sex','reg','fno')");


                        echo "<script> alert(' Se han grabado los datos')</script>";
                    }




                    ?>








            </div>

            <div class="col-md-8">
                <table class="table">
                    <thead class="table-success table-stiped">
                        <tr>
                            <th>Nombre </th>
                            <th>Apellido </th>
                            <th>Rut </th>
                            <th>Telefono</th>
                            <th>Dirección</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>

                                <th><?php echo $row['rut'] ?></th>
                                <th><?php echo $row['nom_cli'] ?></th>
                                <th><?php echo $row['ape_cli'] ?></th>
                                <th><?php echo $row['tel_cli'] ?></th>
                                <th><?php echo $row['direc_cli'] ?></th>
                                <th><a href="actualizar.php?id=<?php echo $row['rut'] ?>" class="btn btn-info">Editar</a></th>
                                <th><a href="delete.php?id=<?php echo $row['rut'] ?>" class="btn btn-danger">Eliminar</a></th>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                </form>
            </div>
        </div>

    </div>
</body>

</html>
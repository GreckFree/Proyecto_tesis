<?php

include("conexion.php");
$con=conectar();

$id_cli=$_GET['id'];

$sql="DELETE FROM crear_usuario where id_cli='$id_cli'";
$query=mysqli_query($con,$sql);

    if($query){
        header("Location: crear_usuario.php");

    }

?>
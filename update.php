<?php

include("conexion.php");
$con=conectar();

$id_cli=$_POST['id_cli'];
$rut=$_POST['rut'];
$nom_cli=$_POST['nom_cli'];
$ape_cli=$_POST['ape_cli'];
$direc_cli=$_POST['direc_cli'];
$id_usuario=$_POST['id_usuario'];

$sql="UPDATE crear_usuario SET  rut='$rut',nom_cli='$nom_cli',ape_cli='$ape_cli',direc_cli='$direc_cli',id_usuario='$id_usuario' WHERE id_cli='$id_cli'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: crear_usuario.php");
    }
?>


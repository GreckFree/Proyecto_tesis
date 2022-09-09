<?php
include("conexion.php");
$con=conectar();


$rut=$_POST['rut'];
$nom_cli=$_POST['nom_cli'];
$ape_cli=$_POST['ape_cli'];
$tel_cli=$_POST['tel_cli'];
$direc_cli=$_POST['direc_cli'];
$id_usuario=$_POST['id_usuario'];

$sql="INSERT INTO cliente values('$rut','$nom_cli','$ape_cli','$tel_cli','$direc_cli','$id_usuario')";
$query=mysqli_query($con,$sql);

if($query){
    header("Location: crear_usuario.php");
}else {

}
?>





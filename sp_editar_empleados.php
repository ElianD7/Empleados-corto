<?php
$id = $_POST['id'];
$nom = $_POST['nom'];
$ape = $_POST['ape'];
$dir = $_POST['dir'];
$sal = $_POST['sal'];
$dni = $_POST['dni'];

$conexion = mysqli_connect('localhost' , 'root','','empresa no2');
$sql = "UPDATE empleados set Nombre='$nom', Apellido='$ape', Direccion='$dir', salario='$sal', DNI='$dni'WHERE ID='$id'";
$rta= mysqli_query($conexion, $sql);
if (!$rta) {
echo "no se modifico. ";
die(mysqli_error($conexion));
} else {
    header("location:Tabla_empleados2.php");
}
?>  
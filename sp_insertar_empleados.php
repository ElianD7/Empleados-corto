<?php
$nom = $_POST['nom'];
$ape = $_POST['pue'];
$dir = $_POST['tel'];
$sal = $_POST['sal'];
$dni = $_POST['dni'];

$conexion = mysqli_connect('localhost' , 'root','','empresa no2');
$sql = "INSERT INTO empleados(Nombre,Apellido,Direccion,Salario,DNI) VALUES ('$nom', '$ape', '$dir', '$sal', '$dni')";
$rta= mysqli_query($conexion, $sql);
if (!$rta) {
echo "no se inserto. ";
die(mysqli_error($conexion));
} else {
    header("location:Tabla_empleados2.php");
}
?>  
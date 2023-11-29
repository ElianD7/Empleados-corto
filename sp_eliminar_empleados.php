<?php
$id = $_GET['id'];

$conexion = mysqli_connect('localhost' , 'root','','empresa no2');
$sql = "DELETE FROM empleados where ID like $id";
$rta= mysqli_query($conexion, $sql);
if (!$rta) {
echo "no se elimino. ";
die(mysqli_error($conexion));
} else {
    header("location:Tabla_empleados2.php");
}
?>  
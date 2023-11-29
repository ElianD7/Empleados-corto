<!DOCTYPE html>
<html>
<head>
	<meta: charset="UTF-8">
	<meta: http_equiv= "X-UA-Compatible" content="IE=edge">
	<meta: name="viewport" content="width=device-width, initial-scale=1.0">
	<title>empleados</title>
</head>
<body>
<div>
	<form action="Tabla_empleados2.php" method="post">
		<input type="text" id="buscar" name="buscar" >
		<input type="submit" value=buscar>
		<a href="nuevo_empleados.php"> nuevo </a>
	</form>
</div>
<div>
	 <table border="1" >
		<tr>
			<td>id</td>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Direccion</td>
			<td>salario</td>
			<td>dni</td>
            <td>Opciones</td>
		</tr>

		<?php
		if(isset($_POST['buscar'])){
			$buscar=$_POST['buscar'];
		if (empty($_POST['buscar'])){
		// no hace nada por ahora;
}else{
	 $conexion = mysqli_connect('localhost' , 'root','','empresa no2');
	 $sql = "SELECT * FROM empleados WHERE Nombre like '%" .$buscar."%' ";
	 $result= mysqli_query($conexion, $sql);
		while ($mostrar = mysqli_fetch_row($result)) {
		 ?>

         <tr>
			<td><?php echo $mostrar['0'] ?></td>
			<td><?php echo $mostrar['1'] ?></td>
			<td><?php echo $mostrar['2'] ?></td>
			<td><?php echo $mostrar['3'] ?></td>
			<td><?php echo $mostrar['4'] ?></td>
			<td><?php echo $mostrar['5'] ?></td>
            <td>  
                <a href="editar_empleados_gpt.php?
				id=<?php echo $mostrar ['0'] ?> &
				nom=<?php echo $mostrar ['1'] ?> &
				ape=<?php echo $mostrar ['2'] ?> &
				dir=<?php echo $mostrar ['3'] ?> &
				sal=<?php echo $mostrar ['4'] ?> &
				dni=<?php echo $mostrar ['5'] ?>"> Editar </a>
                <a href="sp_eliminar_empleados.php? dni=<?php echo $mostrar ['0'] ?>"> eliminar </a>
            </td>
		</tr>
		<?php 
		}
}}else{
	$sql = "SELECT * from empleados";
	$conexion = mysqli_connect('localhost' , 'root','','empresa no2');
	$result= mysqli_query($conexion, $sql);
		while ($mostrar = mysqli_fetch_row($result)) {
		 ?>

		<tr>
			<td><?php echo $mostrar['0'] ?></td>
			<td><?php echo $mostrar['1'] ?></td>
			<td><?php echo $mostrar['2'] ?></td>
			<td><?php echo $mostrar['3'] ?></td>
			<td><?php echo $mostrar['4'] ?></td>
			<td><?php echo $mostrar['5'] ?></td>
            <td>  
                <a href="editar_empleados_gpt.php?
				id=<?php echo $mostrar ['0'] ?> &
				nom=<?php echo $mostrar ['1'] ?> &
				ape=<?php echo $mostrar ['2'] ?> &
				dir=<?php echo $mostrar ['3'] ?> &
				sal=<?php echo $mostrar ['4'] ?> &
				dni=<?php echo $mostrar ['5'] ?>"> Editar </a>
                <a href="sp_eliminar_empleados.php? id=<?php echo $mostrar ['0'] ?>"> eliminar </a>
            </td>
		</tr>
	<?php 
	}}
	 ?>
	</table>

</body>
</html>
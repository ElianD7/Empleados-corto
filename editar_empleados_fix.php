<!DOCTYPE html>
<html lang="en">
    <head>
        <meta: charset="UTF-8">
        <meta: http_equiv= "X-UA-Compatible" content="IE=edge">
        <meta: name="viewport" content="width=device-width, initial-scale=1.0">
        <title>insertar</title>
    </head>
<body>
    <?php
    $id = $_GET['id'];
    $nom = $_GET['nom'];
    $ape = $_GET['ape'];
    $dir = $_GET['dir'];
    $sal = $_GET['sal'];
    $dni = $_GET['dni'];
    ?>
    
    <div>
        <form action="sp_editar_empleados.php" method="post">
            <table border="1">
                <tr>
                </tr>
                <tr>
                    <td>ingrese datos a modificar:</td>
                 </tr>
                 <tr>
                     <td>Nombre:</td>
                    <td><input type="text" name="nom" id="nom" value="<?=$nom?>"></td>
                </tr>
                <tr>
                    <td>Apellido:</td>
                    <td><input type="text" name="ape" id="ape" value="<?=$ape?>"></td>
                </tr>
                <tr>
                    <td>Direccion:</td>
                    <td><input type="text" name="dir" id="dir" value="<?=$dir?>"></td>
                </tr>
                <tr>
                    <td>salario:</td>
                    <td><input type="number" name="sal" id="sal" value="<?=$sal?>"></td>
                </tr>
                <tr>
                     <td>DNI:</td>
                     <td><input type="number" name="dni" id="dni" value="<?=$dni?>"></td>
                 </tr>
                <tr>
                    <td><input type="submit" value="guardar" id=" "></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
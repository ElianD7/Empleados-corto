<!DOCTYPE html>
<html lang="en">
    <head>
        <meta: charset="UTF-8">
        <meta: http_equiv= "X-UA-Compatible" content="IE=edge">
        <meta: name="viewport" content="width=device-width, initial-scale=1.0">
        <title>insertar</title>
    </head>
<body>
    <div>
        <form action="sp_insertar_empleados.php" method="post">
            <table border="1">
                <tr>
                    <td>ingrese datos:</td>
                </tr>
                <tr>
                    <td>Nombre:</td>
                    <td><input type="text" name="nom" id="nom"></td>
                </tr>
                <tr>
                    <td>Apellido:</td>
                    <td><input type="text" name="pue" id="pue"></td>
                </tr>
                <tr>
                    <td>Direccion:</td>
                    <td><input type="text" name="tel" id="tel"></td>
                </tr>
                <tr>
                    <td>salario:</td>
                    <td><input type="number" name="sal" id="sal"></td>
                </tr>
                <tr>
                    <td>DNI:</td>
                    <td><input type="number" name="dni" id="dni"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="guardar" id=" "></td>
                </tr>
            </table>
            <p> recuerda que la DNI no puede cambiarseuna ves creado, solo puede ser eliminado </p>
        </form>
    </div>
</body>
</html>
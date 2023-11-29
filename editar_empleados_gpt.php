<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <script>
    function validateNumberInput(inputId) {
        var inputValue = document.getElementById(inputId).value;
        if (!/^\d+$/.test(inputValue)) {
            alert("Por favor en los campos DNI y Salario ingrese unicamente numeros.");
            return false;
        }
        return true;
    }

    function validateForm() {
        return validateNumberInput("sal") && validateNumberInput("dni");
    }
</script>

<form action="sp_editar_empleados.php" method="post" onsubmit="return validateForm()">
            <table border="1">
                <tr>
                    <td>ingrese datos a modificar:</td>
                </tr>
                <tr>
                    <td>ID:</td>
                    <td><input type="text" name="id" id="id" value="<?=$id?>"hidden></td>
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
                    <td>Salario:</td>
                    <td><input type="text" name="sal" id="sal" value="<?= $sal ?>" placeholder="Enter a number"></td>

                </tr>
                <tr>
                    <td>DNI:</td>
                    <td><input type="text" name="dni" id="dni" value="<?= strval($dni) ?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="guardar" id=""></td>
                </tr>
</form>

            </table>
        </form>
    </div>
    Por favor en el campo ID Y Salario solo use numeros

</body>
</html>
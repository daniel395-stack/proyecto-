<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <table border="1">
            <tr>
                <td>Ingrese Codigo</td>
                <td><input type="number" name="txtCodEmpleados" placeholder></td>
            </tr>
            <tr>
                <td>Primer Nombre</td>
                <td><input type="text" name="txtPrimerNombre" placeholder></td>
            </tr>
            <tr>
                <td>Segundo Nombre</td>
                <td><input type="text" name="txtSegundoNombre" placeholder></td>
            </tr>
            <tr>
                <td>Primer Apellido</td>
                <td><input type="text" name="txtPrimerApellido" placeholder></td>
            </tr>
            <tr>
                <td>Segundo Apellido</td>
                <td><input type="text" name="txtSegundoApellido" placeholder></td>
            </tr>
            <tr>
                <td>Sexo</td>
                <td>
                    <select name="cboSexo">
                        <option value="0">Mujer</option>
                        <option value="1">Hombre</option>
                    </select>
                </td>                
            </tr>
            <tr>
                <td>Religion</td>
                <td><input type="text" name="txtReligion" placeholder></td>
            </tr>
            <tr>
                <td>Escolaridad</td>
                <td><input type="text" name="txtEscolaridad" placeholder></td>
            </tr>
            <tr>
                <td>Deporte</td>
                <td><input type="text" name="txtDeporte" placeholder></td>
            </tr>
            <tr>
                <td>Telefono</td>
                <td><input type="number" name="txtTelefono" placeholder></td>
            </tr>
            <tr>
                <td>Celular</td>
                <td><input type="number" name="txtCelular" placeholder></td>
            </tr>
            <tr>
                <td>Direccion</td>
                <td><input type="text" name="txtDireccion" placeholder></td>               
            </tr>
            <tr>
                <td>Fecha Nacimiento</td>
                <td><input type="date" name="txtFechaNacimiento" placeholder></td>
            </tr>
            <tr>
                <td>Cedula</td>
                <td><input type="number" name="txtCedula" placeholder></td>
            </tr>
            <tr>
                <td>Correo</td>
                <td><input type="text" name="txtCorreo" placeholder></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Enviar">
                </td>
            </tr>
        </table>
    </form>

    <?php 
    
    if (isset($_POST["txtCodEmpleados"])){ 
        $objctrEmpleado = new ControladorEmpleado();
        if ( $objctrEmpleado -> ctrInsertarEmpleado() == true ){

            echo "
                <script>
                alert('El dato fue insertado');
                </script>
            ";
        } else{
            echo "
                <script>
                alert('Ha ocurrido un error');
                </script>
            ";
        }

    }
    
    ?>

</body>
</html>


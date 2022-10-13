<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear</title>
    <link rel="stylesheet" href="css/nuevoCSS.css">
</head>
<body>
    
    <?php    

        $arrayErrores=[]; 
    
       
            if (isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['foto'])) 
            {
                $con = conectabd();
                $id = $_POST['id'];
                $nombre = $_POST['nombre'];
                $foto = $_POST['foto'];

                insert($con, $id, $nombre, $foto);

                //Errores de id
                if (is_nan($id)) 
                {
                    $arrayErrores['id']="La id no puede superar los 4 dígitos";         
                }

                //Errores de nombre
                if (is_numeric($nombre))
                {
                    $arrayErrores['nombre']="No puede ser números";
                }
                if (empty($arrayErrores)) {
                    echo "<strong>Bienvenido </strong>".$nombre;
                }
            }
        
    ?>
    
    <table>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <tr>
                <td><label for="">ID</label></td>
                <td><input type="text" id="id" maxlength="4">
                    <?php
                        if(isset($arrayErrores['id']))
                        {
                            echo "<span style='color:red'>".$arrayErrores['id']."</span>";
                        }                     
                    ?>
                </td>
            </tr>
            <tr>
                <td><label for="">Nombre</label></td>
                <td><input type="text" id="nombre">
                    <?php
                        if(isset($arrayErrores['nombre']))
                        {
                            echo "<span style='color:red'>".$arrayErrores['nombre']."</span>";
                        }                     
                    ?>
                </td>

            </tr>
            <tr>
                <td><label for="">Seleccionar Foto</label></td>
                <td><input name="foto" type="file"/></td>    
            </tr>
            <tr>
                <td><input type="submit" value="Añadir" name="btn" /></td>
            </tr>
        </form>

    </table>
</body>
</html>
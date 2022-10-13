<!DOCTYPE html>
<html lang="es">
<head>
    <meta content="text/html; charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear</title>
    <link rel="stylesheet" href="css/nuevoCSS.css">
</head>
<body>
    
    <?php    
        
        if (isset($_POST['btn'])) 
        {
            if (!empty($_POST['id']) && !empty($_POST['nombre']) && !empty($_POST['foto'])) 
            {
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $fotoMalFormato = $_POST['foto'];
            $foto = null;
           // base64_encode($fotoMalFormato);

            $conex = conectabd();
                insert($conex, $id, $nombre, $foto);
            //metodoInsert($id, $nombre, $foto)
            }
    }
    ?>
    
    <table>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data" method="post">
            <tr>
                <td><label for="">ID</label></td>
                <td><input type="text" id="id"></td>
            </tr>
            <tr>
                <td><label for="">Nombre</label></td>
                <td><input type="text" id="nombre"></td>

            </tr>
            <tr>
            <td>
                <label for="">Seleccionar Foto</label></td>
                <input name="foto" type="file"/>    
            </tr>
            <tr>
                <td><input type="submit" value="Añadir" name="btn" /></td>
            </tr>
        </form>
        <?php
        unset($dwes);
?>

    </table>
</body>
</html>
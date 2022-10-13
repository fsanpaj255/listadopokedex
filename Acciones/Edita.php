<!DOCTYPE html>
<html lang="es">
<head>
    <meta content="text/html; charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="css/editaCSS.css">
</head>
<body>
    <?php
        

    ?>

    <table>
        <form action="" method="post">
            <tr>
                <td><label for="">ID</label></td>
                <td><input type="text" id="id" disabled></td>
                <?php
        

                ?>
            </tr>
            <tr>
                <td><label for="">Nombre</label></td>
                <td><input type="text" id="nombre"></td>
                <?php
        

                ?>
            </tr>
            <tr>
                <td><label for="">Seleccionar Foto</label></td>
                <input name="foto" type="file"/>
                <?php
        

                ?>
            </tr>
            <tr>
                <td><input type="submit" value="Guardar" name="btn"/></td>
            </tr>
        </form>
    </table>
</body>
</html>
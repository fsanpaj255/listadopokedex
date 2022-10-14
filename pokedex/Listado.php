<?php
include "bd.php";
$id= $_POST['id'];
$nombre = $_POST['nombre'];
$foto = base64_encode($_POST['foto']);
$conect= conenctabd();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td {
            border-collapse: collapse;
	        border: 1px solid black;
            margin: auto;
            text-align: center;
      }
    </style>

</head>
<body>
    <div>
        <h1>Listado de pokedex</h1>

        <form action="nuevo.php" method="post"></form>
        
        <button name="nuevo" type="submit">Nuevo </button>

           
        </table>
        <table class="table table-bordered table-striped">
        <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Foto</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
        </thead>
        <tbody>
        <?php 
            include('bd.php'); 

                $query = "select * from $pokedex";    
                $result = mysql_query($query); 

                while ($registro = mysql_fetch_array($result)){ 
            echo " 
                <tr> 
                <td>".$registro['id']."</td> 
                <td>".$registro['nombre']."</td> 
                <td>".$registro['email']."</td> 
                <td></td> 
                <td><a href=".echo "Edita.php?id="$registro['edita'].">✍</a></td>
                <td><a href=".echo "Elimina.php?id="$registro['elimina'].">❌</a></td>
                </tr> 
            "; 
            } 
        ?> 
        </tbody>
        </table>
    </div>
</body>
</html>

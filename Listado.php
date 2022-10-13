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
            margin: 30px;
            text-align: center;
      }
    </style>

</head>
<body>
    <div>
        <h1>Listado de pokedexs</h1>

        <button name="nuevo" type="submit" class="btn btn-primary  btn-block">Nuevo </button>
           
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
                $sql = "SELECT * FROM pokedex"; 
                $query = $connect -> prepare($sql); 
                $query -> execute(); 
                $results = $query -> fetchAll(PDO::FETCH_OBJ); 

                if($query -> rowCount() > 0)   { 
                foreach($results as $result) { 
                echo "<tr>
                    <td>".$result -> id."</td>
                    <td>".$result -> nombre."</td>
                    <td>".$result -> foto."</td>
                    <td>
                    <form method='POST' action='".$_SERVER['PHP_SELF']."'>
                    <input type='hidden' name='id' value='".$result -> id."'>
                    <button name='editar'>✍</button>
                    </form>
                    </td>

                    <td>
                        <form  onsubmit=\"return confirm('Realmente desea eliminar el registro?');\" method='POST' action='".$_SERVER['PHP_SELF']."'>
                            <input type='hidden' name='id' value='".$result -> id."'>
                            <button name='eliminar'>❌</button>
                        </form>
                    </td>
                </tr>";

                }
                }
        ?>
        </tbody>
        </table>
    </div>
</body>
</html>
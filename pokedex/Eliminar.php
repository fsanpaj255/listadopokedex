<?php  
if(isset($_POST['eliminar'])){
    $consulta = "DELETE FROM `pokedex` WHERE `id`=:id";
    $sql = $connect-> prepare($consulta);
    $sql -> bindParam(':id', $id, PDO::PARAM_INT);
    $id=trim($_POST['id']);

    $sql->execute();

if($sql->rowCount() > 0)
{
    $count = $sql -> rowCount();
    echo "<div class='content alert alert-primary' > 
    Gracias: $count registro ha sido eliminado  </div>";
}
else{
    echo "<div class='content alert alert-danger'> No se pudo eliminar el registro  </div>";

print_r($sql->errorInfo()); 
}
}// Cierra envio de guardado
?>
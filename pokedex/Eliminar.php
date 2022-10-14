<?php  
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include "bd.php";
$sentencia = $conectabd();
delete($sentencia,$id);
header("Location: Listado.php");
?>

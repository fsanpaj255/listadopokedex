<?php
include('bd.php');
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$foto = $_POST['foto'];
$conex = conectabd();

insert($conex,$id,$nombre,$foto);


?>
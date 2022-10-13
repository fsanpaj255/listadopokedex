<?php
//Conectarse a la base de datos
    function conectabd(){
        $conexion = new PDO("mysql:host=localhost;dbname=pokedex", "root", "");
        return $conexion;
    }

    //Coger todos
    function getall($conexion){
      $resultado =  $conexion->query("select * from pokedex");

      while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
        $listadopokemons[] = $fila;
      }
      return $listadopokemons;
    }

    //Coger uno
    function getone($conexion,$id){
      $resultado =  $conexion->query("select id,nombre,foto from pokedex where id=".$id.";");
      foreach( $resultado as $fila ) {
        return $fila;
    }
    }

    //Insertar nuevo pokemon
    function insert($conexion,$id,$nombre,$foto){
     $conexion->query("INSERT INTO pokedex (id, nombre, foto) VALUES ('$id','$nombre', '$foto')");
    }

    //Actualizar por su id
    function update($conexion,$id,$nombre,$foto){
      $conexion->query("UPDATE pokedex SET nombre='$nombre',foto='$foto' WHERE id='$id'");
    }
    
    //Borrar por su id
    function delete($conexion,$id){
      $conexion->query("DELETE FROM pokedex WHERE id='$id'");
    }

?>
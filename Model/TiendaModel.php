<?php

class TiendaModel{

    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tienda;charset=utf8', 'root', '');
   }//coneccion a ddbb

   function traeDatos(){

    $sentencia = $this->db->prepare( "select * from producto");
    $sentencia->execute();
    $producto = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $producto;

    }

    // function insertarProducto($producto){
    //     $data = $this->db->prepare("INSERT INTO productos(name_tarea) VALUES(? ? ? ? ?)");
    //     $data->execute(array($producto));
    // }


}
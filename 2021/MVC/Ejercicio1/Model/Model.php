<?php


class Model{
    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tarea;charset=utf8', 'root', '');
   }

   function devuelveDatos(){
        $sentencia = $this->db->prepare( "select * from tareas");
        $sentencia->execute();
        $nombres = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $nombres;
   }

   function insertarTarea($tarea){
    $sentencia = $this->db->prepare("INSERT INTO tareas(name_tarea) VALUES(?)");
    $sentencia->execute(array($tarea));
}
}


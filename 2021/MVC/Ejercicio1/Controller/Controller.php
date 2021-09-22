<?php

require_once "./Model/Model.php";
require_once "./View/View.php";


class Controller{

    private $model;
    private $view;

    function __construct(){
        $this->model = new Model();
        $this->view = new View();
    }
    
    function showHome(){
        $tareas = $this->model->devuelveDatos();
        $this->view->mostarHome($tareas);

    }

    function crearTarea(){

        $this->model->insertarTarea($_POST['name_tarea']);
        $this->view->showHomeLocation();
    }
}
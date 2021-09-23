<?php

require_once "./Model/TiendaModel.php";
require_once "./View/TiendaView.php";

class TiendaController{
    private $model;
    private $view;

    function __constructor(){
        $this->model = new TiendaModel();
        $this->view = new TiendaView();
    }

    function showHome(){
        $producto = $this->model->traeDatos();
        $this->view->mostarHome($producto);
    }



}

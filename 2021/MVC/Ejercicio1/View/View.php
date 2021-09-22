<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class View{
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }
        
    function mostarHome($tarea){       

        $this->smarty->assign('name', 'Nombre tareas');     
        $this->smarty->assign('tasks', $tarea);

        $this->smarty->display('templates/tareas.tpl');
    }

    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
    }
        
}

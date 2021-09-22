<?php

class TiendaView{

    function __construct(){

    }

    function mostrarHome($productos){
        $html = '<!DOCTYPE html>
        <html lang="en">
        <head>
            <base href="'.BASE_URL.'" />
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Tareas 2021</title>
        </head>
        <body>
            
            <h1>Tareas 2021</h1>
        
            <ul>';
    
        foreach($productos as $producto) {

             $html.= '<li>'.$producto->id_producto. $producto->id_categoria.$producto->tipo_p.
             $producto->marca_p.$producto->precio_p.'</li>';
           
         }
    
        $html .=   '
            </ul>'
         ;
    
        echo $html;
    }
}
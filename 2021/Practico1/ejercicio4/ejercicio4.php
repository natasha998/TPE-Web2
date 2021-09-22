<?php
//Modifique el ejercicio 2 para que el usuario mediante links html
//pueda ir modificando el tamaño de la lista

    $arrList = ["Azucar","Yerba","Bizcochitos","Fideos","Arroz"];
    

    function mostrarLista($arrList,$tamano){
        echo "<ul>";
        for($i= 0;$i<$tamano;$i++){
            echo "<li>";

            echo $arrList[$i];

            echo "</li>";

        }
        echo "</ul>";
        }
        echo "Hi world";
        if(isset($_GET["tamano"])){
            $tamano = $_GET["tamano"];

            $tamanoAll = count($arrList);

            mostrarLista($arrList,$tamano);
            if($tamano == "all"){
                mostrarLista($arrList,$tamanoAll);
            }

        }
    
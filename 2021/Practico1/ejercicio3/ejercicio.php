<!-- Escribir un programa que mediante un formulario html un usuario pueda ingresar su nombre, apellido y
edad para que sean enviados al servidor. El programa, debe recibir los datos y mostrar la información
por pantalla. Envíe el formulario usando los métodos POST y GET. ¿Cuál es la diferencia? ¿En qué
situaciones considera mejor utilizar uno u el otro? Investigue las diferencias entre los arreglos 
$_POST $_GET y $_REQUEST de PHP Genere validaciones de datos en el servidor. Ningún campo puede 
estar vacío. ¿Cuál es la diferencia entre realizar estas verificaciones del lado del cliente o del
 lado del servidor?  -->


 <?php

        if(!empty($_GET)){
            if(( isset($_GET['name']))&&( isset($_GET['surname']))&&( isset($_GET['age']))){
                if (( !empty($_GET['name']))&&( !empty($_GET['surname']))&&( !empty($_GET['age']))){
                    echo $_GET['name'].'/'.$_GET['surname'].'/'.$_GET['age'];//imprime por pantalla los datos
                }else{
                    echo'Campos vacios';
                }
            }else{                                                    
                echo 'Error';
            }    
        }
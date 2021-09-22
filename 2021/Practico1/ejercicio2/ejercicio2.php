<!--
 Escribir un programa que muestre una lista html generada desde el servidor a 
 través de un arreglo. Identifique las diferencias entre arreglos asociativos 
 e indexados
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listas</title>
</head>
<body>
    <?php
        $arregloAsociativo = array(
            "nombre1: " => "Maria",
            "nombre2: " => "Rosana",
            "nombre3: " => "Franco",
        );//arreglo asociativo al cual yo le agrego una clave :nombre1,nombre2...
     

        $arregloIndexado = array("Juan","Pedro");
        array_push($arregloIndexado, "Miguel");
       
        echo "<ul>";
            foreach ($arregloIndexado as $mostrar){
                echo "<li> $mostrar </li>"; 
            } 
        echo "</ul>";

        echo "<ul>";
            foreach ($arregloAsociativo as $mostrar){
                echo "<li> $mostrar </li>"; 
            } 
        echo "</ul>";
?>
</body>
</html>
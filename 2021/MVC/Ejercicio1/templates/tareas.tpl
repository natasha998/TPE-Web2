<!DOCTYPE html>
<html lang="en">
<head>
    <base href="'.BASE_URL.'" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas 2021</title>
</head>
<body>   
    
    <h1>{$name}</h1>
    
    <ul>
    {foreach from=$tasks item=$task}

        <li>{$task->name_tarea}</li>
        
    {/foreach}
    </ul>
 

    
    <h2>Crear Tarea</h2>
    <form action="crearTarea" method="post">
        <input type="text" name="name_tarea">
        <input type="submit" class="btn btn-primary" value="Guardar">
    </form>
</body>
</html>
    
    
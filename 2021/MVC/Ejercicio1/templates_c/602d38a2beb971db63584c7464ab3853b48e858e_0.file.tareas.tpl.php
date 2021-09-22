<?php
/* Smarty version 3.1.39, created on 2021-09-21 20:20:13
  from 'D:\xampp\htdocs\web2\2021\MVC\Ejercicio1\templates\tareas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614a225d6e7761_69089036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '602d38a2beb971db63584c7464ab3853b48e858e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2\\2021\\MVC\\Ejercicio1\\templates\\tareas.tpl',
      1 => 1632248371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614a225d6e7761_69089036 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="'.BASE_URL.'" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas 2021</title>
</head>
<body>   
    
    <h1><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h1>
    
    <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'task');
$_smarty_tpl->tpl_vars['task']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
$_smarty_tpl->tpl_vars['task']->do_else = false;
?>

        <li><?php echo $_smarty_tpl->tpl_vars['task']->value->name_tarea;?>
</li>
        
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
 

    
    <h2>Crear Tarea</h2>
    <form action="crearTarea" method="post">
        <input type="text" name="name_tarea">
        <input type="submit" class="btn btn-primary" value="Guardar">
    </form>
</body>
</html>
    
    <?php }
}

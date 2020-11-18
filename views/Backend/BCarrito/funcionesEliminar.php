<?php

    $IDProducto = $_GET['id'];
    $id_c = $_GET['idc'];
    $control = $_GET['control'];
    
    if($control != 1)
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/BackendP/BEPfuncionesEliminar.php?id=".$IDProducto."&idc=$id_c");
    }else
    {
        header("Location: http://localhost/Bird_punk/views/carrito.php");
    }

?>
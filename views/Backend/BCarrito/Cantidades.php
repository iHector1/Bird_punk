<?php
    $id_c = $_GET['id'];
    $control = $_GET['control'];

    if($control != 1)
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/BackendP/BEPCantidades.php?id=".$id_c);
    }else
    {
        header("Location: http://localhost/Bird_punk/views/carrito.php?control=3");
    }
    

    //header("Location: http://localhost/Bird_punk/views/carrito.php?control=3");
?>
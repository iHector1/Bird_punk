<?php
    $id_U = $_GET['ids'];
    $id_C = $_GET['idc']; 
    $control = $_GET['control'];

    if($control != 1)
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/BackendP/BEPPLimpiarCarrito.php?ids=".$id_U."&idc=$id_C");
    }else
    {
        header("Location: http://localhost/Bird_punk/views/carrito.php");
    }
   
   
?>
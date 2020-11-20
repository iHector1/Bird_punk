<?php
    
    $id_c = $_GET['id'];
    $control = $_GET['control'];
    $idu = $_GET['idu'];

    if($control != 1)
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/BackendP/BEPtotalArticulo.php?id=".$id_c."&idu=$idu");
    }else
    {
        header("Location: http://localhost/Bird_punk/views/carrito.php?control=4&idc=".$id_c."&idu=$idu");
    }
   
?>
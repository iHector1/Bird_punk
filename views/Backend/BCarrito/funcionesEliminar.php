<?php

    $IDProducto = $_GET['id'];
    $id_c = $_GET['idc'];
    $control = $_GET['control'];
    $idu = $_GET['idu'];

    if($control != 1)
    {
        echo $id_c;
        echo $idu;
        header("Location: http://25.90.201.164/distribuidos/Bird_punk/views/BackendP/BEPfuncionesEliminar.php?id=".$IDProducto."&idc=$id_c&idu=$idu");
    }else
    {
        echo $id_c;
        echo $idu;
        header("Location: http://localhost/Bird_punk/views/carrito.php?&idc=".$id_c."&idu=$idu");
    }

?>
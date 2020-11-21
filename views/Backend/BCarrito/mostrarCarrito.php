<?php
    $id_c = $_GET['id'];
    $total = $_GET['total'];
    $arreglo = $_GET['carrito'];
    $control = $_GET['control'];
    $idu = $_GET['idu'];


    if($control != 1)
    {
        header("Location: http://25.90.201.164/distribuidos/Bird_punk/views/BackendP/BEPmostrarCarrito.php?id=".$id_c."&total=$total&idu=$idu");
    }else
    {
        header("Location: http://localhost/Bird_punk/views/carrito.php?carrito=".$arreglo."&control=6&total=$total&idc=$id_c&idu=$idu");
    }
?>

<?php
    $id_U = $_GET['idu'];
    $total = $_GET['total'];
    $carrito = $_GET['carrito'];
    $control = $_GET['control'];
    $idu = $_GET['idu'];
    $arreglo = $_GET['arreglo'];
    $carrito2 = $_GET['carrito2'];
    $idc = $_GET['idc'];
    
    if($control != 1)
    {
        echo "OK2";
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/ServerBD/BDpagoCarrito.php?idu=".$idu."&id=$id_U&total=$total&carrito=$carrito&idc=$idc");
    }else
    {
        echo "OK3";
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/Backend/pagoCarritoP.php?arreglo=".$arreglo."&control=1&total=$total&carrito2=$carrito2&idc=$idc");
    }

?>
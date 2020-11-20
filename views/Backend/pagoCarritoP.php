<?php
    
    $id_U = $_GET['idu'];
    $total = $_GET['total'];
    $carrito = $_GET['idCar'];
    $control = $_GET['control'];
    $idu = $_GET['idu'];
    $arreglo = $_GET['arreglo'];
    $carrito2 = $_GET['carrito2'];
    $idc = $_GET['idc'];

    if($control != 1)
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/BackendP/BEPpagoCarritoP.php?idu=".$idu."&id=$id_U&total=$total&carrito=$carrito&idc=$idc");
    }else
    {
        header("Location: http://localhost/Bird_punk/views/Pago.php?arreglo=".$arreglo."&control=6&total=$total&idc=$idc&carrito2=$carrito2");
    }

    
?>
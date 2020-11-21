<?php
    $id_c = $_GET['idCar'];
    $total = $_GET['total'];
    $arreglo = $_GET['carrito'];
    $control = $_GET['control'];
    $idu = $_GET['idu'];

    if($control != 1)
    {
        header("Location: http://25.90.201.164/distribuidos/Bird_punk/views/BackendP/BEPmostrarCarritoP.php?idCar=".$id_c."&total=$total&idu=$idu");
    }else
    {
        header("Location: http://localhost/Bird_punk/views/Pago.php?carrito=".$arreglo."&control=2&total=$total&idu=$idu&idc=$id_c");
    }
    
    
?>


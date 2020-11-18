<?php
    $id_c = $_GET['idCar'];
    $total = $_GET['total'];
    $arreglo = $_GET['carrito'];
    $control = $_GET['control'];

    if($control != 1)
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/BackendP/BEPmostrarCarritoP.php?idCar=".$id_c."&total=$total");
    }else
    {
        header("Location: http://localhost/Bird_punk/views/Pago.php?carrito=".$arreglo."&control=2&total=$total");
    }
    
    
?>


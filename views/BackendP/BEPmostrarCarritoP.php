<?php
    $id_c = $_GET['idCar'];
    $total = $_GET['total'];
    $arreglo = $_GET['carrito'];
    $control = $_GET['control'];
    $idu = $_GET['idu'];

    if($control != 1)
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/ServerBD/BDmostrarCarritoP.php?idCar=".$id_c."&total=$total&idu=$idu");
    }else
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/Backend/BCarrito/mostrarCarritoP.php?carrito=".$arreglo."&control=1&total=$total&idu=$idu&idCar=$id_c");
    }
    
    
?>
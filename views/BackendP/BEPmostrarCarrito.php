<?php
    $id_c = $_GET['id'];
    $total = $_GET['total'];
    $arreglo = $_GET['carrito'];
    $control = $_GET['control'];
    $idu = $_GET['idu'];
    if($control != 1)
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/ServerBD/BDmostrarCarrito.php?id=".$id_c."&total=$total&idu=$idu");
    }else
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/Backend/BCarrito/mostrarCarrito.php?carrito=".$arreglo."&control=1&total=$total&id=$id_c&idu=$idu");
    }
    
?>
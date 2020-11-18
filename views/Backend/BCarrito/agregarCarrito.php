<?php
    include '../../conexion.php';

    $articulo = $_GET['id'];
    $Cantidad = $_GET['cantidad'];
    $id_c = $_GET['carrito'];
    $control = $_GET['control'];

    if($control != 1)
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/BackendP/BEPagregarCarrito.php?id=".$articulo."&cantidad=$cantidad&carrito=$carrito");
    }else
    {
        header("Location: http://localhost/Bird_punk/views/carrito.php?control=2");
    }

    
?>
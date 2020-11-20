<?php
    include '../../conexion.php';

    $articulo = $_GET['id'];
    $cantidad = $_GET['cantidad'];
    $control = $_GET['control'];
    $idu = $_GET['idu'];
    $idc = $_GET['idc'];

    if($control != 1)
    {
        
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/ServerBD/BDagregarCarrito.php?id=".$articulo."&cantidad=$cantidad&idu=$idu");
    }else
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/Backend/BCarrito/agregarCarrito.php?&control=1&idc=".$idc."&idu=$idu");
    }

   
?>
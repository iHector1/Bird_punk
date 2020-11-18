<?php
    include '../../conexion.php';

    $id_U = $_GET['ids'];
    $id_C = $_GET['idc']; 


    $sql = "DELETE FROM articulo_carrito WHERE ID_Carrito = '$id_C'";
    $queryDelete=sqlsrv_query($conn,$sql);
    sqlsrv_close($conn);
    
    header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/BackendP/BEPLimpiarCarrito.php?&control=1");
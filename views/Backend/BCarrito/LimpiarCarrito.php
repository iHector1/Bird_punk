<?php
    include '../../conexion.php';

    $id_U = $_GET['ids'];
    $id_C = $_GET['idc']; 
 
    echo $id_C;
    echo $id_U;

    $sql = "DELETE FROM articulo_carrito WHERE ID_Carrito = '$id_C'";
    $queryDelete=sqlsrv_query($conn,$sql);
    sqlsrv_close($conn);
    
    header("Location: http://localhost/Bird_punk/views/carrito.php");
?>
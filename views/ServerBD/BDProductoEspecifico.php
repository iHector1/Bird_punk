<?php
    include '../conexion.php';
    $IDArticulo = $_GET['articulo'];

    $sql = "SELECT Stock FROM articulo WHERE ID_Articulo = '$IDArticulo'";
    $stmt = sqlsrv_query($conn, $sql);
        
    while($row = sqlsrv_fetch_array($stmt))
    {
        $stock = $row[0];
    } 

    header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/BackendP/BEPProductoEspecifico.php?stock=".$stock."&control=1");

?>
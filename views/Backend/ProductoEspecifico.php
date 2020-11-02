<?php
    include '../conexion.php';
    $IDArticulo = $_GET['articulo'];

    $sql = "SELECT Stock FROM articulo WHERE ID_Articulo = '$IDArticulo'";
    $stmt = sqlsrv_query($conn, $sql);
        
    while($row = sqlsrv_fetch_array($stmt))
    {
        $stock = $row[0];
    } 

    header("Location: http://localhost/Bird_punk/views/verUnProducto.php?stock=".$stock."&control=1");

?>
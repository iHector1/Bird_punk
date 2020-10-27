<?php
    include 'conexion.php';


    $sql = "SELECT Stock FROM articulo WHERE ID_Articulo = '$IDArticulo'";
    $stmt = sqlsrv_query($conn, $sql);
        
    while($row = sqlsrv_fetch_array($stmt))
    {
        $stock = $row[0];
    } 


?>
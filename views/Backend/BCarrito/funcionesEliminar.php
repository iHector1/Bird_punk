<?php
    $sql = "SELECT Total_articulo FROM articulo_carrito WHERE articulo_carrito.ID_Articulo = $_GET[idProducto]  AND articulo_carrito.ID_Carrito = $id_c";
    $stmt=sqlsrv_query($conn,$sql);
    $row = sqlsrv_fetch_array( $stmt);
    $resP = $row['Total_articulo']; 
    

    $sql = "DELETE FROM articulo_carrito WHERE ID_articulo = $_GET[idProducto] AND ID_Carrito =  $id_c";
    $res=sqlsrv_query($conn,$sql);

    $sql = "SELECT Modelo, Imagen, Precio FROM articulo INNER JOIN modelo ON modelo.ID_Modelo = articulo.ID_Modelo WHERE articulo.ID_Articulo = $_GET[idProducto]";
    $res1=sqlsrv_query($conn,$sql);

    $fila = sqlsrv_fetch_array($res1);
?>
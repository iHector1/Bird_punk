<?php
    include '../../conexion.php';

    $IDProducto = $_GET['id'];
    $id_c = $_GET['idc'];

    $sql = "SELECT Total_articulo FROM articulo_carrito WHERE articulo_carrito.ID_Articulo = '".$IDProducto."' AND articulo_carrito.ID_Carrito = '".$id_c."'";
    $stmt=sqlsrv_query($conn,$sql);
    $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC);
    $resP = $row['Total_articulo']; 
    

    $sql = "DELETE FROM articulo_carrito WHERE ID_articulo = '".$IDProducto."' AND ID_Carrito =  '".$id_c."'";
    $res=sqlsrv_query($conn,$sql);

    $sql = "SELECT Modelo, Imagen, Precio FROM articulo INNER JOIN modelo ON modelo.ID_Modelo = articulo.ID_Modelo WHERE articulo.ID_Articulo = '".$IDProducto."'";
    $res1=sqlsrv_query($conn,$sql);

    $fila = sqlsrv_fetch_array($res1);

    header("Location: http://localhost/Bird_punk/views/carrito.php");
?>
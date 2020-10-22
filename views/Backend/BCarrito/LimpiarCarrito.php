<?php
    include 'conexion.php';

    $id_U = $_SESSION['ID_Usuario'];
    $id_C = $_SESSION['ID_Carrito']; 
 
    $sql = "DELETE FROM articulo_carrito WHERE ID_Carrito = ?";
    $params = array($id_C);

    $stmt = sqlsrv_query( $conn, $sql, $params);
    if( $stmt === false ) {
        die( print_r( sqlsrv_errors(), true));
    }
    sqlsrv_close($conn);
?>
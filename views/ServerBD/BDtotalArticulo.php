<?php
    include '../conexion.php';
    $id_c = $_GET['id'];
    $idu = $_GET['idu'];


    $sql = "SELECT articulo_carrito.ID_Articulo, Precio, Cantidad_Articulo FROM articulo 
    INNER JOIN articulo_carrito ON articulo_carrito.ID_Articulo = articulo.ID_Articulo WHERE ID_Carrito = $id_c";
    $stmt = sqlsrv_query($conn, $sql);

    if( $stmt == false ) {
        die( print_r( sqlsrv_errors(), true));
    }

    $total = 0;
    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
        $total = $row['Precio'] * $row['Cantidad_Articulo'];
        $id_a = $row['ID_Articulo'];
        //UPDATE A CADA PRECIO POR ARTICULO DE ACUERDO A SU CANTIDAD

        $sql = "UPDATE articulo_carrito SET Total_articulo = $total WHERE ID_Carrito = $id_c AND ID_Articulo = $id_a";
        // $params = array($total, $_GET[id], $row['ID_Articulo']);
        $stmt2 = sqlsrv_query( $conn, $sql);

        if( $stmt == false) {
            die( print_r( sqlsrv_errors(), true) );
        }
    }

    header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/BackendP/BEPtotalArticulo.php?control=1&id=".$id_c."&idu=$idu");
?>
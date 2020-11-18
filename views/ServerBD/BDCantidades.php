<?php
    include '../../conexion.php';
    $id_c = $_GET['id'];

    $sql = "SELECT Cantidad_Articulo FROM articulo_carrito WHERE  ID_Carrito = $id_c";
    $stmt = sqlsrv_query( $conn, $sql);
    
    if( $stmt === false ) {
        die( print_r( sqlsrv_errors(), true));
    }

    $total=0; //Total de articulos en el carrito
    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
    //echo $row['Cantidad_Articulo']."<br />";
        $total = $total + $row['Cantidad_Articulo'];
    }

    /*Actualiza la cantidad total de articulos en el carrito*/
    $sql = "UPDATE carrito SET Cantidad_Articulos = $total WHERE ID_Carrito = $id_c";

    $stmt = sqlsrv_query( $conn, $sql);

    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
    }

    header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/BackendP/BEPCantidades.php?control=1");
?>
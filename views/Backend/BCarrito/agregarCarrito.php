<?php
    include '../../conexion.php';

    $articulo = $_GET['id'];
    $Cantidad = $_GET['cantidad'];
    $id_c = $_GET['carrito'];

    echo $articulo;
    echo $Cantidad;

    $sqlCantidad = "SELECT ID_Articulo , Cantidad_articulo FROM articulo_carrito WHERE ID_Articulo = $articulo AND ID_Carrito = $id_c";
    $stmt = sqlsrv_query($conn, $sqlCantidad);

    $Cant_Art = 0;
    $articulos = false;
    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
        $ID = $row['ID_Articulo'] ;
        $Cant_Art = $row['Cantidad_articulo'] ;
        $articulos = true;
    }
    $Cant_Art += $Cantidad;

    if($articulos){
        $Sql = "UPDATE articulo_carrito SET Cantidad_Articulo = $Cant_Art WHERE ID_Articulo = $articulo AND ID_Carrito = $id_c";
    }else{
        $Sql = "INSERT INTO articulo_carrito VALUES($id_c,$articulo,$Cant_Art,0)";
    }

    sqlsrv_query($conn, $Sql);

    header("Location: http://localhost/Bird_punk/views/carrito.php?control=2");
?>
<?php
    include '../conexion.php';

    $articulo = $_GET['id'];
    $Cantidad = $_GET['cantidad'];
    $idu = $_GET['idu'];
    

    $buscarCarrito = "SELECT ID_Carrito FROM carrito WHERE ID_Usuario = '$idu'";
    $stmtC = sqlsrv_query($conn, $buscarCarrito);
    while($r = sqlsrv_fetch_array( $stmtC, SQLSRV_FETCH_ASSOC) ) {
        $id_c = $r['ID_Carrito'];
    }

    echo "CARRITO: $id_c";
    echo "USUARIO: $idu";

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

    header("Location:  http://25.61.144.153/distribuidos/Bird_punk/views/BackendP/BEPagregarCarrito.php?control=1&idc=".$id_c."&idu=$idu");
?>
<?PHP 
    include '../conexion.php';
    $id_c = $_GET['id'];
    $idu = $_GET['idu'];
    $total=0;
    $sql = "SELECT Total_articulo FROM articulo_carrito WHERE ID_Carrito = $id_c";
    //$params = array($id_c);
    $stmt = sqlsrv_query( $conn, $sql);
    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
    }

    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
        $total = $total + $row['Total_articulo'];
    }

    /*Actualiza el precio total de la BD*/
    $sql = "UPDATE carrito SET Precio_Total = '$total' WHERE ID_Carrito =  '$id_c'";

    $stmt = sqlsrv_query( $conn, $sql);

    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
    }

    header("Location: http://25.90.201.164/distribuidos/Bird_punk/views/BackendP/BEPtotalCarrito.php?control=1&total=$total&id=$id_c&idu=$idu");

?>
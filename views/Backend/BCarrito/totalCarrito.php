<?PHP 
    include '../../conexion.php';
    $id_c = $_GET['id'];

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

    header("Location: http://localhost/Bird_punk/views/carrito.php?control=5&total=$total");

?>
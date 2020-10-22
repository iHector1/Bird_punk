<?php
    if(isset($_GET['idArticulo'])){
        $sqlCantidad = "SELECT ID_Articulo , Cantidad_articulo FROM articulo_carrito WHERE ID_Articulo = $_GET[idArticulo] AND ID_Carrito = $id_c";
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
            $Sql = "UPDATE articulo_carrito SET Cantidad_Articulo = $Cant_Art WHERE ID_Articulo = $_GET[idArticulo] AND ID_Carrito = $id_c";
        }else{
            $Sql = "INSERT INTO articulo_carrito VALUES($id_c,$_GET[idArticulo],$Cant_Art,0)";
        }
    
        sqlsrv_query($conn, $Sql);
    }
?>
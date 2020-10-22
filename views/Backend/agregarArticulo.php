<?php
    $serverName = "S-NOTEBOOK";
    $connectionInfo = array( "Database"=>"bearpay");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);

    if($conn){
        $id_modelo = null;
        $id_marca = null;
        $id_talla = null;
        $genero = "";
        $precio = null;
        $stock = null;

        if($id_modelo != null && $id_marca != null && $id_talla != null && $genero != "" &&
            $precio != null && $precio != null && $stock != null){

                $agregar = "INSERT INTO articulo (ID_Modelo, ID_Marca, ID_Talla, Genero, Precio, Stock)
                                VALUES ('$id_modelo', '$id_marca', '$id_talla', '$genero', '$precio', '$stock')";
                $agregar = sqlsrv_query($conn, $agregar);
                if($agregar)
                    echo "Artículo agregado correctamente. <br>";
                else
                    echo "Error, no se pudo agregar el artículo. <br>";
        }
        else
            echo "Error, todos los campos deben estar llenos.";
    }
    else{
        echo "Conexión no se pudo establecer.<br>";
        die( print_r( sqlsrv_errors(), true));
    }
?>
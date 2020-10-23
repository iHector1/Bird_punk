<?php
    include '../conexion.php';

    if($conn){
        $id_articulo = 5;
        $id_modelo = null;
        $id_marca = null;
        $id_talla = null;
        $genero = "";
        $precio = null;
        $stock = 2;

        if($id_articulo != null){

            $existeArticulo = "SELECT ID_Articulo FROM articulo WHERE ID_Articulo = '$id_articulo'";
    
            if(sqlsrv_query($conn, $existeArticulo)){

                if($id_modelo != null){
                    $editarModelo = "UPDATE articulo SET ID_Modelo = '$id_modelo' WHERE ID_Articulo = '$id_articulo'";
                    if(sqlsrv_query($conn, $editarModelo))
                        echo "ID del modelo editado exitosamente.<br>";
                    else
                        echo "Error, no se pudo editar el ID del modelo.<br>";
                }

                if($id_marca != null){
                    $editarMarca = "UPDATE articulo SET ID_Marca = '$id_marca' WHERE ID_Articulo = '$id_articulo'";
                    if(sqlsrv_query($conn, $editarMarca))
                        echo "ID de la marca editado exitosamente.<br>";
                    else
                        echo "Error, no se pudo editar el ID de la marca.<br>";
                }

                if($id_talla != null){
                    $editarTalla = "UPDATE articulo SET ID_Talla = '$id_talla' WHERE ID_Articulo = '$id_articulo'";
                    if(sqlsrv_query($conn, $editarTalla))
                        echo "ID de la talla editado exitosamente.<br>";
                    else
                        echo "Error, no se pudo editar el ID de la talla.<br>";
                }

                if($genero != ""){
                    $editarGenero = "UPDATE articulo SET Genero = '$genero' WHERE ID_Articulo = '$id_articulo'";
                    if(sqlsrv_query($conn, $editarGenero))
                        echo "Género del artículo editado exitosamente.<br>";
                    else
                        echo "Error, no se pudo editar género del artículo.<br>";
                }

                if($precio != null){
                    $editarPrecio = "UPDATE articulo SET Precio = '$precio' WHERE ID_Articulo = '$id_articulo'";
                    if(sqlsrv_query($conn, $editarPrecio))
                        echo "Precio del artículo editado exitosamente.<br>";
                    else
                        echo "Error, no se pudo editar precio del artículo.<br>";
                }

                if($stock != null){
                    $editarStock = "UPDATE articulo SET Stock = '$stock' WHERE ID_Articulo = '$id_articulo'";
                    if(sqlsrv_query($conn, $editarStock))
                        echo "Stock del artículo editado exitosamente.<br>";
                    else
                        echo "Error, no se pudo editar stock del artículo.<br>";
                }
            }
            else
                echo "Error, no existe ningún Producto con ese ID.<br>";
        }
    }
    else{
        echo "La conexión no se pudo establecer.<br>";
        die( print_r( sqlsrv_errors(), true));
    }

    sqlsrv_close($conn);
?>
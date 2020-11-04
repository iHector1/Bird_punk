<?php

    include '../conexion.php';
    $IDusuario = $_GET['id'];



    /////////////////
    $domicilio = "SELECT Calle, NoExterior, NoInterior FROM info_cliente WHERE ID_Usuario = '$IDusuario'";
    $stmtD = sqlsrv_query($conn, $domicilio);
    $bandera =1;
    while($row = sqlsrv_fetch_array($stmtD))
    {
        if($bandera == 1)
        {
            $arreglo = array(array("id" => $row[0], "modelo" => $row[1], "precio" => $row[2], "stock" => $row[3], "imagen" => $row[4]));
            $bandera = 0;
        }
        else
        {
            array_push($arreglo, array("id" => $row[0], "modelo" => $row[1], "precio" => $row[2], "stock" => $row[3], "imagen" => $row[4]));
        }
    }
    $arreglo = serialize($arreglo);
    $arreglo = urlencode($arreglo);

    ////////////////
    $sql = "SELECT compra.No_Orden, compra.Fecha_Compra, compra.Precio_Total, estatus.Estatus FROM compra INNER JOIN estatus ON compra.ID_Estatus = estatus.ID_Estatus WHERE ID_Usuario = '$IDusuario' ORDER BY compra.Fecha_Compra DESC";
    $stmt = sqlsrv_query($conn, $sql);

    $bandera =1;
    while($row = sqlsrv_fetch_array($stmt))
    {
        if($bandera == 1)
        {
            $arreglo1 = array(array("id" => $row[0], "modelo" => $row[1], "precio" => $row[2], "stock" => $row[3], "imagen" => $row[4]));
            $bandera = 0;
        }
        else
        {
            array_push($arreglo1, array("id" => $row[0], "modelo" => $row[1], "precio" => $row[2], "stock" => $row[3], "imagen" => $row[4]));
        }

        $sql2 = "SELECT modelo.Modelo, marca.Marca, detalle_compra.Cantidad_Articulo, detalle_compra.Total_articulo FROM articulo INNER JOIN modelo ON modelo.ID_Modelo = articulo.ID_Modelo 
        INNER JOIN marca ON marca.ID_Marca = articulo.ID_Marca INNER JOIN detalle_compra ON detalle_compra.ID_Articulo = articulo.ID_Articulo WHERE detalle_compra.No_Orden = '$noorden'";
        $stmt2 = sqlsrv_query($conn, $sql2);

        $bandera =1;
        while($row = sqlsrv_fetch_array($stmt2))
        {
            if($bandera == 1)
            {
                $arreglo2 = array(array("id" => $row[0], "modelo" => $row[1], "precio" => $row[2], "stock" => $row[3], "imagen" => $row[4]));
                $bandera = 0;
            }
            else
            {
                array_push($arreglo2, array("id" => $row[0], "modelo" => $row[1], "precio" => $row[2], "stock" => $row[3], "imagen" => $row[4]));
            }
        }
        $arreglo2 = serialize($arreglo2);
        $arreglo2 = urlencode($arreglo2);
    }
    $arreglo1 = serialize($arreglo1);
    $arreglo1 = urlencode($arreglo1);

    ////////////////////
    

?>
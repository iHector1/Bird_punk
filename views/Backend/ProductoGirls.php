<?php
    include '../conexion.php';
    $bandera = 1;
    $query = "SELECT modelo.Modelo, marca.Marca, articulo.Precio, talla.Talla, articulo.ID_Articulo, articulo.Imagen, articulo.Stock FROM articulo INNER JOIN modelo ON articulo.ID_Modelo=modelo.ID_Modelo INNER JOIN marca ON articulo.ID_Marca=marca.ID_Marca INNER JOIN talla ON articulo.ID_Talla=talla.ID_Talla WHERE Genero='F' OR Genero='U'";
    $res = sqlsrv_query($conn, $query);

    while($row = sqlsrv_fetch_array($res))
    {
        if($bandera == 1)
        {
            $arreglo = array(array("modelo" => $row[0], "marca" => $row[1], "precio" => $row[2], "talla" => $row[3], "id" => $row[4], "imagen" => $row[5], "stock"=> $row[6]));
            $bandera = 0;
        }
        else
        {
            array_push($arreglo, array("modelo" => $row[0], "marca" => $row[1], "precio" => $row[2], "talla" => $row[3], "id" => $row[4], "imagen" => $row[5], "stock"=> $row[6]));
        }
    }
    $arreglo = serialize($arreglo);
    $arreglo = urlencode($arreglo);

    header("Location: http://localhost/Bird_punk/views/verProductoGirls.php?datos=".$arreglo."&control=1");
?>
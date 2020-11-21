<?php

    include '../conexion.php';

    $sql = "SELECT articulo.ID_Articulo, modelo.Modelo, articulo.Precio, articulo.Stock, articulo.Imagen FROM articulo INNER JOIN modelo ON articulo.ID_Modelo = modelo.ID_Modelo";
    $articulos=sqlsrv_query($conn,$sql);

    $bandera =1;
    while($row = sqlsrv_fetch_array($articulos))
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
    print_r($arreglo);

    header("Location: http://25.90.201.164/distribuidos/Bird_punk/views/BackendP/BEPmostrarArticulosEditar.php?articulos=".$arreglo."&control=1");


?>
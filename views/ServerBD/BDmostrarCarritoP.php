<?php
    include '../conexion.php';
    $id_c = $_GET['idCar'];
    $total = $_GET['total'];
    $idu = $_GET['idu'];


    $bandera = 1;
    $sql = "SELECT articulo_carrito.ID_Articulo, Talla, Imagen, Total_articulo, Cantidad_Articulo, Modelo FROM carrito 
    INNER JOIN articulo_carrito ON carrito.ID_Carrito = articulo_carrito.ID_Carrito 
    INNER JOIN articulo ON articulo_carrito.ID_Articulo = articulo.ID_Articulo 
    INNER JOIN modelo ON articulo.ID_Modelo = modelo.ID_Modelo 
    INNER JOIN TALLA ON articulo.ID_Talla = talla.ID_Talla
    WHERE carrito.ID_Carrito = $id_c";
    $res=sqlsrv_query($conn,$sql);

    while($row = sqlsrv_fetch_array($res))
    {
        if($bandera == 1)
        {
            $arreglo = array(array("id" => $row[0], "talla" => $row[1], "imagen" => $row[2], "total" => $row[3], "cantidad" => $row[4], "modelo" => $row[5]));
            $bandera = 0;
        }
        else
        {
            array_push($arreglo, array("id" => $row[0], "talla" => $row[1], "imagen" => $row[2], "total" => $row[3], "cantidad" => $row[4], "modelo" => $row[5]));
        }
    }
    $arreglo = serialize($arreglo);
    $arreglo = urlencode($arreglo);

    echo $total;
    header("Location: http://25.90.201.164/distribuidos/Bird_punk/views/BackendP/BEPmostrarCarritoP.php?carrito=".$arreglo."&control=1&total=$total&idu=$idu&idCar=$id_c");
?>

<?php
    include '../conexion.php';
    $IDusuario = $_GET['idu'];

    $domicilio = "SELECT Calle, NoExterior, NoInterior FROM info_cliente WHERE ID_Usuario = '$IDusuario'";
    $stmtD = sqlsrv_query($conn, $domicilio);
    $b =1;
    while($row = sqlsrv_fetch_array($stmtD))
    {
        if($b == 1)
        {
            $arreglo = array(array("calle" => $row[0], "exterior" => $row[1], "interior" => $row[2]));
            $b = 0;
        }
        else
        {
            array_push($arreglo, array("calle" => $row[0], "exterior" => $row[1], "interior" => $row[2]));
        }
    }


    $sql = "SELECT compra.No_Orden, compra.Precio_Total, estatus.Estatus FROM compra INNER JOIN estatus ON compra.ID_Estatus = estatus.ID_Estatus WHERE ID_Usuario = '$IDusuario' ORDER BY compra.Fecha_Compra DESC";
    $stmt = sqlsrv_query($conn, $sql);
    $bandera =1;
    $bandera2 =1;
    while($row = sqlsrv_fetch_array($stmt))
    {
        if($bandera == 1)
        {
            $arreglo1 = array(array("orden" => $row[0], "total" => $row[1], "estatus" => $row[2]));
            $bandera = 0;
        }
        else
        {
            array_push($arreglo1, array("orden" => $row[0],"total" => $row[1], "estatus" => $row[2]));
        }

        $noorden = $row[0];

    }
    
    $sql2 = "SELECT modelo.Modelo, marca.Marca, detalle_compra.Cantidad_Articulo, detalle_compra.Total_articulo, detalle_compra.No_Orden 
    FROM articulo INNER JOIN modelo ON modelo.ID_Modelo = articulo.ID_Modelo INNER JOIN marca ON marca.ID_Marca = articulo.ID_Marca 
    INNER JOIN detalle_compra ON detalle_compra.ID_Articulo = articulo.ID_Articulo INNER JOIN compra ON detalle_compra.No_Orden = compra.No_Orden
    WHERE compra.ID_Usuario = '$IDusuario'";
    $stmt2 = sqlsrv_query($conn, $sql2);

    $bandera2 = 1;
    while($row = sqlsrv_fetch_array($stmt2))
    {
        if($bandera2 == 1)
        {
            $arreglo2 = array(array("modelo" => $row[0], "marca" => $row[1], "cantidad" => $row[2], "totalarticulo" => $row[3], "orden" => $row[4]));
            $bandera2 = 0;
        }
        else
        {
            array_push($arreglo2, array("modelo" => $row[0], "marca" => $row[1], "cantidad" => $row[2], "totalarticulo" => $row[3], "orden" => $row[4]));
        }
    }


    ?>
    <form id="myForm" action="http://25.90.201.164/distribuidos/Bird_punk/views/BackendP/BEPhistorialProductos2.php?control=1&idu=<?php echo $IDusuario;?>" method="post">
        <input type="hidden" name="arreglo" value="<?php echo htmlentities(serialize($arreglo));?>" />
        <input type="hidden" name="arreglo1" value="<?php echo htmlentities(serialize($arreglo1));?>" />
        <input type="hidden" name="arreglo2" value="<?php echo htmlentities(serialize($arreglo2));?>" />
    </form>

    <script type="text/javascript">
        document.getElementById("myForm").submit();
    </script> 
    <?php
?>
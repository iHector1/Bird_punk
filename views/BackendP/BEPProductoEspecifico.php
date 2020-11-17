<?php
    $control = $_GET['control'];
    $stock = $_GET['stock'];
    $IDArticulo = $_GET['articulo'];


    if($control != 1)
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/ServerBD/BDProductoEspecifico.php?articulo=".$IDArticulo);
    }else
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/Backend/ProductoEspecifico.php?stock=".$stock."&control=1");
    }

?>
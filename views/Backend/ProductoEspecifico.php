<?php
    //$IDArticulo = $_GET['articulo'];
    $IDArticulo = 1;
    $control = $_GET['control'];
    $stock = $_GET['stock'];    
    $id = $_GET['idu'];
    if($control != 1)
    {
        header("Location: http://25.90.201.164/distribuidos/Bird_punk/views/BackendP/BEPProductoEspecifico.php?articulo=".$IDArticulo."&idu=$id");
    }else
    {
        header("Location: http://localhost/Bird_punk/views/verProductoBoys.php?stock=".$stock."&control=1&idu=$id");
    }

?>
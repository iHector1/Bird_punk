<?php
    //$IDArticulo = $_GET['articulo'];
    $IDArticulo = 1;
    $control = $_GET['control'];
    $stock = $_GET['stock'];    

    if($control != 1)
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/BackendP/BEPProductoEspecifico.php?articulo=".$IDArticulo);
    }else
    {
        header("Location: http://localhost/Bird_punk/views/verProductoBoys.php?stock=".$stock."&control=1");
    }

?>
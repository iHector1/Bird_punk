<?php
    $control = $_GET['control'];
    $arreglo = $_GET['datos'];
    $idc = $_GET['idc'];
    $id = $_GET['idu'];
    if($control != 1)
    {
        header("Location: http://25.90.201.164/distribuidos/Bird_punk/views/BackendP/BEPProductoGirls.php?idu=".$id.$idc);
    }else
    {
        header("Location: http://localhost/Bird_punk/views/verProductoGirls.php?datos=".$arreglo."&control=1&idu=$id.$idc");
    }

?>
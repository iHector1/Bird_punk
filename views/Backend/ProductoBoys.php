<?php
    $control = $_GET['control'];
    $arreglo = $_GET['datos'];
    $id = $_GET['idu'];
    
    if($control != 1)
    {
        header("Location: http://25.90.201.164/distribuidos/Bird_punk/views/BackendP/BEPProductoBoys.php?idu=".$id);
    }else
    {
        header("Location: http://localhost/Bird_punk/views/verProductoBoys.php?datos=".$arreglo."&control=1&idu=$id");
    }

?>

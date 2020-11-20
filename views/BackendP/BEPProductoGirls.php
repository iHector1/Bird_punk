<?php
    $control = $_GET['control'];
    $arreglo = $_GET['datos'];
    $id = $_GET['idu'];


    if($control != 1)
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/ServerBD/BDProductoGirls.php?idu=".$id);
    }else
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/Backend/ProductoGirls.php?datos=".$arreglo."&control=1&idu=$id");
    }

?>
<?php
    $control = $_GET['control'];
    $arreglo = $_GET['articulos'];
    
    if($control != 1)
    {
        header("Location: http://25.90.201.164/distribuidos/Bird_punk/views/BackendP/BEPmostrarArticulosEditar.php");
    }else
    {
        header("Location: http://localhost/Bird_punk/views/EditarProducto.php?articulos=".$arreglo."&control=1");
    }

?>
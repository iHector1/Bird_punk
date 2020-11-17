<?php
    $control = $_GET['control'];
    $arreglo = $_GET['datos'];
    
    if($control != 1)
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/BackendP/BEPbuscarAlmacenista.php");
    }else
    {
        header("Location: http://localhost/Bird_punk/views/agregarAlmacenista.php?datos=".$arreglo."&control=1");
    }

?>
<?php
    $control = $_GET['control'];
    $arreglo = $_GET['articulos'];
    
    if($control != 1)
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/ServerBD/BDmostrarArticulosEditar.php");
    }else
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/Backend/mostrarArticulosEditar.php?articulos=".$arreglo."&control=1");
    }

?>
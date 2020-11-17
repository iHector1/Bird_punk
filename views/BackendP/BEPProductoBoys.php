<?php
    $control = $_GET['control'];
    $arreglo = $_GET['datos'];


    if($control != 1)
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/ServerBD/BDProductoBoys.php");
    }else
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/Backend/ProductoBoys.php?datos=".$arreglo."&control=1");
    }

?>

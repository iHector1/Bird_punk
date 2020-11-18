<?php
    $ID_Usuario = $_GET['id'];
    $arreglo = $_GET['datos'];
    $control = $_GET['control'];

    if($control != 1)
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/ServerBD/BDinfoUsuario.php?id=".$ID_Usuario);
    }else
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/Backend/infoUsuario.php?datos=".$arreglo."&control=1&id=$ID_Usuario");
    }
    

?>
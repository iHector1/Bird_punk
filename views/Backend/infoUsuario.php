<?php
    $ID_Usuario = $_GET['id'];
    $arreglo = $_GET['datos'];
    $control = $_GET['control'];

    if($control != 1)
    {
        header("Location: http://25.90.201.164/distribuidos/Bird_punk/views/BackendP/BEPinfoUsuario.php?id=".$ID_Usuario);
    }else
    {
        header("Location: http://localhost/Bird_punk/views/editarPerfil.php?datos=".$arreglo."&control=1&id=$ID_Usuario");
    }
    

?>
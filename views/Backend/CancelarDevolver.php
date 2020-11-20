<?php
    $NumOrden = $_POST['noOrden'];
    $idu = $_POST['idu'];
    $control = $_GET['control'];
    $IDU = $_GET['idu'];

    if($control != 1)
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/BackendP/BEPCancelarDevolver.php?idu=".$idu."&noOrden=$NumOrden");
    }else
    {
        header("Location: http://localhost/Bird_punk/views/Historial.php?control=?control=0&idu=".$IDU);
    }
?>

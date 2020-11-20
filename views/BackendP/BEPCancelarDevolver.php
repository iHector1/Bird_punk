<?php
    $NumOrden = $_GET['noOrden'];
    $idu = $_GET['idu'];
    $control = $_GET['control'];

    if($control != 1)
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/ServerBD/BDCancelarDevolver.php?idu=".$idu."&noOrden=$NumOrden");
    }else
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/Backend/CancelarDevolver.php?control=1&idu=".$idu);
    }
?>
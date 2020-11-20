<?php
    
    $id_c = $_GET['id'];
    $control = $_GET['control'];
    $idu = $_GET['idu'];

    if($control != 1)
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/ServerBD/BDtotalArticulo.php?id=".$id_c."&idu=$idu");
    }else
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/Backend/BCarrito/totalArticulo.php?control=1&id=".$id_c."&idu=$idu");
    }
   
?>
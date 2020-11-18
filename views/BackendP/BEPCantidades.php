<?php
    $id_c = $_GET['id'];
    $control = $_GET['control'];

    if($control != 1)
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/ServerBD/BDCantidades.php?id=".$id_c);
    }else
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/Backend/Cantidades.php?control=1");
    }
    

    //header("Location: http://localhost/Bird_punk/views/carrito.php?control=3");
?>
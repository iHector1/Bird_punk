<?php
    $control = $_GET['control'];
    $ID_Articulo = $_POST['ID_Articulo'];
    
    if($control != 1)
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/BackendP/BEPeliminarArticulo.php?id=".$ID_Articulo);
    }else
    {
        header("Location: http://localhost/Bird_punk/views/EditarProducto.php");
    }

?> 
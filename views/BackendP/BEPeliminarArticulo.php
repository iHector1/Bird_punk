<?php
    $control = $_GET['control'];
    $IDarticulo = $_GET['ID_Articulo'];

    if($control != 1)
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/ServerBD/BDeliminarArticulo.php?ID_Articulo=".$ID_Articulo);
    }else
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/Backend/eliminarArticulo.php?&control=1");
    }

?>
<?php
    $control = $_GET['control'];
    $ID_Articulo = $_GET['id'];

    if($control != 1)
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/ServerBD/BDeliminarArticulo.php?id=".$ID_Articulo);
    }else
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/Backend/eliminarArticulo.php?&control=1");
    }

?>
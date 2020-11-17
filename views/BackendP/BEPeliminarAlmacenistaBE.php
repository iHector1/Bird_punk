<?php
    $id = $_GET['idalmacenista'];
    $control = $_GET['control'];
    
    if($control != 1)
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/ServerBD/BDeliminarAlmacenistaBE.php?idalmacenista=".$id);
    }else
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/Backend/ProductoBoys.php?&control=1");
    }
                  
?>
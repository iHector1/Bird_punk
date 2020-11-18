<?PHP 
    
    $id_c = $_GET['id'];
    $total = $_GET['total'];
    $control = $_GET['control'];

    if($control != 1)
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/ServerBD/BDtotalCarrito.php?id=".$id_c."&total=$total");
    }else
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/Backend/totalCarrito.php?control=1&total=$total");
    }

?>
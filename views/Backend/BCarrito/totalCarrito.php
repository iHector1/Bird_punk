<?PHP 
    
    $id_c = $_GET['id'];
    $total = $_GET['total'];
    $control = $_GET['control'];
    $idu = $_GET['idu'];
    if($control != 1)
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/BackendP/BEPtotalCarrito.php?id=".$id_c."&total=$total&idu=$idu");
    }else
    {
        header("Location: http://localhost/Bird_punk/views/carrito.php?control=5&total=$total&idc=$id_c&idu=$idu");
    }


?>
<?PHP 
    
    $id_c = $_GET['idCar'];
    $control = $_GET['control'];
    $total = $_GET['total'];

    if($control != 1)
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/BackendP/BEPtotalCarritoP.php?idCar=".$id_c);
    }else
    {
        header("Location: http://localhost/Bird_punk/views/Pago.php?control=1&total=$total");
    }
    

?>
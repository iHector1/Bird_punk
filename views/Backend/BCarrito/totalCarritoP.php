<?PHP 
    
    $id_c = $_GET['idCar'];
    $control = $_GET['control'];
    $total = $_GET['total'];
    $idu = $_GET['idu'];

    if($control != 1)
    {
        echo $id_c;
        echo $idu;
        header("Location: http://25.90.201.164/distribuidos/Bird_punk/views/BackendP/BEPtotalCarritoP.php?idCar=".$id_c."&idu=$idu");
    }else
    {
        header("Location: http://localhost/Bird_punk/views/Pago.php?control=1&total=$total&idu=$idu&idc=$id_c");
    }
    

?>
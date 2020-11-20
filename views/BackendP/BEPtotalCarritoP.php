<?PHP 
    
    $id_c = $_GET['idCar'];
    $control = $_GET['control'];
    $total = $_GET['total'];
    $idu = $_GET['idu'];

    if($control != 1)
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/ServerBD/BDtotalCarritoP.php?idCar=".$id_c."&idu=$idu");
    }else
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/Backend/BCarrito/totalCarritoP.php?control=1&total=$total&idu=$idu&idCar=$id_c");
    }
    

?>
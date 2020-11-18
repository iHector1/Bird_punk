<?php
    $user = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $total = $_GET['total'];
    $IDCarrito = $_GET['idc']; 
    $control = $_GET['control'];
    $error = $_GET['error'];

    if($control != 1)
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/BackendP/BEPloginBearPay.php?usuario=".$usuario."&contraseña=$contraseña&total=$total&idc=$IDCarrito");
    }else
    {
        if($error == 0)
        {
            header("Location: http://localhost/Bird_punk/views/carrito.php");
        }else if($error == 1)
        {
            header("Location: http://localhost/Bird_punk/views/BearPay_Login.php");
        }else if($error == 2)
        {
            header("Location: http://localhost/Bird_punk/views/BearPay_Login.php");
        }
        
    }

?>
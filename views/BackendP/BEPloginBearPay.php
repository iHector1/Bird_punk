<?php
    $user = $_GET['usuario'];
    $contraseña = $_GET['contraseña'];
    $total = $_GET['total'];
    $IDCarrito = $_GET['idc']; 
    $control = $_GET['control'];
    $error = $_GET['error'];

    if($control != 1)
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/ServerBD/BDloginBearPay.php?usuario=".$usuario."&contraseña=$contraseña&total=$total&idc=$IDCarrito");
    }else
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/Backend/loginBearPay.php?control=1&error=".$error);
    }

?>
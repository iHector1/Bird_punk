<?php
    $user = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $total = $_GET['total'];
    $IDCarrito = $_GET['idc']; 
    $control = $_GET['control'];
    $error = $_GET['error'];
    $idu = $_GET['idu'];

    if($control != 1)
    {
        header("Location: http://25.90.201.164/distribuidos/Bird_punk/views/BackendP/BEPloginBearPay.php?usuario=".$user."&contraseña=$contraseña&total=$total&idc=$IDCarrito");
    }else
    {
        if($error == 0){
            header("Location: http://localhost/Bird_punk/views/Index.php?idu=".$idu."&idc=".$IDCarrito);
            //echo $idu;
        }else if($error == 1){
            header("Location: http://localhost/Bird_punk/views/BearPay_Login.php?total=".$total."&idc=".$IDCarrito."&idu=".$idu);
        }else if($error == 2){
            header("Location: http://localhost/Bird_punk/views/BearPay_Login.php?total=".$total."&idc=".$IDCarrito."&idu=".$idu);
        }
        
    }

?>
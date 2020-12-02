<?php
session_start();
error_reporting(0);
$usuario = $_GET['usuario'];
$idu = $_GET['idu'];
$idc=$_GET['idc'];
$idt = $_GET['idt'];


?>

    <?php
    if($idt == '1'){
            header("Location: http://localhost/Bird_punk/views/Index.php?usuario=$usuario&idu=$idu&idc=$idc&idt=$idt");
    }
    if($idt == '2'){
            header("Location: http://localhost/Bird_punk/views/IndexAlmacenista.php?idu=$idu&idt=$idt");
    }
    if($idt == '3'){
            header("Location: http://localhost/Bird_punk/views/IndexAdministrador.php?idu=$idu&idt=$idt");
    }


?>
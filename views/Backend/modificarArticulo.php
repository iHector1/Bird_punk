<?php
    session_start();
    error_reporting(0);

    $ID_Articulo = $_POST['ID_Articulo'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

$control = $_GET['control'];


if($control != 1)
{
    header("Location: http://25.90.201.164/distribuidos/Bird_punk/views/BackendP/BEPmodificarArticulo.php?ID_Articulo=".$ID_Articulo."&precio=".$precio."&stock=".$stock);
}else
{
    header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/EditarProducto.php");
}
?>
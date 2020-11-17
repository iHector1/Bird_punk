<?php
    session_start();
    error_reporting(0);

    $ID_Articulo = $_GET['ID_Articulo'];
    $precio = $_GET['precio'];
    $stock = $_GET['stock'];

$control = $_GET['control'];


if($control != 1)
{
    header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/ServerBD/BDmodificarArticulo.php?ID_Articulo=".$ID_Articulo."&precio=".$precio."&stock=".$stock);
}else
{
    header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/Backend/modificarArticulo.php?control=1");
}
?>
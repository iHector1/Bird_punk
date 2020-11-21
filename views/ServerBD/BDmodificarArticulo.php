<?php
    include '../conexion.php';
    session_start();
    error_reporting(0);

    $ID_Articulo = $_GET['ID_Articulo'];
    $precio = $_GET['precio'];
    $stock = $_GET['stock'];


    $sql = "UPDATE articulo SET Precio = '$precio', Stock = '$stock' WHERE articulo.ID_Articulo = '$ID_Articulo'";
    $modificarArticulo=sqlsrv_query($conn,$sql);

    echo'<script type="text/javascript">
    alert("Articulo actualizado exitosamente.");
    window.location.href = " http://localhost/Bird_punk/views/EditarProducto.php";
    </script>';

    sqlsrv_close($conn);
    header("Location: http://25.90.201.164/distribuidos/Bird_punk/views/BackendP/BEPmodificarArticulo.php?control=1");
?>
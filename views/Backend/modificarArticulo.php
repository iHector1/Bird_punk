<?php
    include '../conexion.php';
    session_start();
    error_reporting(0);

    $ID_Articulo = $_POST['ID_Articulo'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    echo "$ID_Articulo<br>";
    echo "$precio<br>";
    echo "$stock<br>";

    $sql = "UPDATE articulo SET Precio = '$precio', Stock = '$stock' WHERE articulo.ID_Articulo = '$ID_Articulo'";
    $modificarArticulo=sqlsrv_query($conn,$sql);

    echo'<script type="text/javascript">
    alert("Articulo actualizado exitosamente.");
    window.location.href = "../EditarProducto.php";
    </script>';

    sqlsrv_close($conn);

?>
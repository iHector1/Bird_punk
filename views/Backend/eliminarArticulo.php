<?php
    include '../conexion.php';
    session_start();
    error_reporting(0);

    $ID_Articulo = $_POST['ID_Articulo'];


    $sql = "DELETE FROM articulo WHERE ID_Articulo= '$ID_Articulo'";
    $modificarArticulo=sqlsrv_query($conn,$sql);

    echo'<script type="text/javascript">
    alert("Articulo eliminado exitosamente.");
    window.location.href = " http://localhost/Bird_punk/views/EditarProducto.php";
    </script>';

    sqlsrv_close($conn);

?>
<?php
    include '../conexion.php';
    $ID_Articulo = $_GET['id'];


    $sql = "DELETE FROM articulo WHERE ID_Articulo= '$ID_Articulo'";
    $modificarArticulo=sqlsrv_query($conn,$sql);

    /*echo'<script type="text/javascript">
    alert("Articulo eliminado exitosamente.");
    window.location.href = " http://localhost/Bird_punk/views/EditarProducto.php";
    </script>';*/
    header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/BackendP/BEPeliminarArticulo.php?&control=1");
    sqlsrv_close($conn);

?>
<?php
    include 'conexion.php';
    $query = "SELECT modelo.Modelo, marca.Marca, articulo.Precio, talla.Talla, articulo.ID_Articulo, articulo.Imagen FROM articulo INNER JOIN modelo ON articulo.ID_Modelo=modelo.ID_Modelo INNER JOIN marca ON articulo.ID_Marca=marca.ID_Marca INNER JOIN talla ON articulo.ID_Talla=talla.ID_Talla WHERE Genero='M' OR Genero='U'";
    $res = sqlsrv_query($conn, $query);
?>
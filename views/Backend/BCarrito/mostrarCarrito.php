<?php
    $sql = "SELECT articulo_carrito.ID_Articulo, Talla, Imagen, Total_articulo, Cantidad_Articulo, Modelo FROM carrito 
    INNER JOIN articulo_carrito ON carrito.ID_Carrito = articulo_carrito.ID_Carrito 
    INNER JOIN articulo ON articulo_carrito.ID_Articulo = articulo.ID_Articulo 
    INNER JOIN modelo ON articulo.ID_Modelo = modelo.ID_Modelo 
    INNER JOIN TALLA ON articulo.ID_Talla = talla.ID_Talla
    WHERE carrito.ID_Carrito = $id_c";

    $res=sqlsrv_query($conn,$sql);
?>
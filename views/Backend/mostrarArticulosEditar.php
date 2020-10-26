<?php

    $sql = "SELECT articulo.ID_Articulo, modelo.Modelo, articulo.Precio, articulo.Stock, articulo.Imagen FROM articulo INNER JOIN modelo ON articulo.ID_Modelo = modelo.ID_Modelo";

    $articulos=sqlsrv_query($conn,$sql);


?>
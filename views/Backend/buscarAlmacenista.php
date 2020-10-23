<?php
    $sql = "SELECT * FROM usuario LEFT JOIN info_cliente ON usuario.ID_Usuario = info_cliente.ID_Usuario WHERE usuario.ID_Tipo_Usuario = 2;";

    $Almacenistas=sqlsrv_query($conn,$sql);

?>
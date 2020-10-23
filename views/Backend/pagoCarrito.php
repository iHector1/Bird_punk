<?php
    $sql = "SELECT usuario.Nombre_S, usuario.Apellido_Paterno, usuario.Apellido_Materno, usuario.Correo, info_cliente.Calle, info_cliente.NoExterior, info_cliente.Colonia, info_cliente.CP FROM usuario
    INNER JOIN info_cliente ON usuario.ID_Usuario = info_cliente.ID_Usuario WHERE usuario.ID_Usuario = '".$id_U."'";

    $infousuario=sqlsrv_query($conn,$sql);

?>
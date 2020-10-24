<?php
    $ID_Usuario = $_SESSION['IDusuario'];
    
    $sql = "SELECT * FROM usuario LEFT JOIN info_cliente ON usuario.ID_Usuario = info_cliente.ID_Usuario WHERE usuario.ID_Usuario = '".$ID_Usuario."';";
    $infoUsuario=sqlsrv_query($conn,$sql);

?>
<?php
    include '../conexion.php';
    session_start();
    error_reporting(0);
    
    $idUsuario = $_POST['IDusuario'];
    $nombre = $_POST['nombre'];
    $apePaterno = $_POST['apePaterno'];
    $apeMaterno = $_POST['apeMaterno'];
    $contraseña = $_POST['contraseña'];
    $calle = $_POST['calle'];
    $noexterior = $_POST['noexterior'];
    $nointerior = $_POST['nointerior'];
    $colonia = $_POST['colonia'];
    $estado = $_POST['estado'];
    $cp = $_POST['cp'];

    $sql = "UPDATE usuario SET Nombre_S = '$nombre', Apellido_Paterno = '$apePaterno', Apellido_Materno = '$apeMaterno', Contrasena = '$contraseña' WHERE usuario.ID_Usuario = '$idUsuario'";
    $modificarUsuario=sqlsrv_query($conn,$sql);

    $sql2 = "UPDATE info_cliente SET Estado = '$estado', Calle = '$calle', NoExterior = '$noexterior', NoInterior = '$nointerior', Colonia = '$colonia', CP = '$cp' WHERE info_cliente.ID_Usuario = '$idUsuario'";
    $modificarDomicilio=sqlsrv_query($conn,$sql2);

    echo'<script type="text/javascript">
    window.location.href = " http://localhost/Bird_punk/views/editarPerfil.php";
    </script>';

?>
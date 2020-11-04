<?php
    include '../conexion.php';
    $id_U = $_GET['id'];
    $total = $_GET['total'];
    $carrito = unserialize($_GET['idCar']);

    $sql = "SELECT usuario.Nombre_S, usuario.Apellido_Paterno, usuario.Apellido_Materno, usuario.Correo, info_cliente.Calle, info_cliente.NoExterior, info_cliente.Colonia, info_cliente.CP FROM usuario
    INNER JOIN info_cliente ON usuario.ID_Usuario = info_cliente.ID_Usuario WHERE usuario.ID_Usuario = '$id_U'";
    $infousuario=sqlsrv_query($conn,$sql);

    $bandera = 1;

    while($row = sqlsrv_fetch_array($infousuario))
    {
        if($bandera == 1)
        {
            $arreglo = array(array("nombre" => $row[0], "paterno" => $row[1], "materno" => $row[2], "correo" => $row[3], "calle" => $row[4], "exterior" => $row[5], "colonia" => $row[6], "cp" => $row[7]));
            $bandera = 0;
        }
        else
        {
            array_push($arreglo, array("nombre" => $row[0], "paterno" => $row[1], "materno" => $row[2], "correo" => $row[3], "calle" => $row[4], "exterior" => $row[5], "colonia" => $row[6], "cp" => $row[7]));
        }
    }
    $arreglo = serialize($arreglo);
    $arreglo = urlencode($arreglo);

    $carrito = serialize($carrito);
    $carrito = urlencode($carrito);
    echo $total;

    header("Location: http://localhost/Bird_punk/views/Pago.php?arreglo=".$arreglo."&control=6&total=$total&carrito=$carrito");
?>
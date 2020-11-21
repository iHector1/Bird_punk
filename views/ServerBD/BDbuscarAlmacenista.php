<?php
    include '../conexion.php';

    $sql = "SELECT * FROM usuario LEFT JOIN info_cliente ON usuario.ID_Usuario = info_cliente.ID_Usuario WHERE usuario.ID_Tipo_Usuario = 2;";
    $Almacenistas=sqlsrv_query($conn,$sql);

    $bandera = 1;

    while($row = sqlsrv_fetch_array($Almacenistas))
    {
        if($bandera == 1)
        {
            $arreglo = array(array("nombre" => $row[1], "paterno" => $row[2], "materno" => $row[3], "correo" => $row[4], "calle" => $row[9], "exterior" => $row[10],  "cp" => $row[12], "id" => $row[0]));
            $bandera = 0;
        }
        else
        {
            array_push($arreglo, array("nombre" => $row[1], "paterno" => $row[2], "materno" => $row[3], "correo" => $row[4], "calle" => $row[9], "exterior" => $row[10],  "cp" => $row[12], "id" => $row[0]));
        }
    }

    $arreglo = serialize($arreglo);
    $arreglo = urlencode($arreglo);

    print_r($arreglo);
    header("Location: http://25.90.201.164/distribuidos/Bird_punk/BackendP/buscarAlmacenista.php?datos=".$arreglo."&control=1");

?>
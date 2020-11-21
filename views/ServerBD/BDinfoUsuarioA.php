<?php
    include '../conexion.php';


    $ID_Usuario = $_GET['id'];
    
    $sql = "SELECT * FROM usuario WHERE usuario.ID_Usuario = '".$ID_Usuario."';";
    $infoUsuario=sqlsrv_query($conn,$sql);

    $bandera = 1;

    while($row = sqlsrv_fetch_array($infoUsuario))
    {
        if($bandera == 1)
        {
            $arreglo = array(array("nombre" => $row[1], "paterno" => $row[2], "materno" => $row[3], "correo" => $row[4], "calle" => $row[9], "exterior" => $row[10],  "cp" => $row[12]));
            $bandera = 0;
        }
        else
        {
            array_push($arreglo, array("nombre" => $row[1], "paterno" => $row[2], "materno" => $row[3], "correo" => $row[4], "calle" => $row[9], "exterior" => $row[10],  "cp" => $row[12]));
        }
    }

    $arreglo = serialize($arreglo);
    $arreglo = urlencode($arreglo);

    print_r($arreglo);
    header("Location: http://25.90.201.164/distribuidos/Bird_punk/views/BackendP/BEPinfoUsuarioA.php?datos=".$arreglo."&control=1&id=$ID_Usuario");

?>
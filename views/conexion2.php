<?php
    $serverName = "17100052-BRAVOR"; //serverName\instanceName
    $connectionInfo = array("database"=>"birdpunk");
    $conn = sqlsrv_connect($serverName, $connectionInfo);

    if($conn == false)
        include 'conexion3.php';
    else
        echo "Query en ServerBD 2";

?>
<?php
    $serverName = "17100052-BRAVOR"; //serverName\instanceName
    $connectionInfo = array("database"=>"birdpunk");
    $conn = sqlsrv_connect($serverName, $connectionInfo);

    if($conn == false)
        echo "TODOS LOS SERVERS FALLARON";
    else
        echo "Query en ServerBD 3";

?>
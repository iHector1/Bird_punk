<?php

    $serverName = "17100052-BRAVOR"; //serverName\instanceName

    // Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
    // La conexión se intentará utilizando la autenticación Windows.
    $connectionInfo = array("database"=>"BearPay");
    $connBP = sqlsrv_connect($serverName, $connectionInfo);
     
?>
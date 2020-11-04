<?php
    $serverName = "17100052-BRAVOR"; //serverName\instanceName

    // Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
    // La conexión se intentará utilizando la autenticación Windows.
    $connectionInfo = array("database"=>"birdpunk");
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    //$conn = sqlsrv_connect($serverName, array('UID'=>'PC2', 'PWD'=>'1234'));
?>
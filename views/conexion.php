<?php

     
          $serverName = "LAPTOP-BH1NLJJ4"; //serverName\instanceName

          // Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
          // La conexión se intentará utilizando la autenticación Windows.
          $connectionInfo = array("database"=>"bearpay");
          $conn = sqlsrv_connect($serverName, $connectionInfo);
?>
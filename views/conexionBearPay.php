<?php

     
          $serverName = "17100052-BRAVOR"; //serverName\instanceName

          // Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
          // La conexión se intentará utilizando la autenticación Windows.
          $connectionInfo = array("database"=>"BearPay");
          $conn = sqlsrv_connect($serverName, $connectionInfo);
     
    

          /*if( $conn ) {
               echo "Conexión establecida locotete.<br />";
           }else{
               echo "Conexión no se pudo establecer.<br />";
               die( print_r( sqlsrv_errors(), true));
           }
*/
?>
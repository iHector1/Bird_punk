<?php
    $serverName = "S-NOTEBOOK";
    $connectionInfo = array( "Database"=>"bearpay");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);

    echo "Ingrese su correo y contraseña. <br>";
    echo "Correo: <br>";
    echo "Contraseña: <br><br>";

    if( $conn ) {
        $nombre = "sin nombre";
        $apellido_p = "sin apellido paterno";
        $apellido_m = "sin apellido materno";
        $correo = "correo@gmail.com";
        $contraseña = "yeah";

        $revisarUsuario = "SELECT Correo FROM usuario WHERE Correo = $correo";
        $resultado = sqlsrv_query($conn, $revisarUsuario);

        if(sqlsrv_query($conn, $resultado)){
            $revisarContra = "SELECT Contraseña FROM usuario WHERE Contraseña = '$contraseña'";
            $resultado = sqlsrv_query($conn, $revisarContra);
            
            if(sqlsrv_query($conn, $resultado)){
                $modificar = "UPDATE usuario SET Nombre_s = '$nombre', Apellido_Paterno = '$apellido_p',
                                                 Apellido_Materno = '$apellido_m'";
                $consulta=sqlsrv_query($conn, $modificar);
                
                // $modificar = "SELECT * FROM usuario WHERE Correo = '$correo'";
                // $resultado = sqlsrv_query($conn, $modificar);
                
                // while($fila = sqlsrv_fetch_array($resultado)){
                //     echo $fila["Nombre_s"] . "<br>";
                //     echo $fila["Apellido_Paterno"] . "<br>";
                //     echo $fila["Apellido_Materno"];
                // }

                if(sqlsrv_query($conn, $modificar)){
                    echo "Modificación exitosa.<br>";
                }
                else{
                    echo "No se pudo realizar la modificación.<br>";
                }
            }
            else{
                echo "Error, la contraseña está errada.<br>";
            }
        }
        else{
            echo "Error, no hay ningún usuario registrado con ese correo.<br>";
        }
    }
    else{
        echo "Conexión no se pudo establecer.<br>";
        die( print_r( sqlsrv_errors(), true));
   }
?>
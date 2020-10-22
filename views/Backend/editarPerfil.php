<?php

    $serverName = "S-NOTEBOOK";
    $connectionInfo = array( "Database"=>"bearpay");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);

    if( $conn ) {

        $nombre = "";
        $apellido_p = "";
        $apellido_m = "";
        $correo = "correo@gmail.com";
        $pass = "yeah";
        $newPass = "";

        $existeUsuario = "SELECT Correo FROM usuario WHERE Correo = '$correo'";

        if(sqlsrv_query($conn, $existeUsuario)){

            $ingresarPass = "SELECT Contraseña FROM usuario WHERE Contraseña = '$pass'";
            $resultado = sqlsrv_query($conn, $ingresarPass);

            if(sqlsrv_query($conn, $resultado)){

                if($nombre != ""){
                    $editarNombre = "UPDATE usuario SET Nombre_s = '$nombre'";
                    if(sqlsrv_query($conn, $editarNombre))
                        echo "Nombre editado exitosamente.<br>";
                    else
                        echo "Error, el nombre no se pudo editar.<br>";
                }

                if($apellido_p != ""){
                    $editarApellidoPaterno = "UPDATE usuario SET Apellido_Paterno = '$apellido_p'";
                    if(sqlsrv_query($conn, $editarApellidoPaterno))
                        echo "Apellido paterno editado exitosamente.<br>";
                    else
                        echo "Error, el apellido paterno no se pudo editar.<br>";
                }

                if($apellido_m != ""){
                    $editarApellidoMaterno = "UPDATE usuario SET Apellido_Materno = '$apellido_m'";
                    if(sqlsrv_query($conn, $editarApellidoMaterno))
                        echo "Apellido materno editado exitosamente.<br>";
                    else
                        echo "Error, el apellido materno no se pudo editar.<br>";
                }

                if($newPass != ""){
                    $editarPass = "UPDATE usuario SET Contraseña = '$newPass'";
                    $resultado = sqlsrv_query($conn, $editarPass);
                    if(sqlsrv_query($conn, $resultado))
                        echo "Contraseña editada exitosamente.<br>";
                    else
                        echo "Error, la contraseña no se pudo editar.<br>";
                }
            }
            else
                echo "Error, la contraseña es incorrecta.<br>";
        }
        else
            echo "Error, no hay ningún usuario registrado con ese correo.<br>";
    }
    else{
        echo "Conexión no se pudo establecer.<br>";
        die( print_r( sqlsrv_errors(), true));
   }
?>
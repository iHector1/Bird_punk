<?php

    $serverName = "S-NOTEBOOK";
    $connectionInfo = array( "Database"=>"bearpay");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);

    if( $conn ) {

        $nombre = "";
        $apellido_p = "";
        $apellido_m = "";
        $correo = "chops@chops";
        $pass = "passabc";
        $newCorreo = "";
        $newPass = "";
        $idTipo = "";

        $existeUsuario = "SELECT Correo FROM usuario WHERE Correo = '$correo'";

        if(sqlsrv_query($conn, $existeUsuario)){

            $ingresarPass = "SELECT Contrasena FROM usuario WHERE Contrasena = '$pass'";

            if(sqlsrv_query($conn, $ingresarPass)){

                if($nombre != ""){
                    $editarNombre = "UPDATE usuario SET Nombre_s = '$nombre' WHERE Correo = '$correo'";
                    if(sqlsrv_query($conn, $editarNombre))
                        echo "Nombre editado exitosamente.<br>";
                    else
                        echo "Error, el nombre no se pudo editar.<br>";
                }

                if($apellido_p != ""){
                    $editarApellidoPaterno = "UPDATE usuario SET Apellido_Paterno = '$apellido_p' WHERE Correo = '$correo'";
                    if(sqlsrv_query($conn, $editarApellidoPaterno))
                        echo "Apellido paterno editado exitosamente.<br>";
                    else
                        echo "Error, el apellido paterno no se pudo editar.<br>";
                }

                if($apellido_m != ""){
                    $editarApellidoMaterno = "UPDATE usuario SET Apellido_Materno = '$apellido_m' WHERE Correo = '$correo'";
                    if(sqlsrv_query($conn, $editarApellidoMaterno))
                        echo "Apellido materno editado exitosamente.<br>";
                    else
                        echo "Error, el apellido materno no se pudo editar.<br>";
                }

                if($newPass != ""){
                    $editarPass = "UPDATE usuario SET Contrasena = '$newPass' WHERE Correo = '$correo'";
                    if(sqlsrv_query($conn, $editarPass))
                        echo "Contraseña editada exitosamente.<br>";
                    else
                        echo "Error, la contraseña no se pudo editar.<br>";
                }

                if($newCorreo != ""){
                    $editarCorreo = "UPDATE usuario SET Correo = '$newCorreo' WHERE Correo = '$correo'";
                    if(sqlsrv_query($conn, $editarCorreo))
                        echo "Correo editado exitosamente.<br>";
                    else
                        echo "Error, el correo no se pudo editar.<br>";
                }

                if($idTipo != ""){
                    $editarIdTipo = "UPDATE usuario SET ID_Tipo_Usuario = '$idTipo' WHERE Correo = '$correo'";
                    if(sqlsrv_query($conn, $editarIdTipo))
                        echo "Tipo de usuario editado exitosamente.<br>";
                    else
                        echo "Error, el id de tipo de usuario no se pudo editar.<br>";
                }
            }
            else
                echo "Error, la contraseña es incorrecta.<br>";
        }
        else
            echo "Error, no hay ningún usuario registrado con ese correo.<br>";
    }
    else{
        echo "La conexión no se pudo establecer.<br>";
        die( print_r( sqlsrv_errors(), true));
   }
   
   sqlsrv_close($conn);
?>
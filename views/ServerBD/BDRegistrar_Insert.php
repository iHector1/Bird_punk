<?php

    include ("../conexion.php");
    error_reporting(0);

    $nombre = $_POST['name'];
    $appaterno = $_POST['lastName1'];
    $apmaterno = $_POST['lastName2'];
    $correo = $_POST['email'];
    $contra = $_POST['password'];

    $calle = $_POST['address'];
    $exterior = $_POST['numberExt'];
    $interior = $_POST['numberInt'];
    $colonia = $_POST['suburb'];
    $postal = $_POST['cp'];
    $estado = $_POST['state'];

    $ValdiarCorreo = "/^(([^<>()\[\]\\.,;:\s@”]+(\.[^<>()\[\]\\.,;:\s@”]+)*)|(“.+”))@((\[[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}])|(([a-zA-Z\-0–9]+\.)+[a-zA-Z]{2,}))$/";

    if(preg_match($ValdiarCorreo, $correo) == false){
        header("Location: http://25.90.201.164/distribuidos/Bird_punk/views/BackendP/BEPRegistrar_Insert.php?error=1&control=1");
        sqlsrv_close($conn);
    }

    $params = array($nombre, $appaterno, $apmaterno, $correo, $contra);

    $stmt = sqlsrv_query($conn, "INSERT INTO usuario (Nombre_s, Apellido_Paterno, Apellido_materno, Correo, Contrasena, ID_Tipo_Usuario) VALUES (?, ?, ?, ?, ?, '1')", $params);
    sqlsrv_free_stmt($stmt);



    $sql = "SELECT ID_Usuario FROM usuario WHERE Nombre_s = '$nombre' and Apellido_Paterno = '$appaterno' and Apellido_Materno = '$apmaterno' and Correo = '$correo' and Contrasena = '$contra'";
    $stmt2 = sqlsrv_query( $conn, $sql );
    
    if( $stmt2 === false) {
        die( print_r( sqlsrv_errors(), true) );
    }

    while( $row = sqlsrv_fetch_array( $stmt2, SQLSRV_FETCH_NUMERIC) ) {
        
        //echo "$row[0]";
        $idd = (int)"$row[0]";
    }

    sqlsrv_free_stmt( $stmt2);
    echo "$idd";

    $params3 = array($idd, $calle, $exterior, $interior, $colonia,$postal, $estado);
    $stmt3 = sqlsrv_query($conn, "INSERT INTO info_cliente (ID_Usuario, Calle, NoExterior, NoInterior, Colonia, CP, Estado) VALUES (?, ?, ?, ?, ?, ?, ?)", $params3);
    sqlsrv_free_stmt($stmt3); 

    $params4 = array($idd);
    $stmt4 = sqlsrv_query($conn, "INSERT INTO carrito (ID_Usuario) VALUES (?)", $params4);
    sqlsrv_free_stmt($stmt4);

    sqlsrv_close($conn);  

    if ($stmt && $stmt3 && $stmt4){
        /*echo'<script type="text/javascript">
            alert("Usuario registrado correctamente.");
            window.location.href = " http://localhost/Bird_punk/views/Index.php";
            </script>';*/
        header("Location: http://25.90.201.164/distribuidos/Bird_punk/views/BackendP/BEPRegistrar_Insert.php?error=0&control=1");

    }else{
        /*echo'<script type="text/javascript">
            alert("Error al insertar usuario.");
            window.location.href = " http://localhost/Bird_punk/views/Registro.php";
            </script>';*/
        header("Location: http://25.90.201.164/distribuidos/Bird_punk/views/BackendP/BEPRegistrar_Insert.php?error=2&control=1");
    }

?>
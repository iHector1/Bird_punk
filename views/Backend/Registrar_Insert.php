<?php

    include ("../conexion.php");
        

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

    $SeguridadContra = "/^(?=.*[A-Z].*[A-Z])(?=.*[!@#$&*])(?=.*[0-9].*[0-9])(?=.*[a-z].*[a-z].*[a-z]).{8}$/";
    $ValdiarCorreo = "/^(([^<>()\[\]\\.,;:\s@”]+(\.[^<>()\[\]\\.,;:\s@”]+)*)|(“.+”))@((\[[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}])|(([a-zA-Z\-0–9]+\.)+[a-zA-Z]{2,}))$/";

    if(preg_match($ValdiarCorreo, $correo) == false){
        echo'<script type="text/javascript">
            alert("Verifique su correo electronico");
            window.location.href = " http://localhost/Bird_punk/views/Registro.php";
            </script>';
            sqlsrv_close($conn);
    }


    if(preg_match($SeguridadContra, $contra)== false){
        echo'<script type="text/javascript">
            alert("Debe contener \n 8 caracteres de longitud \n 2 letras mayusculas \n 1 carácter especial (!@#$&*) \n 2 numeros \n 3 letras en minuscula.");
            window.location.href = " http://localhost/Bird_punk/views/Registro.php";
            </script>';
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
        echo'<script type="text/javascript">
            alert("Usuario registrado correctamente.");
            window.location.href = " http://localhost/Bird_punk/views/Index.php";
            </script>';
    }else{
        echo'<script type="text/javascript">
            alert("Error al insertar usuario.");
            window.location.href = " http://localhost/Bird_punk/views/Registro.php";
            </script>';
    }






?>
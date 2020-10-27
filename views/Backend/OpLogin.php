<?php

    include ("../conexion.php");

    $user = $_POST['user'];
    $password = $_POST['password'];

    echo $user;
    echo $password;


    $sql = "SELECT * FROM usuario WHERE Correo = '".$user."' AND Contrasena = '".$password."'";
    $stmt = sqlsrv_query($conn, $sql);

    echo $stmt;

    if( $stmt ) {
        $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC);
        if($row['Nombre_s'] == NULL) {
            echo'<script type="text/javascript">
            alert("Usuario o Contraseña incorrectos.");
            window.location.href = "IniciarSesion.php";
            </script>';
        }else{
            if($row['ID_Tipo_Usuario'] == '1'){
                $idusuario = $row['ID_Usuario'];
                $sql2 = "SELECT * FROM carrito WHERE ID_Usuario = '$idusuario'";
                $stmt2 = sqlsrv_query( $conn, $sql2 );

                $row2 = sqlsrv_fetch_array( $stmt2, SQLSRV_FETCH_ASSOC);
            }
            
        }
        

        if($row['ID_Tipo_Usuario'] == '1'){
            session_start();
            $_SESSION['usuario'] = $row['Nombre_s'];
            $_SESSION['IDusuario'] = $row['ID_Usuario'];
            $_SESSION['IDcarrito'] = $row2['ID_Carrito'];
            $_SESSION['IDtipousuario'] = $row['ID_Tipo_Usuario'];
            header("Location:../Index.php");
        }
        if($row['ID_Tipo_Usuario'] == '2'){
            session_start();
            $_SESSION['usuario'] = $row['Nombre_s'];
            $_SESSION['IDusuario'] = $row['ID_Usuario'];
            $_SESSION['IDtipousuario'] = $row['ID_Tipo_Usuario'];
            header("Location:../IndexAlmacenista.php");
        }
        if($row['ID_Tipo_Usuario'] == '3'){
            session_start();
            $_SESSION['usuario'] = $row['Nombre_s'];
            $_SESSION['IDusuario'] = $row['ID_Usuario'];
            $_SESSION['IDtipousuario'] = $row['ID_Tipo_Usuario'];
            header("Location:../IndexAdministrador.php");
        }
    }else{
        die( print_r( sqlsrv_errors(), true) );
    }

?>
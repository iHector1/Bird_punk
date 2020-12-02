<?php
    include '../conexion.php';
    $user = $_POST['user'];
    $password = $_POST['password'];

    echo $user;
    echo $password;

    $sql = "SELECT * FROM usuario WHERE Correo = '".$user."' AND Contrasena = '".$password."'";
    $stmt = sqlsrv_query($conn, $sql);

    if( $stmt ) {
        $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC);
        if($row['Nombre_s'] == NULL) {
            echo'<script type="text/javascript">
            alert("Usuario o Contraseña incorrectos.");
            window.location.href = "http://localhost/Bird_punk/views/IniciarSesion.php";
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

            $usuario = $_SESSION['usuario'];
            $idu = $_SESSION['IDusuario'];
            $idc = $_SESSION['IDcarrito'];
            $idt = $_SESSION['IDtipousuario'];
            header("Location: http://localhost/Bird_punk/views/Index.php?usuario=".$usuario."&idu=$idu&idc=$idc&idt=$idt");
        }
        if($row['ID_Tipo_Usuario'] == '2'){
            session_start();
            $_SESSION['usuario'] = $row['Nombre_s'];
            $_SESSION['IDusuario'] = $row['ID_Usuario'];
            $_SESSION['IDtipousuario'] = $row['ID_Tipo_Usuario'];
            $usuario = $_SESSION['usuario'];
            $idu = $_SESSION['IDusuario'];
            $idt = $_SESSION['IDtipousuario'];

            header("Location:http://localhost/Bird_punk/views/IndexAlmacenista.php?usuario=".$usuario."&idu=$idu&idt=$idt");
        }
        if($row['ID_Tipo_Usuario'] == '3'){
            session_start();
            $_SESSION['usuario'] = $row['Nombre_s'];
            $_SESSION['IDusuario'] = $row['ID_Usuario'];
            $_SESSION['IDtipousuario'] = $row['ID_Tipo_Usuario'];
            $usuario = $_SESSION['usuario'];
            $idu = $_SESSION['IDusuario'];
            $idt = $_SESSION['IDtipousuario'];

            header("Location:http://localhost/Bird_punk/views/IndexAdministrador.php?usuario=".$usuario."&idu=$idu&idt=$idt");
        }
    }else{
        die( print_r( sqlsrv_errors(), true) );
    }

?>
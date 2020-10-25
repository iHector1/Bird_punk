<?php
    include '../conexionBearPay.php';
    include '../conexion.php';
    session_start();

    $varsesion = $_SESSION['usuario']; //Nombre de usuario
    if($varsesion == null || $varsesion == ''){
    echo'<script type="text/javascript">
        alert("Sesion cerrada.");
        window.location.href = "Index.php";
        </script>';
    } 

    $user = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $total = $_SESSION['total'];
    $IDCarrito = $_SESSION['IDcarrito']; 

    echo "Usuario: $user<br>";
    echo "Contraseña: $contraseña<br>";
    echo "Total: $total<br>";
    echo "Carrito: $IDCarrito<br>";
    
    $login = "SELECT * FROM Usuario WHERE Nombre_Usuario = '".$user."' AND Contrasena = '".$contraseña."'";
    $stmt = sqlsrv_query($connBP, $login);

    if( $stmt ) {
        $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC);
        if($row['Nombre_Usuario'] == NULL) {
            echo'<script type="text/javascript">
            alert("Usuario o Contraseña incorrectos.");
            window.location.href = "../BearPay_Login.php";
            </script>';
        }else{
            
            echo "usuario encontrado";
        }

        $nombre = $row['Nombre_Usuario'];
        $saldo = $row['Monto'];
    }

    echo "<br>Saldo: $saldo";

    $montoRelativo = $saldo - $total;
    echo "<br>relativo: $montoRelativo";

    if($montoRelativo >= 0)
    {
        $restaMonto = "UPDATE Usuario SET Monto = '$montoRelativo' WHERE Usuario.Nombre_Usuario = '$nombre'";
        $resta = sqlsrv_query($connBP, $restaMonto);
        sqlsrv_close($connBP);
        
        $sql = "DELETE FROM articulo_carrito WHERE ID_Carrito = ?";
        $params = array($IDCarrito);
        $stmt = sqlsrv_query( $conn, $sql, $params);
        if( $stmt === false ) {
            die( print_r( sqlsrv_errors(), true));
        }
        sqlsrv_close($conn);
          
        echo'<script type="text/javascript">
            alert("Compra realizada exitosamente.");
            window.location.href = "../Index.php";
            </script>';
            
    }
    else{
        echo'<script type="text/javascript">
            alert("No hay suficiente saldo en su cuenta.\nFavor de verificarlo.");
            window.location.href = "../BearPay_Login.php";
            </script>';
    }

?>
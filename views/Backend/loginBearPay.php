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
        ///////////////////////////////////////////////////////////////////////////////
        //Actualizar nuevo monto en BD de BearPay
        $restaMonto = "UPDATE Usuario SET Monto = '$montoRelativo' WHERE Usuario.Nombre_Usuario = '$nombre'";
        $resta = sqlsrv_query($connBP, $restaMonto);
        sqlsrv_close($connBP);
        

        //////////////////////////////////////////////////////////////////////////////
        //Agregar carrito a tabla compra
        $date = date('Y-m-d H:i:s');
        echo $date;
        $selectCarrito = "SELECT * FROM carrito WHERE ID_Carrito = '$IDCarrito'";
        $selectCarritostmt = sqlsrv_query($conn, $selectCarrito);

        while($row = sqlsrv_fetch_array($selectCarritostmt))
        {
            $idUsuarioC = $row[1];
            $totalC = $row[2];
            $cantArtC = $row[3];
            
            echo "<br> $idUsuarioC";
            echo "<br> $totalC";
            echo "<br> $cantArtC";

            $estatus = 1;
            $paramsC = array($idUsuarioC, $cantArtC, $totalC, $date, $estatus);
            $agregar = sqlsrv_query($conn, "INSERT INTO compra (ID_Usuario, Cantidad_Articulos, Precio_Total, Fecha_Compra, ID_Estatus) VALUES (?,?,?,?,?)", $paramsC);
        }

        $selectOrden = "SELECT No_Orden FROM compra WHERE Fecha_Compra = '$date'";
        $selectOrdenstmt = sqlsrv_query($conn, $selectOrden);

        while($row = sqlsrv_fetch_array($selectOrdenstmt))
        {
            $noOrden = $row[0];
        }


        $selectArticuloC = "SELECT * FROM articulo_carrito WHERE ID_Carrito = '$IDCarrito'";
        $selectArticuloCstmt = sqlsrv_query($conn, $selectArticuloC);

        while($row = sqlsrv_fetch_array($selectArticuloCstmt))
        {
            $idArticulo = $row[2];
            $cantidadArticulo = $row[3];
            $totalArticulo = $row[4];

            $paramsAC = array($noOrden, $idArticulo, $cantidadArticulo, $totalArticulo);
            $agregar = sqlsrv_query($conn, "INSERT INTO detalle_compra (No_Orden, ID_Articulo, Cantidad_Articulo, Total_Articulo) VALUES (?,?,?,?)", $paramsAC);
        }


        ///////////////////////////////////////////////////////////////////////////////
        //Actualizar stock en BD de birdpunk
        $stockNuevo = "SELECT ID_Articulo, Cantidad_Articulo FROM articulo_carrito WHERE ID_Carrito = '$IDCarrito'";
        $actualizarStock = sqlsrv_query($conn, $stockNuevo);

        while($row = sqlsrv_fetch_array($actualizarStock))
        {
            $ID_Articulo = $row[0];
            $CantidadNueva = $row[1];

            $stockViejo = "SELECT Stock FROM articulo WHERE ID_Articulo = '$ID_Articulo'";
            $Stock = sqlsrv_query($conn, $stockViejo);

            while($row = sqlsrv_fetch_array($Stock))
            {
                $CantidadVieja = $row[0];
            }

            $nuevoStock = $CantidadVieja - $CantidadNueva;

            $modificarCantidad = "UPDATE articulo SET Stock = '$nuevoStock' WHERE articulo.ID_Articulo = '$ID_Articulo'";
            $modificarCantidadArticulo=sqlsrv_query($conn,$modificarCantidad);
        }

       
        //////////////////////////////////////////////////////////////////////////////
        //Limpiar carrito de usuario
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
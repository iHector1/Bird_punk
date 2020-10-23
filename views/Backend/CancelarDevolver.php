 <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BIRD PUNK</title>

    </head>
</html> 

<?php
    //include 'conexion.php'
    //Conexion al Servidor *Cambiar segun la maquina
    $serverName = "DESKTOP-K60F1OJ"
    or die ("Error en la conexion al servidor");

    //                                                            Conexion a la BD Bird_Punk    *Cambiar segun el nombre de cada uno
    $conectionInfo = array("Database" =>"BirdPunk")
    or die ("Error en la conexion a la base de datos");

    $conn = sqlsrv_connect($serverName, $conectionInfo);

    //Querys correspondientes a la primera Base de datos (BirdPunk)
    $NumOrden = 6;          //Cambiar una vez que lo obtengan los demas
    $Select = " SELECT usuario.ID_Usuario,No_Orden, Nombre_s, Estatus, Precio_Total
                FROM compra
                INNER JOIN usuario
                ON usuario.ID_Usuario = compra.ID_Usuario
                INNER JOIN estatus
                ON compra.ID_Estatus = estatus.ID_Estatus
                WHERE No_Orden  = $NumOrden";

    $recurso = sqlsrv_query($conn, $Select);

    if ($recurso === false){
        echo "Error";
        die(print_r(sqlsrv_errors(), true));
    }
    if( sqlsrv_fetch( $recurso ) === false)
    {
         echo "Error in retrieving row.\n";
         die( print_r( sqlsrv_errors(), true));
    }

    if(!$recurso) {
        ?>
        <script type="text/javascript">
            alert("No hay datos");
        </script>
        <?php
    }
    else {
        $idUser = sqlsrv_get_field( $recurso, 0);
        $orden = sqlsrv_get_field( $recurso, 1);
        $nombre = sqlsrv_get_field( $recurso, 2);
        $estatus = sqlsrv_get_field( $recurso, 3);
        $precioT = sqlsrv_get_field( $recurso, 4);
    }
      
    //                                                                          Conexion a la BD BearPay
    $conexionInfo1 = array("Database" => "BearPay")
    or die ("Error en la conexion a la base de datos");
    
    $cone = sqlsrv_connect($serverName, $conexionInfo1);
    $precioBP = 0;

    //Query correspondiente para encontrar al usuario que realizo esta compra
    
    $SelectBP = "SELECT Monto
                 FROM Usuario
                 WHERE Nombre_Usuario  = '$nombre'";

    $query= sqlsrv_query($cone, $SelectBP);

    if ($query === false){
        echo "Error";
        die(print_r(sqlsrv_errors(), true));
    }
    if( sqlsrv_fetch( $query ) === false)
    {
         echo "Error in retrieving row.\n";
         die( print_r( sqlsrv_errors(), true));
    }
    
    
    //Verificar que el estado sea enviado
    if ($estatus == 'S'){
        $MontoA = sqlsrv_get_field( $query, 0);
        $precioBP = $MontoA + $precioT;
        $estatusBP = 5;
        //UPDETEAR A LA BD DEL BANCO LA CANTIDAD DEL PEDIDO CANCELADO O DEVUELTO
        $UpdateBP = "UPDATE Usuario 
            SET Monto = $precioBP 
            WHERE Nombre_Usuario = '$nombre'"; 

        $EqueryBP= sqlsrv_query($cone, $UpdateBP);

        if ($EqueryBP === false){
            echo "Error";
            die(print_r(sqlsrv_errors(), true));
        }
        //UPDETEAR EL ESTATUS EN LA BD DE LA TIENDA PARA QUE NO PUEDA CANCELAR O DEVOLVER DOS VECES
        $Update = " UPDATE compra
                SET ID_Estatus = $estatusBP
                WHERE No_Orden = $orden";

        $Equery = sqlsrv_query($conn, $Update);
        
        if ($Equery === false){
            echo "Error";
            die(print_r(sqlsrv_errors(), true));
        }
        ?>
        <script type="text/javascript">
            alert("Su pedido ha sido cancelado");
        </script>
        <?php
    }
    else if ($estatus == 'D'){
        $MontoA = sqlsrv_get_field( $query, 0);
        $precioBP = $MontoA + $precioT;
        $estatusBP = 6;
        //UPDETEAR A LA BD DEL BANCO LA CANTIDAD DEL PEDIDO CANCELADO O DEVUELTO
        $UpdateBP = "UPDATE Usuario 
                SET Monto = $precioBP 
                WHERE Nombre_Usuario = '$nombre'"; 

        $EqueryBP= sqlsrv_query($cone, $UpdateBP);

        if ($EqueryBP === false){
            echo "Error";
            die(print_r(sqlsrv_errors(), true));
        }
        //UPDETEAR EL ESTATUS EN LA BD DE LA TIENDA PARA QUE NO PUEDA CANCELAR O DEVOLVER DOS VECES
        $Update = " UPDATE compra
                SET ID_Estatus = $estatusBP
                WHERE No_Orden = $orden";

        $Equery = sqlsrv_query($conn, $Update);
        
        if ($Equery === false){
            echo "Error";
            die(print_r(sqlsrv_errors(), true));
        }
        ?>
        <script type="text/javascript">
            alert("Su pedido ha sido devuelto");
        </script>
        <?php
    }
    else if ($estatus == 'C'){
        ?>
        <script type="text/javascript">
            alert("No es posible realizar esta operacion ya que tu pedido se encuentra con el status de cancelado");
        </script>
        <?php
    }
    else if ($estatus == 'R'){
        ?>
        <script type="text/javascript">
            alert("No es posible realizar esta operacion ya que tu pedido se encuentra con el status de devuelto");
        </script>
        <?php
    }
    else {
        ?>
        <script type="text/javascript">
            alert("El status de su pedido es desconocido por lo tanto no puede realizar la accion que selecciono");
        </script>
        <?php
    }
?>

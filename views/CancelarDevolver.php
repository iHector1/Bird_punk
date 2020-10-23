<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIRD PUNK</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script scr="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/motion-ui.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="Styles/IndexStyle.css" />
    <link rel="stylesheet" href="Styles/styleVerProducto.css">
</head>
<body>
    <!--Barra de navegación-->
    <section id="Nav-bar">
        <div class="navbar border-bottom navbar-expand-md navbar-light navbar-fixed-top">
        </div>
        <nav class="navbar border-bottom navbar-expand-md navbar-light">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item ">
                        <a class="nav-link border-right" href="#">HOMBRES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">MUJERES</a>
                    </li>
                </ul>
            </div>
            <div class="navbar w-100 order-2  mx-auto">
                <img class="mx-auto" src="imagenes/logo.PNG" width="60%">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
            </div>
            <!--User/Carrito-->
            <div class="navbar w-100 order-3 ">
                <ul class="navbar-nav mx-auto">
                    <a href="IniciarSesion.php" class="navbar-button">
                        <i class="fa fa-user-circle-o"></i>
                    </a>
                       <a href="carrito.php" class="navbar-button"> <i href class="fa fa-shopping-cart"></i></a>
                 
                </ul>
            </div>
        </nav>
        <div class="navbar navbar-expand-md navbar-light"> </div>

    </section>

    </body>
</html>

<?php
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
    //echo "Listo ready, SUCCESFULY <br/>";

    /*if(!$recurso) {
        echo "No hay datos para mostrar";
    }
    else {*/
        $idUser = sqlsrv_get_field( $recurso, 0);
        //echo "EL ID = $idUser"."<br/>";
        $orden = sqlsrv_get_field( $recurso, 1);
        //echo "No.Orden = $orden"."<br/>";
        $nombre = sqlsrv_get_field( $recurso, 2);
        //echo "Nombre = $nombre"."<br/>";
        $estatus = sqlsrv_get_field( $recurso, 3);
        //echo "Estatus = $estatus"."<br/>";
        $precioT = sqlsrv_get_field( $recurso, 4);
        //echo "Precio = $precioT"."<br/>";
    //}
      
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
    //echo "Listo ready, SUCCESFULY Vol.2 <br/>";

    /*if(!$query) {
        echo "No hay datos para mostrar";
    }
    else {
        $MontoA = sqlsrv_get_field( $query, 0);
        echo "El monto del usuario $nombre es = $MontoA"."<br/>";
    }*/
    
    //Verificar que el estado sea enviado
    if ($estatus == 'S'){
        $MontoA = sqlsrv_get_field( $query, 0);
        // echo "El monto del usuario $nombre es = $MontoA"."<br/>";
        echo "Valido para cancelar<br/>";
         $precioBP = $MontoA + $precioT;
         echo "<h4 align: 'center'>La cantidad de dinero actual del cliente es ".$precioBP." <br/></h4";
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
    }
    else if ($estatus == 'D'){
        echo "Valido para Devolver <br/>";
        $precioBP = $MontoA + $precioT;
        echo "La cantidad de dinero actual del cliente es ".$precioBP." <br/>";
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
    }
    else if ($estatus == 'C'){
        echo "<h4>No es posible realizar esta operacion ya que tu pedido se encuentra con el status de cancelado <br/></h4>";
    }
    else if ($estatus == 'R'){
        echo "<h4>No es posible realizar esta operacion ya que tu pedido se encuentra con el status de devuelto <br/></h4>";
    }
    else {
        echo "<h4>El status de su pedido es desconocido por lo tanto no puede realizar la accion que selecciono</br></hr>";
    }
?>

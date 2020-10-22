<!DOCTYPE html>
<html lang="en">

<?php
    $serverName = "LAPTOP-BH1NLJJ4"; //serverName
    $connectionInfo = array( "Database"=>"BirdPunk");
    $conn = sqlsrv_connect($serverName, $connectionInfo);

?>

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
    <link rel="stylesheet" href="https://allyoucan.cloud/cdn/icofont/1.0.1/icofont.css">
    <link rel="stylesheet" href="Styles/Historial.css" />
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
    <!--- SECCIÓN DE HISTORIAL DE COMPRAS -->
    <section class="fadeInDown">
        <div class="mx-auto col-md-9">
            <div class="osahan-account-page-right shadow-sm bg-white p-4 h-100">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane  fade  active show" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                        <h4 class="font-weight-bold mt-0 mb-4">Historial de Compras</h4>
                        <div class="bg-white card mb-4 order-list shadow-sm">
                            <div class="gold-members p-4">
                                <a href="#">
                                </a>
                                <div class="media">
                                    <a href="#">
                                        <img class="rounded d-block mr-4" src="tenis.jpg" alt="">
                                    </a>

                                    <div class="media-body">
                                        <!--FECHA DEL PEDIDO-->
                                        <a href="#">
                                            <span class="float-right text-info">FECHA DE ENTREGA
                                            <i class="icofont-check-circled text-success">    
                                            </i>
                                            </span>
                                        </a>
                                        <!--NOMBRE DEL ARTICULO-->
                                        <h6 class="mb-2">
                                            <a href="#"></a>
                                            <a href="#" class="text-black">
                                            <?php
                                                $sql = "SELECT ID_Articulo FROM articulo WHERE ID_Articulo = 5";
                                                $stmt = sqlsrv_query($conn, $sql);
                                                $row=sqlsrv_fetch_array($stmt); //Obtiene el ID del articulo de la bd
                                                echo("Tenis Nike Kyrie V SpongeBob ");
                                                echo $row['ID_Articulo'];
                                            ?> 
                                            </a>
                                        </h6>
                                        <!--DIRECCION DEL ENVIO-->
                                        <p class="text-gray mb-1"><i class="icofont-location-arrow"></i> DOMICILIO
                                            <?php
                                                $sql = "SELECT Calle, NoExterior, NoInterior FROM info_cliente WHERE ID_Usuario = 1";
                                                $stmt = sqlsrv_query($conn, $sql);
                                                $row=sqlsrv_fetch_array($stmt); //Obtiene el domicilio de la bd
                                                //echo $row['Calle, NoExterior, NoInterior']; //No se puede agregar un registro
                                            ?> 
                                        </p>
                                        <!--ID ORDEN DESCRIPCIÓN-->
                                        <p class="text-gray mb-3">
                                        <i class="icofont-list"></i> 
                                            <?php
                                                $sql = "SELECT No_Orden FROM compra WHERE No_Orden = 1";
                                                $stmt = sqlsrv_query($conn, $sql);
                                                $row=sqlsrv_fetch_array($stmt); //Obtiene el numero de orden de la bd
                                                echo("No. Orden");                                                
                                                //echo $row['No_Orden']; //No se puede agregar un registro
                                            ?>  
                                        <i class="icofont-clock-time ml-2"></i>
                                            <?php
                                                $sql = "SELECT Fecha_Compra FROM compra WHERE No_Orden = 1";
                                                $stmt = sqlsrv_query($conn, $sql);
                                                $row=sqlsrv_fetch_array($stmt); //Obtiene la fecha de compra de la bd
                                                echo("Fecha_Compra");                                                
                                                //echo $row['Fecha_Compra']; //No se puede agregar un registro
                                            ?> 
                                        </p>
                                        <p class="text-dark">DESCRIPCION
                                        </p>
                                        <hr>
                                        <!--REORDENAR-->
                                        <div class="float-right">
                                            <a class="btn btn-sm btn-primary" href="carrito.php"><i class="icofont-refresh"></i> Comprar Nuevamente</a>
                                        </div>
                                        <!--PRECIO TOTAL DE COMPRA-->
                                        <p class="mb-0 text-black text-primary pt-2"><span class="text-black font-weight-bold"> Total de Compra:</span> 
                                            <?php
                                                $sql = "SELECT Precio_Total FROM compra WHERE No_Orden = 1";
                                                $stmt = sqlsrv_query($conn, $sql);
                                                $row=sqlsrv_fetch_array($stmt); //Obtiene el precio total de la bd
                                                echo("Precio_Total");                                                
                                                //echo $row['Precio_Total']; //No se puede agregar un registro
                                            ?> 
                                            </p>
                                    </div>
                                </div>

                            </div>
                        </div>
</section>
                       
</div>
</body>
</html>
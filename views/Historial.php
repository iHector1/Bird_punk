<?php
    include 'conexion.php';
    session_start();
    error_reporting(0);
    $varsesion = $_SESSION['usuario'];
    $IDusuario = $_SESSION['IDusuario'];
    $varsesion4 = $_SESSION['IDtipousuario'];
    ?>
    <?php
    if($varsesion == null || $varsesion == ''){
        echo'<script type="text/javascript">
            alert("Sesion cerrada.");
            window.location.href = "Index.php";
            </script>';
            
    }
?>


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
    <link rel="stylesheet" href="https://allyoucan.cloud/cdn/icofont/1.0.1/icofont.css">
    <link rel="stylesheet" href="Styles/Historial.css" />
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
      


    <!--- SECCIÓN DE HISTORIAL DE COMPRAS -->
    <section class="fadeInDown">
        <div class="mx-auto col-md-9">
            <h4 class="font-weight-bold mt-0 mb-4">Historial de Compras</h4>

                            <!-- Recorre los artículos del historial  -->
                            <?php
                                $domicilio = "SELECT Calle, NoExterior, NoInterior FROM info_cliente WHERE ID_Usuario = '$IDusuario'";
                                $stmtD = sqlsrv_query($conn, $domicilio);

                                while($r = sqlsrv_fetch_array($stmtD))
                                {
                                    $calle = $r[0];
                                    $noexterior = $r[1];
                                    $nointerior = $r[2];
                                }


                                $sql = "SELECT compra.No_Orden, compra.Fecha_Compra, compra.Precio_Total, estatus.Estatus FROM compra INNER JOIN estatus ON compra.ID_Estatus = estatus.ID_Estatus WHERE ID_Usuario = '$IDusuario' ORDER BY compra.Fecha_Compra DESC";
                                $stmt = sqlsrv_query($conn, $sql);

                                while($row = sqlsrv_fetch_array($stmt)) 
                                {
                                    $noorden = $row[0];
                                    $f = $row[1];
                                    $total = $row[2]; 
                                    $estatus = $row[3];
                                ?>

                                <div class="osahan-account-page-right shadow-sm bg-white p-4 h-100">
                                <?php echo '<h5> <b>NO. ORDEN:</b> '.$noorden.'</h5>';?>
                                <div class="tab-content" id="myTabContent">
                                <div class="tab-pane  fade  active show" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                <?php



                                    //////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    $sql2 = "SELECT modelo.Modelo, marca.Marca, detalle_compra.Cantidad_Articulo, detalle_compra.Total_articulo FROM articulo INNER JOIN modelo ON modelo.ID_Modelo = articulo.ID_Modelo 
                                    INNER JOIN marca ON marca.ID_Marca = articulo.ID_Marca INNER JOIN detalle_compra ON detalle_compra.ID_Articulo = articulo.ID_Articulo
                                    WHERE detalle_compra.No_Orden = '$noorden'";
                                    $stmt2 = sqlsrv_query($conn, $sql2);

                                    while( $row2 = sqlsrv_fetch_array($stmt2)) 
                                    {
                                    ?>
                                        <div class="bg-white card mb-4 order-list shadow-sm">
                                            <div class="gold-members p-4">
                                                <a href="#">
                                                </a>
                                                <div class="media">
                                                    <a href="#">
                                                        <img class="rounded d-block mr-4" src="tenis.jpg" alt="">
                                                    </a>

                                                    <div class="media-body">
                                                        
                                                        <!--NOMBRE DEL ARTICULO-->
                                                        <h6 class="mb-2">
                                                            <?php
                                                                echo $row2[0];
                                                                echo(" - ");
                                                                echo $row2[1];
                                                            ?> 
                                                            </a>
                                                        </h6>
                                                        <!--DIRECCION DEL ENVIO-->
                                                        <p class="text-gray mb-1"><i class="icofont-location-arrow"></i>
                                                            <?php
                                                                echo ($calle);
                                                                echo(" Ext. #");
                                                                echo $noexterior;
                                                                echo(" - Int. #");
                                                                echo $nointerior;
                                                            ?> 
                                                        </p>

                                                        <p class="text-gray mb-1">
                                                            <b>Fecha Compra:</b> <?php echo $fecha;?>
                                                        </p>

                                                        <!--REORDENAR-->
                                                        <!-- <div class="float-right"> 
                                                            <a class="btn btn-sm btn-primary" href="carrito.php"><i class="icofont-refresh"></i> Comprar Nuevamente</a>
                                                        </div>-->
                                                        <!--PRECIO TOTAL DE COMPRA-->
                                                        
                                                    </div>

                                                    <p><b>Total de Articulo:</b> $<?php echo $row2[3];?></p><br>
                                                    
                                                </div>
                                                <p><b>Cantidad:</b> <?php echo $row2[2];?></p>

                                            </div>
                                        </div>

                                    <?php
                                    }
                                    ?>
                                     <p class="mb-0 text-black text-primary pt-5"><span class="text-black font-weight-bold"> ESTATUS:</span> 
                                        <?php                                                                                            
                                            echo $estatus;
                                        ?> 
                                    </p>
                                    <p class="mb-0 text-black text-primary pt-5"><span class="text-black font-weight-bold"> TOTAL DE COMPRA:</span> 
                                        <?php                                                                                            
                                            echo "$$total";
                                        ?> 
                                    </p>
                                    <form action="Backend/CancelarDevolver.php" method="POST">
                                        <input type="hidden" name="noOrden" value="<?php echo $noorden;?>">
                                        <input type="submit" style="background-color:#1C2331; margin-left:-3px" value="Cancelar pedido" >
                                        <input type="submit" style="background-color:#1C2331; "value="Devolver  producto">
                                    </form>

                                </div>
                            </div>
                        </div><br><br>
                            <?php

                                    $mestatus = "UPDATE compra SET ID_Estatus = '2' WHERE compra.No_Orden = '$noorden' AND compra.ID_Estatus = '1'";
                                    $mEstatus=sqlsrv_query($conn,$mestatus);
                                }
                            ?>

    </section>                      
</body>
</html>
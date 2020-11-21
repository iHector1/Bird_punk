<?php
    session_start();
        error_reporting(0);
    $varsesion = $_SESSION['usuario'];
    $IDusuario = $_SESSION['IDusuario'];
    $varsesion4 = $_SESSION['IDtipousuario'];

   
    ?>
    <?php
    $idu=$_GET['idu'];
    $control=$_GET['control'];
    if($control!=1){
        header('Location:http://25.9.128.190/distribuidos/Bird_punk/views/Backend/historialProductos2.php?idu='.$idu);  
        die();
      }
    $arreglo = unserialize($_POST['arreglo']);
    $arreglo1 = unserialize($_POST['arreglo1']);
    $arreglo2 = unserialize($_POST['arreglo2']);
/*     echo"<pre>";
      print_r($arreglo);
    echo "</pre>";
    echo"<pre>";
    print_r($arreglo1);
  echo "</pre>";
  echo"<pre>";
  print_r($arreglo2);
echo "</pre>";*/
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
                        <a class="nav-link border-right" href="verProductoBoys.php">HOMBRES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="verProductoGirls.php">MUJERES</a>
                    </li>
                </ul>
            </div>
            <div class="navbar w-100 order-2  mx-auto">
                <a href="Index.php"><img src="imagenes/logo.PNG" width="60%" style="margin-left:150px;"></a>
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
                                foreach($arreglo as $r )
                                {
                                    $calle = $r["calle"];
                                    $noexterior = $r["exterior"];
                                    $nointerior = $r["interior"];
                                }

                                foreach($arreglo1 as $row ) 
                                {
                                    $noorden = $row["orden"];
                                    //$fecha = $row[1]->format('Y-m-d');
                                    $total = $row["total"]; 
                                    $estatus = $row["estatus"];
                                ?>

                                <div class="osahan-account-page-right shadow-sm bg-white p-4 h-100">
                                <?php echo '<h5> <b>NO. ORDEN:</b> '.$noorden.'</h5>';?>
                                <div class="tab-content" id="myTabContent">
                                <div class="tab-pane  fade  active show" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                <?php

                                    foreach($arreglo2 as  $row2 ) 
                                    {
                                        if($noorden==$row2["orden"]){
                                            
                                        
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
                                                                echo $row2["modelo"];
                                                                echo(" - ");
                                                                echo $row2["marca"];
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

                                                    <p><b>Total de Articulo:</b> $<?php echo $row2["totalarticulo"];?></p><br>
                                                    
                                                </div>
                                                <p><b>Cantidad:</b> <?php echo $row2["cantidad"];?></p>

                                            </div>
                                        </div>

                                    <?php
                                    }
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
                                    <form action="http://25.9.128.190/distribuidos/Bird_punk/views/Backend/CancelarDevolver.php" method="POST">
                                        <input type="hidden" value="<?php echo $idu;?>"  name="idu">
                                        <input type="hidden" name="noOrden" value="<?php echo $noorden;?>">
                                        <input type="submit" style="background-color:#1C2331; margin-left:-3px" value="Cancelar pedido" >
                                        <input type="submit" style="background-color:#1C2331; "value="Devolver  producto">
                                    </form>

                                </div>
                            </div>
                        </div><br><br>
                            <?php
                                }
                            ?>

    </section>                      
</body>
</html>
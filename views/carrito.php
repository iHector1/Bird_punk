<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script scr="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/motion-ui.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="Styles/carrito.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://allyoucan.cloud/cdn/icofont/1.0.1/icofont.css">
</head>

<body>
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
                <img class="mx-auto" src="imagenes/logo.PNG" width="100%">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                    <i class="fa fa-bars" aria-hidden="true">hola</i>
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

        <!-- Cariito de compras cool-->
        <div class="navbar navbar-expand-md navbar-light"> </div>
        <div class="contenedor">
            <h1 class="text-center mr-5 mt-5">Carrito de Compras</h1>
            <h4 class="float-right">Precio</h4>
            <hr class="col-md-10">

            <br>
            <section class="fadeInDown mr-5 ml-5" #scroll>
                <div class="mx-auto col-md-12">
                    <div class="osahan-account-page-right shadow-sm   h-100">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane  active show" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                <div class=" mb-4 order-list shadow-sm">
                                    <div class=" p-4">
                                        <a href="#">
                                        </a>
                                        <div class="media">
                                            <a href="#">
                                                <img class="rounded d-block mr-4" src="tenis.jpg" alt="">
                                            </a>
                                            <div class="media-body">
                                                <!--Precio del producto-->
                                                <a>
                                                    <span class="float-right text-info">$13,000 MNX</span>
                                                </a>
                                                <!--Precio del articulo-->
                                                <h6 class="mb-2">
                                                    <a href="#"></a>
                                                    <a href="#" class="text-black">NOMBRE DEL ARTICULO</a>
                                                </h6>
                                                <!--DIRECCION DEL ENVIO-->
                                                <p class="text-white mb-1"> Talla
                                                </p>
                                                <!--Datos del producto-->
                                                <p class="text-white mb-3">Cantidad : 1 | <i class="icofont-trash text-danger"></i>Eliminar</p>
                                                </p>
                                               
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="text-right">
                                        <p class="mb-0 text-white pt-2"><span class="font-weight-bold"> Total de Compra:</span> CANTIDAD TOTAL
                                        </p>
                                    </div>
                                    </div>
                                </div>

            </section>
        </div>

</body>

</html>

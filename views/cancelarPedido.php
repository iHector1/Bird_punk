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

    <h4>Numero de pedido: 123DER2345</h4>
    <!-------articulo------->
    <div class="art">
        <div>
            <div class="producto">
                <img src="tenis.jpg" class="cancelar">
            </div>    
            <div class="producto">
                <h6>Nombre articulo</h6>
                <h6>Cantidad</h6>
                <h6>Talla</h6>
                <h6>Precio1</h6>
            </div>
        </div>
        <div>
            <div class="producto">
                <img src="tenis.jpg" class="cancelar">
            </div>    
            <div class="producto">
                <h6>Nombre articulo</h6>
                <h6>Cantidad</h6>
                <h6>Talla</h6>
                <h6>Precio2</h6>
            </div>
        </div>
            <div class="producto">
                <img src="tenis.jpg" class="cancelar">
            </div>    
            <div class="producto">
                <h6>Nombre articulo</h6>
                <h6>Cantidad</h6>
                <h6>Talla</h6>
                <h6>Precio3</h6>
            </div>
    </div> 
    <input type="submit" class="fadeIn fourth" value="Cancelar pedido">
    <input type="submit" class="fadeIn fourt" value="Agregar producto">
    <input type="submit" class="fadeIn four" value="Finalizar compra">    
        
    <!---------FOOTER--------->
    <section id="footer">

    </section>
    
</body>
</html>
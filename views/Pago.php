<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script scr="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/motion-ui.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="Styles/stylesPago.css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="Styles/IndexStyle.css" />


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

    <div>
        <h1>Finalizar la compra</h1>
    </div>

    <div class="contenedor1">
        <div class="Parte1">
            <h2>IDENTIFICACIÓN</h2>
            <hr color=#1C2331 size=1 width= 100%>
            <!-- IMPRESIÓN DEL NOMBRE E EMAIL DEL USUARIO
            <output class="prueba" id="name" for="datos usuario" placeholder="Nombre del usuario"></output>
            <output class="prueba" id="email" for="datos usuario"></output> -->
            <input type="text" class="InfoUsuario" id="name" name="name" placeholder="Nombre del usuario" disabled>
            <input type="email" id="user" class="InfoUsuario" name="email" placeholder="Correo electrónico" disabled>
        </div>

        <div class="Parte2">
            <h2>DIRECCIÓN DE ENVÍO</h2>
            <hr color=#1C2331 size=1 width= 100%>
            <!-- IMPRESIÓN DE LA CALLE, NÚMERO, COLONIA Y C.P.
            <output class="prueba" id="address" for="direccion"></output>
            <output class="prueba" id="number" for="direccion"></output>
            <output class="prueba" id="suburb" for="direccion"></output>
            <output class="prueba" id="cp" for="direccion"></output>-->
            <input type="text" class="InfoUsuario" id="address" name="address" placeholder="Calle" disabled>
            <input type="number" id="number" class="InfoUsuario" name="number" placeholder="Número" disabled>
            <input type="text" class="InfoUsuario" id="colonia" name="colonia" placeholder="Colonia" disabled>
            <input type="number" id="cp" class="InfoUsuario" name="cp" placeholder="C.P." disabled>
            <a class= "Editar" href="EditarDomicilio.php" target="_blank">Editar</a>
            </form>
        </div>
        
    </div>

    <!--<div class="contenedor2">
        <h2>PAGO</h2>
        <hr color=#1C2331 size=1 width= 100%>
        <h3>BearPay</h3>

        <form method="POST" action="BearPay_Login.php">
            <input type="email" id="user" class="fadeIn second" name="email" placeholder="Correo electrónico" required>
            <input type="password" id="password" class="fadeIn second" name="password" placeholder="Contraseña" required>
            <input type="submit" class="btt" value="COMPRAR AHORA">
        </form>
    </div>-->
    
    <div class="contenedor3">
        <h4>RESUMEN DE LA COMPRA</h4>
        <div class="img">
            <img class="imagen" src="tenis.jpg" alt="tenis">
        </div>

        <div class="Info">
        <p>Nombre del artículo: </p>
        <p>Cantidad:</p>
        <p>Precio: $</p>
        </div>

        <a class="Resumen" href="carrito.php" target="_blank">Volver al carrito</a>
        <p>SUBTOTAL: </p>
        <p>COSTO DE ENVÍO: </p>
        <p>TOTAL: </p>

        <form method="POST" action="BearPay_Login.php">
            <input type="submit" class="btt" value="Comprar ahora">
        </form>
    </div>

    
</body>
</html>
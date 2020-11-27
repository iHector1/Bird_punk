<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script scr="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/motion-ui.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="Styles/stylesPago.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="Styles/IndexStyle.css" />

    <?php
    session_start();
    $varsesion = $_SESSION['usuario']; //Nombre de usuario
    if ($varsesion == null || $varsesion == '') {
        echo '<script type="text/javascript">
               alert("Sesion cerrada.");
               window.location.href = "Index.php";
               </script>';
    }
    $id_u = $_GET['idu']; //ID de Usuario
    $id_c = $_GET['idc']; //ID del carrito
    $control = $_GET['control'];
    $total=$_GET['total'];
    $carrito = unserialize($_GET['carrito']);
    $c=serialize($carrito);
    $c=urlencode($c);
    $arreglo=unserialize($_GET['arreglo']);
    $carrito2=unserialize($_GET['carrito2']);
    if ($control == 0) {
        header('Location:http://25.68.231.36/distribuidos/Bird_punk/views/Backend/BCarrito/totalCarritoP.php?idCar='.$id_c.'&idu='.$id_u);
    }
    if ($control == 1) {
        header('Location:http://25.68.231.36/distribuidos/Bird_punk/views/Backend/BCarrito/mostrarCarritoP.php?idCar='.$id_c.'&total='.$total.'&idu='.$id_u);
        
    }
    if ($control == 2) {
        header('Location:http://25.68.231.36/distribuidos/Bird_punk/views/Backend/pagoCarritoP.php?id='.$id_U.'&idCar='.$c.'&total='.$total.'&idu='.$id_u.'&idc='.$id_c);
    }/**/
   // $carrito = unserialize($_GET['carrito']);
    ?>


</head>

<body>
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
    <div>
        <h1>Finalizar la compra</h1>
    </div><br><br>
    <div class="contenedor1">
        <?php
        //while ($row = sqlsrv_fetch_array($infousuario)) {
        foreach($arreglo as $row){

            $nombreCompleto = $row["nombre"] . " " . $row["paterno"] . " " . $row["materno"];
        ?>
            <div class="Parte1">
                <h1>IDENTIFICACIÓN</h1>
                <hr color=#1C2331 size=1 width=100%>
                <!-- IMPRESIÓN DEL NOMBRE E EMAIL DEL USUARIO
            <output class="prueba" id="name" for="datos usuario" placeholder="Nombre del usuario"></output>
            <output class="prueba" id="email" for="datos usuario"></output> -->
                <input type="text" class="InfoUsuario" id="name" name="name" placeholder="Nombre Completo: <?php echo $nombreCompleto; ?>" disabled>
                <input type="email" id="user" class="InfoUsuario" name="email" placeholder="Correo Electronico: <?php echo $row["correo"]; ?>" disabled>
            </div><br><br>
            <div class="Parte2">
                <h1>DIRECCIÓN DE ENVÍO</h1>
                <hr color=#1C2331 size=1 width=100%>
                <!-- IMPRESIÓN DE LA CALLE, NÚMERO, COLONIA Y C.P.
            <output class="prueba" id="address" for="direccion"></output>
            <output class="prueba" id="number" for="direccion"></output>
            <output class="prueba" id="suburb" for="direccion"></output>
            <output class="prueba" id="cp" for="direccion"></output>-->
                <input type="text" class="InfoUsuario" id="address" name="address" placeholder="Calle: <?php echo $row["calle"]; ?>" disabled>
                <input type="number" id="number" class="InfoUsuario" name="number" placeholder="Numero Exterior: <?php echo $row["exterior"]; ?>" disabled>
                <input type="text" class="InfoUsuario" id="colonia" name="colonia" placeholder="Colonia: <?php echo $row["colonia"]; ?>" disabled>
                <input type="number" id="cp" class="InfoUsuario" name="cp" placeholder="Código Postal: <?php echo $row["cp"]; ?>" disabled>
                <a class="Editar" href="EditarDomicilio.php" target="_blank">Editar</a>
                </form>
            </div>
        <?php
        }
        ?>

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

        <div id="contenedorResumen">
            <?php
            foreach ($carrito2 as $fila) {
            ?>
                <div class="navbar navbar-expand-md navbar-light"> </div>
                <a href="#"></a>

                <div class="media">
                    <a href="#">
                        <img class="rounded d-block mr-4" style="width:200px; height:160px;" src=http://25.68.231.36/distribuidos/Bird_punk/views/Imagenes/<?php echo $fila['imagen']; ?> alt="">
                    </a>

                    <div class="media-body">
                        <!--Precio del producto-->
                        <a>
                            <span class="float-right text-info">$<?php echo $fila['total']; ?> MNX</span>
                        </a>

                        <!--Precio del articulo-->
                        <p class="mb-2">
                            <b><?php echo $fila['modelo']; ?></b>
                        </p>
                        <!--DIRECCION DEL ENVIO-->
                        <p class="text-white mb-1">
                            Talla: <?php echo $fila['talla']; ?>
                        </p>
                        <!--Datos del producto-->
                        <p class="text-white mb-3">Cantidad : <?php echo $fila['cantidad']; ?></p>
                        </p>

                    </div>
                </div>
            <?php 
            } //Fin while
            ?>
            <div>


            </div>
            <p style="font-size:20px;"><b>TOTAL:</b> $<?php echo $total; ?></p>
            <a class="btt2" href="carrito.php">Volver al carrito</a>
            <form method="POST" action="BearPay_Login.php?total=<?php echo $total; ?>&idc=<?php echo $id_c; ?>">
                <input type="submit" class="btt" value="Comprar ahora">
            </form>
</body>

</html>
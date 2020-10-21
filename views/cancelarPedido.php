<?php
    //Conexion al Servidor *Cambiar segun la maquina
    $serverName = "DESKTOP-K60F1OJ"
    or die ("Error en la conexion al servidor");

    //Conexion a la BD Bird_Punk    *Cambiar segun el nombre de cada uno
    $conectionInfo = array("Database" => "BirdPunk")
    or die ("Error en la conexion a la base de datos");

    $conn = sqlsrv_connect($serverName, $conectionInfo);

    //Querys correspondientes a la primera Base de datos (BirdPunk)

    session_start();
    $_SESSION['ID_Usuario'] = 5;
    $id_u = $_SESSION['ID_Usuario'];
    $sql = "SELECT Total_articulo, Cantidad_Articulo, talla, modelo,Imagen FROM compra 
            INNER JOIN detalle_compra ON compra.No_Orden = detalle_compra.No_Orden 
            INNER JOIN articulo ON detalle_compra.ID_Articulo = articulo.ID_Articulo
            INNER JOIN talla ON talla.ID_Talla = articulo.ID_Talla 
            INNER JOIN modelo ON modelo.ID_Modelo = articulo.ID_Modelo
            WHERE ID_Usuario = $id_u";
    $recurso = sqlsrv_query($conn, $sql);

    if ($recurso === false){
        echo "Error";
        die(print_r(sqlsrv_errors(), true));
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
    <div class="art" >
    <?php 
                                        while($fila = sqlsrv_fetch_array($recurso)){
                                    ?>
        <div>
            <div class="producto">
                <img src="Imagenes/<?php echo $fila['Imagen'];?>" class="cancelar">
            </div>    
            <div class="producto">
                <h6><?php echo $fila['modelo'];?></h6>
                <h6><?php echo $fila['Cantidad_Articulo'];?></h6>
                <h6><?php echo $fila['talla'];?></h6>
                <h6><?php echo $fila['Total_articulo'];?></h6>
            </div>
        </div>
        <?php 
            }
        ?>
    </div> 
    <form action  = "CancelarDevolver.php" >
    <input type="submit"  class="fadeIn fourth"  value="Cancelar pedido" > 
    <input type="submit" class="fadeIn fourt" value="Devolver  producto">
    <!-- <input type="submit" class="fadeIn four" value="Finalizar compra">     -->
    </form>
    
        
    <!---------FOOTER--------->
    <section id="footer">

    </section>
    
</body>
</html>
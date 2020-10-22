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

<!-- Codigo PHP para Conexion -->

<?php
    $serverName = "ALVAROCD-PC";            //Aqui solo se tiene que cambiar por el nombre del servidor que va a alojar la BD
    $connectionInfo = array( "Database"=>"birdpunk");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);
// if ($conn == TRUE) {
//     echo("Conexion exitosa");
//     echo("<br>"); 
// }
// else{
//     echo("Error en la conexion");
// }
?>


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
    <!-------articulo------->
    <!-- Codigo PHP para obtener los datos de la base de datos -->
<?php
$query = "SELECT modelo.Modelo, marca.Marca, articulo.Precio, talla.Talla FROM articulo INNER JOIN modelo ON articulo.ID_Modelo=modelo.ID_Modelo INNER JOIN marca ON articulo.ID_Marca=marca.ID_Marca INNER JOIN talla ON articulo.ID_Talla=talla.ID_Talla WHERE Genero='M' OR Genero='U'";
$res = sqlsrv_query($conn, $query);
while ($row = sqlsrv_fetch_array($res)) {
?>

<div class="articulos">
    <div class="articulo" >
        <div>
        <a href="verUnProducto.php"> <img src="tenis.jpg" class="uno" method = "POST"> </a>
        </div>
        <div class="desc">
        <form action="verUnProducto.php" method="POST">
            <h5><b>Nombre:</b> <?php echo $row[0];?></h5>
            <input type="hidden" name="modelo" value="<?php echo $row[0];?>">
            <h5><b>Marca:</b> <?php echo $row[1]?></h5>
            <input type="hidden" name="marca" value="<?php echo $row[1];?>">
            <h5><b>Precio:</b> <?php echo $row[2]?></h5>
            <input type="hidden" name="precio" value="<?php echo $row[2];?>">
            <h5><b>Talla:</b> <?php echo $row[3]?></h5>
            <input type="hidden" name="talla" value="<?php echo $row[3];?>">
            <input  type="submit" value="Ver Producto">
        </div>
        </form>
    </div>
    <br>
    <br>
<?php }?>

    <!---------FOOTER--------->
    <section id="footer">

    </section>


</body>
</html>
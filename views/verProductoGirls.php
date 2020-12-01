<?php
    session_start();
    error_reporting(0);
    $varsesion = $_SESSION['usuario'];
    $varsesion2 = $_SESSION['IDusuario'];
    $varsesion3 = $_SESSION['IDcarrito'];

        $idu=$_GET['idu'];
    $idc=$_GET['idc'];
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



<?php
    //include 'http://25.68.231.36/distribuidos/Bird_punk/views/Backend/ProductoGirls.php';
    $control = $_GET['control'];
    if($control != 1)
    {
        header("Location:http://25.68.231.36/distribuidos/Bird_punk/views/Backend/ProductoGirls.php?idu=$idu&idc=$idc");
    }
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
            <a href="Index.php?idu=<?php echo $idu;?>&idc=<?php echo $idc;?>"><img src="imagenes/logo.PNG" width="60%" style="margin-left:150px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
            </div>
            <!--User/Carrito-->
            <div class="navbar w-100 order-3 ">
                <ul class="navbar-nav mx-auto">
                    
                       <a href="carrito.php" class="navbar-button"> <i href class="fa fa-shopping-cart"></i></a>
                       <?php
                        if(!($varsesion == null || $varsesion == '')){
                            echo " <a href='Logout.php' class='navbar-button'> Cerrar Sesion</a>";
                        }
                        ?> 
                 
                </ul>
            </div>
        </nav>
        <div class="navbar navbar-expand-md navbar-light"> </div>

    </section>
    <!-------articulo------->
    <!-- Codigo PHP para obtener los datos de la base de datos -->
<?php
$vare=unserialize($_GET['datos']);
/*echo ('<pre>');
    print_r($vare);
    echo('</pre>');
*/foreach($vare as $row) {
?>

<div class="articulos">
    <div class="articulo" >
        <div>
        <a href="verUnProducto.php"> <img src="http://25.68.231.36/distribuidos/Bird_punk/views/Imagenes/<?php echo $row['imagen'];?>" class="uno" method = "POST"> </a>
        </div>
        <div class="desc">
        <form action="verUnProducto.php" method="POST">
        <h5><b>Nombre:</b> <?php echo $row['modelo']?></h5>
            <input type="hidden" name="modelo" value="<?php echo $row['modelo'];?>">

            <h5><b>Marca:</b> <?php echo $row['marca']?></h5>
            <input type="hidden" name="marca" value="<?php echo $row['marca'];?>">

            <h5><b>Precio:</b> <?php echo $row['precio']?></h5>
            <input type="hidden" name="precio" value="<?php echo $row['precio'];?>">

            <h5><b>Talla:</b> <?php echo $row['talla']?></h5>
            <input type="hidden" name="talla" value="<?php echo $row['talla'];?>">
            <input type="hidden" name="imagen" value="<?php echo $row['imagen'];?>">
            <input type="hidden" name="Stock" value="<?php echo $row['stock'];?>">
            <input type="hidden" name="ID_Articulo" value="<?php echo $row['id'];?>">
            <input type="hidden" name="Genero" value="2">

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
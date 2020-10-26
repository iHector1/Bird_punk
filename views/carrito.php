<?php
    session_start();
    error_reporting(0);
    $varsesion = $_SESSION['usuario'];
    $varsesion2 = $_SESSION['IDusuario'];
    $varsesion3 = $_SESSION['IDcarrito'];
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
<?php
    $id_U = $_SESSION['IDusuario']; //ID de Usuario
    $id_c = $_SESSION['IDcarrito']; //ID del carrito
    include 'conexion.php';
    include 'Backend/BCarrito/agregarCarrito.php';
    include 'Backend/BCarrito/Cantidades.php';
    include 'Backend/BCarrito/totalArticulo.php';
    include 'Backend/BCarrito/mostrarCarrito.php';
?>


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
    <link rel="stylesheet" href="Styles/carrito.css">
    <link rel="stylesheet" href="https://allyoucan.cloud/cdn/icofont/1.0.1/icofont.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="Styles/IndexStyle.css" />
</head>

<body>
<section id="Nav-bar">
        <div class="navbar border-bottom navbar-expand-md navbar-light navbar-fixed-top"></div>
        
        <nav class="navbar border-bottom navbar-expand-md navbar-light">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item ">
                        <a class="nav-link border-right" href="verProductoBoys.php">HOMBRES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="verProductoGirls.php">MUJERES</a>
                    </li>
                    <?php
                    if(!($varsesion == null || $varsesion == '')){
                        echo "<a href='editarPerfil.php'><h4 style='padding-left:100px;' class='nav-link'>Bienvenid@: ";  echo$_SESSION['usuario']; echo" </h4></a>";
                    }
                    ?>
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

                 
                </ul>
            </div>
        </nav>
        <div class="navbar navbar-expand-md navbar-light"> </div>

</section>

        <!-- Carrito de compras cool-->                                     
    <div class="navbar navbar-expand-md navbar-light"> </div>
    <div class="contenedor">
        <h1 id="Titulo" class="text-center mr-5 mt-5">Carrito de Compras</h1>
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
                                    <?php 
                                        while($fila = sqlsrv_fetch_array($res)){
                                    ?>
                                            <div class="navbar navbar-expand-md navbar-light"> </div>
                                            <a href="#"></a>
                                            
                                            <div class="media">
                                                <a href="#"> 
                                                    <img class="rounded d-block mr-4" src=Imagenes/<?php echo $fila['Imagen'];?> alt=""> 
                                                </a>
                                                
                                                <div class="media-body">
                                                    <!--Precio del producto-->
                                                    <a>
                                                        <span class="float-right text-info">$<?php echo $fila['Total_articulo'];?> MNX</span>
                                                    </a>

                                                    <!--Precio del articulo-->
                                                    <h6 class="mb-2">
                                                        <a href="#"></a>
                                                        <a href="#" class="text-black">
                                                        <?php echo $fila['Modelo'];?>
                                                        </a>
                                                    </h6>
                                                    <!--DIRECCION DEL ENVIO-->
                                                    <p class="text-white mb-1"> 
                                                        Talla: <?php echo $fila['Talla'];?>
                                                    </p>
                                                    <!--Datos del producto-->
                                                    <p class="text-white mb-3">Cantidad : <?php echo $fila['Cantidad_Articulo'];?> | <a href="Eliminar.php?idProducto=<?php echo $fila['ID_Articulo'];?>" class="btn btn-outline-light icofont-trash text-danger" >Eliminar</a></p>
                                                    </p>
                                                    
                                                </div>
                                            </div>
                                    <?php
                                        }//Fin while
                                    ?>
                                    
                                        
                                        <div>
                                            <form action="Pago.php">
                                                <input class="btn btn-primary" type="submit" value="PAGAR" 
                                                style="outline:none;margin-top:90px;position:absolute;border:none;font-size:25px;text-align:left;">
                                            </form>
                                        </div>
                                        <!-- Limpiar carrito -->
                                        <form method="post">
                                                <input  class="btn btn-primary" type="submit" name="limpiar" id="limpiar" value="Limpiar carrito" style="outline:none;margin-top:90px;margin-left:425px;position:absolute;border:none;font-size:25px;text-align:left;"/><br/>
                                            </form>
                                         <!-- Limpiar carrito -->
                                        <hr>
                                        <div class="text-right">
                                    <p class="mb-0 text-white pt-2"><span class="font-weight-bold"> Total de Compra: $</span><?PHP echo $total;?>
                                    <?php sqlsrv_close($conn); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>

    </div>
</body>

<?PHP

    function Limpiar() {

        Include 'Backend/BCarrito/LimpiarCarrito.php';

        $URL="carrito.php";
        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
    }
?>

<?PHP
if(array_key_exists('limpiar',$_POST)){
    Limpiar();
 }
 ?>

</html>

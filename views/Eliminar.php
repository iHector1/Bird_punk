<?php
session_start();
error_reporting(0);
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
    // $ID_Usuario = 2;
    $serverName = "DESKTOP-IT4DIF6"; //serverName\instanceName
        // Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
        // La conexión se intentará utilizando la autenticación Windows.
    $connectionInfo = array( "Database"=>"bearpay");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);

    $id_c = $_SESSION['ID_Carrito'] ;

    $sql = "SELECT Total_articulo FROM articulo_carrito WHERE articulo_carrito.ID_Articulo = $_GET[idProducto]";
    $stmt=sqlsrv_query($conn,$sql);
    
    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
        //echo $row['ID_Carrito']."<br />";
        $resP = $row['Total_articulo']; 
    }

    $sql = "DELETE FROM articulo_carrito WHERE ID_articulo = $_GET[idProducto] AND ID_Carrito =  $id_c";
    $res=sqlsrv_query($conn,$sql);

    $sql = "SELECT Modelo, Imagen, Precio FROM articulo INNER JOIN modelo ON modelo.ID_Modelo = articulo.ID_Modelo WHERE articulo.ID_Articulo = $_GET[idProducto]";
    $res1=sqlsrv_query($conn,$sql);

    while($fila = sqlsrv_fetch_array($res1)){
        $imagen = $fila['Imagen'];
        $precio = $fila['Precio'];
        $nombre = $fila['Modelo'];

        $arregloCarrito[] = array(
            'Imagen' => $imagen,
            'Precio' => $precio,
            'Nombre' => $nombre,
        );
    }

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

        <!-- Cariito de compras cool-->
        
                                            
                                            
                                            
                                            
    <div class="navbar navbar-expand-md navbar-light"> </div>
    <div class="contenedor">
        <h1 id="Titulo" class="text-center mr-5 mt-5">Producto Eliminado</h1>
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
                                //if(isset($_SESSION['carrito'])) {
                                    //$arregloCarrito = $_SESSION['carrito'];
                                    for($i=0; $i < count($arregloCarrito);$i++){ ?>
                                        <div class="navbar navbar-expand-md navbar-light"> </div>
                                    <a href="#"></a>
                                       
                                    <div class="media">
                                        <a href="#"> 
                                            <img class="rounded d-block mr-4" src=Imagenes/<?php echo $arregloCarrito[$i]['Imagen'];?> alt=""> 
                                        </a>
                                        
                                        <div class="media-body">
                                            <!--Precio del producto-->
                                            <a>
                                                <span class="float-right text-info">$<?php echo $arregloCarrito[$i]['Precio'];?> MNX</span>
                                            </a>

                                            <!--Precio del articulo-->
                                            <h6 class="mb-2">
                                                <a href="#"></a>
                                                <a href="#" class="text-black">
                                                    <?php echo $arregloCarrito[$i]['Nombre'];?>
                                                </a>
                                            
                                        </div>
                                    </div>
                                    <?php
                                                }//Fin while
                                    ?>
                                    <?php sqlsrv_close($conn); ?>

                                    
                                    <div>
                                        
                                            <a href="Carrito.php" class="btn btn-primary" type="submit"
                                            >Carrito</a>
                                        
                                    </div>

                                    <hr>
                                    <div class="text-right">
                                  
                                    <p class="mb-0 text-white pt-2"><span class="font-weight-bold"> Total de Compra:</span>$<?PHP echo $resP;?>
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>

    </div>

    
</body>

</html>

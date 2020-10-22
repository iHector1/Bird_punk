<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario']; //Nombre de usuario
$varsesion2 = $_SESSION['IDusuario']; //ID de usuario
$varsesion3 = $_SESSION['IDcarrito']; //ID de carrito del usuario 

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
    $serverName = "DESKTOP-IT4DIF6"; //serverName\instanceName
        // Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
        // La conexión se intentará utilizando la autenticación Windows.
    $connectionInfo = array( "Database"=>"bearpay");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);
?>
<?php
    $sql = "SELECT articulo_carrito.ID_Articulo, Precio, Cantidad_Articulo FROM articulo 
    INNER JOIN articulo_carrito ON articulo_carrito.ID_Articulo = articulo.ID_Articulo WHERE ID_Carrito = $_GET[id]";
    $stmt = sqlsrv_query($conn, $sql);

    if( $stmt === false ) {
        die( print_r( sqlsrv_errors(), true));
        }

    $total = 0;
    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
        $total = $row['Precio'] * $row['Cantidad_Articulo'];
        $id_a = $row['ID_Articulo'];
        //UPDATE A CADA PRECIO POR ARTICULO DE ACUERDO A SU CANTIDAD

        $sql = "UPDATE articulo_carrito SET Total_articulo = $total WHERE ID_Carrito = $_GET[id] AND ID_Articulo = $id_a";
        // $params = array($total, $_GET[id], $row['ID_Articulo']);
        $stmt2 = sqlsrv_query( $conn, $sql);

        if( $stmt === false) {
            die( print_r( sqlsrv_errors(), true) );
        }
    }
    $sql = "SELECT articulo_carrito.ID_Articulo, Talla, Imagen, Total_articulo, Cantidad_Articulo, Modelo FROM carrito INNER JOIN articulo_carrito ON carrito.ID_Carrito = articulo_carrito.ID_Carrito INNER JOIN articulo ON articulo_carrito.ID_Articulo = articulo.ID_Articulo INNER JOIN modelo ON articulo.ID_Modelo = modelo.ID_Modelo INNER JOIN TALLA ON articulo.ID_Talla = talla.ID_Talla WHERE carrito.ID_Carrito = $_GET[id]";
    $res=sqlsrv_query($conn,$sql);
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
                        <a class="nav-link " href="#">MUJERES</a>
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

        <!-- Cariito de compras cool-->
        
                                            
                                            
                                            
                                            
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
                                                    <p class="text-white mb-3">Cantidad : <?php echo $fila['Cantidad_Articulo'];?> | <a href="Eliminar.php?id=<?php echo $_GET['id'];?>&idProducto=<?php echo $fila['ID_Articulo'];?>" class="btn btn-outline-light icofont-trash text-danger" >Eliminar</a></p>
                                                    </p>
                                                    
                                                </div>
                                            </div>
                                    <?php
                                        }//Fin while
                                    ?>
                                    
                                        
                                        <div>
                                            <form action="Pago.php">
                                                <input class="btn btn-primary" type="submit" value="PAGAR" 
                                                style="outline:none;margin-top:60px;position:absolute;border:none;font-size:25px;text-align:left;">
                                            </form>
                                        </div>

                                        <hr>
                                        <div class="text-right">
                                    
                                    <?PHP 

                                        $total=0;
                                        $sql = "SELECT Total_articulo FROM articulo_carrito WHERE ID_Carrito = $_GET[id]";
                                        //$params = array($id_c);
                                        $stmt = sqlsrv_query( $conn, $sql);
                                        if( $stmt === false) {
                                            die( print_r( sqlsrv_errors(), true) );
                                        }

                                        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                                        $total = $total + $row['Total_articulo'];
                                        }
                                    
                                        /*Actualiza el precio total de la BD*/
                                        $sql = "UPDATE carrito SET Precio_Total = $total WHERE ID_Carrito = $_GET[id]";

                                        $stmt = sqlsrv_query( $conn, $sql);
                                    
                                        if( $stmt === false) {
                                            die( print_r( sqlsrv_errors(), true) );
                                        }
                                    ?>
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

</html>

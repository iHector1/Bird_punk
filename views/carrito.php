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
    $id_c = $_GET['idc']; //ID del carrito
    $stock=$_POST['cantidad'];
    $id_u=$_GET['idu'];
    $idArtculo=$_POST['ID_Articulo'];
    $control = $_GET['control'];
    $control2 = $_GET['control2']; 
    echo ($id_u);
echo ($id_c); 
if($control == 0)
{
    header ('Location:http://25.61.144.153/distribuidos/Bird_punk/views/Backend/BCarrito/agregarCarrito.php?id='.$idArtculo."&cantidad=$stock&idu=$id_u");    
}
 
if($control == 2){
header ('Location:http://25.61.144.153/distribuidos/Bird_punk/views/Backend/BCarrito/Cantidades.php?id='.$id_c.'&idu='.$id_u);
}
if($control == 3){
     header ('Location:http://25.61.144.153/distribuidos/Bird_punk/views/Backend/BCarrito/totalArticulo.php?id='.$id_c.'&idu='.$id_u);
}
if($control == 4){
    header ('Location:http://25.61.144.153/distribuidos/Bird_punk/views/Backend/BCarrito/totalCarrito.php?id='.$id_c.'&idu='.$id_u);}
$totalplay=$_GET['total'];
if($control == 5){
       header ('Location:http://25.61.144.153/distribuidos/Bird_punk/views/Backend/BCarrito/mostrarCarrito.php?id='.$id_c.'&total='.$totalplay.'&idu='.$id_u); 
    }
    $totalplay=$_GET['total'];
    $carrito = unserialize($_GET['carrito']);
    /*var_dump($stock,$idArtculo,$id_c,$id_U);
    echo ("<pr>");
    print_r($carrito);
    echo ("</>");*/
    //
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
                                        foreach($carrito as $fila){
                                    ?>
                                            <div class="navbar navbar-expand-md navbar-light"> </div>
                                            <a href="#"></a>
                                            
                                            <div class="media">
                                                <a href="#"> 
                                                    <img class="rounded d-block mr-4" src=http://25.61.144.153/distribuidos/Bird_punk/views/Imagenes/<?php echo $fila['imagen'];?> alt=""> 
                                                </a>
                                                
                                                <div class="media-body">
                                                    <!--Precio del producto-->
                                                    <a>
                                                        <span class="float-right text-info">$<?php echo $fila['total'];?> MNX</span>
                                                    </a>

                                                    <!--Precio del articulo-->
                                                    <h6 class="mb-2">
                                                        <a href="#"></a>
                                                        <a href="#" class="text-black">
                                                        <?php echo $fila['modelo'];?>
                                                        </a>
                                                    </h6>
                                                    <!--DIRECCION DEL ENVIO-->
                                                    <p class="text-white mb-1"> 
                                                        Talla: <?php echo $fila['talla'];?>
                                                    </p>
                                                    <!--Datos del producto-->
                                                    <p class="text-white mb-3">Cantidad : <?php echo $fila['cantidad'];?> | <a href="http://25.61.144.153/distribuidos/Bird_punk/views/Backend/BCarrito/funcionesEliminar.php?id=<?php echo $fila['id'];?>&idc=<?php echo $id_c;?>&idu=<?php echo $id_u;?>" class="btn btn-outline-light icofont-trash text-danger" >Eliminar</a></p>
                                                    </p>
                                                    
                                                </div>
                                            </div>
                                    <?php
                                        }//Fin while
                                    ?>
                                    
                                        
                                        <div>
                                            <button class="btn btn-primary"  style="outline:none;margin-top:90px;position:absolute;border:none;font-size:25px;text-align:left;"type="submit"><a href="Pago.php?control=0&idu=<?php echo $id_u;?>&idc=<?php echo $id_c;?>">PAGAR</a></button>
                                        </div>
                                        <!-- Limpiar carrito -->
                                               <br/>
                                         <!-- Limpiar carrito -->
                                        <hr>
                                        <div class="text-right">
                                    <p class="mb-0 text-white pt-2"><span class="font-weight-bold"> Total de Compra: $</span><?PHP echo $totalplay;?>
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

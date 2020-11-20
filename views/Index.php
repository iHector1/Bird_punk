<?php
    error_reporting(0);
    $usuario=$_GET['usuario'];
    $idu=$_GET['idu'];
    $idc=$_GET['idc'];
    $idt=$_GET['idt'];
    session_start();
    
    $_SESSION['usuario'] = $usuario;
    $_SESSION['IDusuario'] = $idu;
    $_SESSION['IDcarrito'] = $idc;
    $_SESSION['IDtipousuario'] = $idt;
    $varsesion = $_SESSION['usuario'];
    $varsesion2 = $_SESSION['IDusuario'];
    $varsesion3 = $_SESSION['IDcarrito'];
    $varsesion4 = $_SESSION['IDtipousuario'];
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
                        <?php
                            if(!($varsesion == null || $varsesion == '')){
                            echo "<a class='nav-link border-right' href='verProductoBoys.php?idu=$idu'>HOMBRES</a>";
                            }
                        ?>    
                    </li>
                    <li class="nav-item">
                        <?php
                            if(!($varsesion == null || $varsesion == '')){
                            echo "<a class='nav-link border-right' href='verProductoGirls.php?idu=$idu'>MUJERES</a>";
                            }
                        ?>
                    </li>
                    <li class="nav-item">
                        <?php
                            if(!($varsesion == null || $varsesion == '')){
                            echo "<a class='nav-link' href='Historial.php?idu=$idu&control=0&control1=1&control2=1'>HISTORIAL</a>";
                            }
                        ?>
                    </li>
                    <li class="nav-item ">
                    <?php
                    if(!($varsesion == null || $varsesion == '')){
                        echo "<a href='editarPerfil.php?id=$idu'><h4 style='padding-left:100px;' class='nav-link'>Bienvenid@: ";  echo$_SESSION['usuario']; echo" </h4></a>";
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
                        <?php
                        if($varsesion == null || $varsesion == ''){
                            echo "<a href='IniciarSesion.php' class='navbar-button'><i class='fa fa-user-circle-o'></i></a>";
                        }
                        ?> 
                    
                        <?php
                        if(!($varsesion == null || $varsesion == '')){
                            echo "<a href='carrito.php' class='navbar-button'> <i href class='fa fa-shopping-cart'></i></a>";
                        }else{
                            echo "<a href='Registro.php' class='navbar-button'> Registrarse</a>";
                        }
                        ?> 
                        
                       <?php
                        if(!($varsesion == null || $varsesion == '')){
                            echo " <a href='http://25.61.144.153/distribuidos/Bird_punk/views/Backend/logout.php' class='navbar-button'> Cerrar Sesion</a>";
                        }
                        ?> 
                        
                </ul>
            </div>
        </nav>
        <div class="navbar navbar-expand-md navbar-light"> </div>

    </section>
    <!-----------Banner------------>
    <section id="banner">
        <div class="fadeInDown"> 
            <img class="rounded mx-auto d-block" src="imagenes/banner-bg.jpg" width="100%" padding-top="2px">
        </div>
        
    </section>
    <!---------FOOTER--------->
    <section id="footer">

    </section>
    
</body>
</html>
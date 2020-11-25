<?php
    session_start();
    error_reporting(0);
    $varsesion = $_SESSION['usuario'];
    $varsesion2 = $_SESSION['IDusuario'];
    if($varsesion == null || $varsesion == ''){
        echo'<script type="text/javascript">
            alert("Sesion cerrada.");
            window.location.href = "Index.php";
            </script>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="Styles/stylesRegistro.css" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="Styles/IndexStyle.css" />
</head>
<body>
    <section id="Nav-bar">
        <div class="navbar border-bottom navbar-expand-md navbar-light navbar-fixed-top">
        </div>
        <nav class="navbar border-bottom navbar-expand-md navbar-light">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav mx-auto">
                   
                    <li class="nav-item">
                        <a class="nav-link " href="agregarAlmacenista.php">ALMACENISTAS</a>
                    </li>

                    <li class="nav-item ">
                    <?php
                    if(!($varsesion == null || $varsesion == '')){
                        echo "<a href='editarPerfil.php'><h4 style='padding-left:100px;' class='nav-link'>Bienvenid@: ";  echo$_SESSION['usuario']; echo" </h4></a>";
                    }
                    ?>
                    </li>
                    
                </ul>
            </div>
            <div class="navbar w-100 order-2  mx-auto">
                <a href="IndexAdministrador.php"><img src="imagenes/logo.PNG" width="60%" style="margin-left:150px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
            </div>
            <!--User/Carrito-->
            <div class="navbar w-100 order-3 ">
                <ul class="navbar-nav mx-auto">
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


    <div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->
        <div class="Login">
            <h2>AGREGAR ALMACENISTA</h2>
        </div>

        <!-- Login Form -->
        <form method="POST" action="http://25.90.114.110/distribuidos/Bird_punk/views/Backend/Registrar_Insert_Almacenistas.php">
            <div class="contenedorIzq">
        <input type="text" id="name" class="fadeIn second" name="name" placeholder="Nombre(s)" required>
        <input type="text" id="lastName1" class="fadeIn second" name="lastName1" placeholder="Apellido Paterno" required>
        <input type="text" id="lastName2" class="fadeIn second" name="lastName2" placeholder="Apellido Materno" required>
        <input type="email" id="email" class="fadeIn second" name="email" placeholder="Correo electrónico" required>
        <input type="password" id="password" class="fadeIn second" name="password" placeholder="Contraseña" required>
            </div>

        <!-- Domicilio-->
        <div class="contenedorDer">
            <div class="titulo">
                <h3> DOMICILIO USUARIO </h3>
            </div>    
            <input type="text" id="address" class="fadeIn second" name="address" placeholder="Calle" required>
        <input type="number" id="numberExt" class="fadeIn third" name="numberExt" placeholder="No. Exterior" required>
        <input type="number" id="numberInt" class="fadeIn third" name="numberInt" placeholder="No. Interior" >
        <input type="text" id="suburb" class="fadeIn second" name="suburb" placeholder="Colonia" required>
        <input type="text" id="state" class="fadeIn second" name="state" placeholder="Estado" required>
        <input type="number" id="cp" class="fadeIn third" name="cp" placeholder="Código Postal" required>
        <input type="submit" class="fadeIn fourth" value="Registrarse">
        </form>
        </div>


    </div>
    </div>
    
</body>
</html>
<?php
    session_start();
    error_reporting(0);
    $varsesion = $_SESSION['usuario'];
    $varsesion2 = $_SESSION['IDusuario'];
    ?>
    <?php
    $control=$_GET['control'];
    if($control!=1){    
       header('Location:http://25.0.98.15/distribuidos/Bird_punk/views/Backend/mostrarArticulosEditar.php') ; 
    }
    $datos=unserialize($_GET['articulos']);
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Editar Producto</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="Styles/stylesAnadirProducto.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
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
                        <a class="nav-link" href="AnadirProducto.php">AGREGAR PRODUCTO</a>
                    </li>
                    
                </ul>
            </div>
            <div class="navbar w-100 order-2  mx-auto">
                <a href="IndexAlmacenista.php?idu="><img src="imagenes/logo.PNG" width="60%" style="margin-left:150px;"></a>
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

    
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <h1>Editar Producto</h1>
                </div>
            </div>
                        
            <?php
            foreach($datos as $row){
            ?>
            <div class="row mt-3 p-2 rectangle">
                <h2 class="col-11 m-3 mb-5 ">Datos del producto</h2>
                        <div class="col-5 ml-4">
                    <!-- Obtención de datos de producto existente -->
                    <form method="POST" action="http://25.0.98.15/distribuidos/Bird_punk/views/Backend/modificarArticulo.php">
                        <!-- NombreProducto | No se puede editar -->
                        <input class="m-2 form-control float-right" type="number" id="name" name="name" placeholder="<?php echo $row['imagen'];?>" disabled></input>

                        <!-- NombreProducto | No se puede editar -->
                        <input class="m-2 form-control float-right" type="number" id="precio" name="precio" placeholder="Precio actual:<?php echo $row['precio'];?>" required></input>
                        <!-- PrecioProducto | Se puede editar -->
                        <input class="m-2 form-control float-right" type="number" id="stock" name="stock" placeholder="Stock actual: <?php echo $row['stock'];?>" required></input>
                        <!-- Submit -->
                        

                        <input type="hidden" name="ID_Articulo" value="<?php echo $row['id'];?>">

                        </div>
                        <div class="col-3">
                                <!-- Imagen | No se puede editar -->
                                <img class="img mt-2 ml-5" src="http://25.0.98.15/distribuidos/Bird_punk/views/Imagenes/<?php echo $row['imagen'];?>" alt="">
                        </div>


                        <input class="m-2 btn btn-dark btn-outline-light float-right" style="height:50px;"type="submit" value="Actualizar producto">                    
                    </form>  

                    <form method="POST" action="http://25.0.98.15/distribuidos/Bird_punk/views/Backend/eliminarArticulo.php">
                        <input class="m-2 btn btn-dark btn-outline-light float-left" style="height:50px;"type="submit" value="Eliminar producto">

                        <input type="hidden" name="ID_Articulo" value="<?php echo $row['id'];?>">
                    </form>

                       
            </div>
            <?php
            }
            ?>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>
<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];
$varsesion2 = $_SESSION['IDusuario'];
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
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Añadir Producto</title>
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
                    <li class="nav-item ">
                        <a class="nav-link border-right" href="#">HOMBRES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link border-right" href="#">MUJERES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link border-right" href="AnadirProducto.php">AGREGAR PRODUCTO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="EditarProducto.php">EDITAR PRODUCTO</a>
                    </li>
                </ul>
            </div>
            <div class="navbar w-100 order-2  mx-auto">
                <a href="IndexAlmacenista.php"><img src="imagenes/logo.PNG" width="60%" style="margin-left:150px;"></a>
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
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <h1>Añadir Producto</h1>
                </div>
            </div>
            <div class="row mt-3 p-2 rectangle">
                <h2 class="col-11 m-3 mb-5 ">Datos del producto</h2>
                <div class="col-5 ml-4">
                    <form method="POST" action="IndexAlmacenista.php">
                        <!-- Nombre -->
                        <input class="m-2 form-control float-right" type="text" id="name" name="name" placeholder="Nombre" required>
                        <text class="m-2 mt-4 lightText">$</text>
                        <!-- Precio -->
                        <input class="m-2 form-control w-75 float-right" type="number" id="price" name="price" placeholder="Precio" required></input>
                        <div class="m-2">
                            <text class="lightText mr-5">Genero</text>
                            <!-- Genero -->
                            <label class="m-2 mr-5 radio_inline"><input type="radio" id="gender" name="gender" value="0" required><text class="darkText"> Mujer</text></label>
                            <label class="m-2 mr-5 radio_inline"><input type="radio" id="gender" name="gender" value="1"><text class="darkText"> Hombre</text></label>
                            <label class="m-2 radio_inline"><input type="radio" id="gender" name="gender" value="2"><text class="darkText"> Otro</text></label>
                        </div>
                        <text class="m-2 lightText">Talla</text>
                        <!-- Talla -->
                        <select class="mb-5 p-1 w-75 float-right selectText" name="size" id="size" required>
                            <option value="" disabled selected>Talla</option>
                            <option value="24">MX 24</option>
                            <option value="24.5">MX 24.5</option>
                            <option value="25">MX 25</option>
                            <option value="25.5">MX 25.5</option>
                            <option value="26">MX 26</option>
                            <option value="26.5">MX 26.5</option>
                            <option value="27">MX 27</option>
                            <option value="27.5">MX 27.5</option>
                            <option value="28">MX 28</option>
                            <option value="28.5">MX 28.5</option>
                            <option value="29">MX 29</option>
                            <option value="29.5">MX 29.5</option>
                            <option value="30">MX 30</option>
                        </select>
                </div>
                <div class="col-3">
                        <!-- Imagen -->
                        <img class="img mt-2 ml-5" src="Imagenes/camera4.png" alt="">
                        <input style="margin-left: 48px;" type="file" name="imagen" required>
                </div>
                <div class="col-3">
                        <!-- Stock -->
                        <text class="m-2 lightText">En stock</text>
                        <input class="m-2 form-control" type="number" id="stock" name="stock" placeholder="Cantidad" required>
                        <!-- Submit -->
                        <input class="m-2 mt-5 btn btn-dark btn-outline-light float-right" type="submit" value="Registrar producto">
                    </form>
                </div>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>
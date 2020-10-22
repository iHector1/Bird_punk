<!DOCTYPE html>
<html lang="en">

<!-- Conexión a la base de datos -->
<?php
    $serverName = "LAPTOP-BH1NLJJ4"; //serverName
    $connectionInfo = array( "Database"=>"BirdPunk");
    $conn = sqlsrv_connect($serverName, $connectionInfo);
?>

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
    <link rel="stylesheet" href="Styles/verUnProducto.css" />
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
    
<!-------articulo------->
<div class="card mt-5 ml-5 mr-5 mb-5" id="wrapper">
    <div class="card-body col-md-12 col-sm-12"> 
        <!-- columna derecha -->
        <div id="first"> 
            <div>
            <?php
                $sql2 = "SELECT Stock FROM articulo";
            ?>
                <div class="galeria">
                    <!--Almacenar la imagen en la bd -->
                    <?php
                    //Primer img
                        $sql = "SELECT Imagen FROM Articulo WHERE ID_Articulo = 5"; 
                        $result = sqlsrv_query($conn, $sql);
                        $row = sqlsrv_fetch_array($result);
                    ?>

                    <?php
                    //Primer img
                        $sql = "SELECT Imagen FROM Articulo WHERE ID_Articulo = 9"; 
                        $result = sqlsrv_query($conn, $sql);
                        $row2 = sqlsrv_fetch_array($result);
                    ?>
                    
                    <?php
                    //Primer img
                        $sql = "SELECT Imagen FROM Articulo WHERE ID_Articulo = 11"; 
                        $result = sqlsrv_query($conn, $sql);
                        $row3 = sqlsrv_fetch_array($result);
                    ?>
    
                    <input type="radio" name="navegacion" id="_1" checked>
                    <input type="radio" name="navegacion" id="_2">
                    <input type="radio" name="navegacion" id="_3">
                    <input type="radio" name="navegacion" id="_4"> 
                    <input type="radio" name="navegacion" id="_5">
                    <img src="tenis.jpg" width="600" height="300"/> <!--Ejemplo-->
                    <img src="imageView.php?image_id= <?php echo $row["Imagen"]; ?>" width="600" height="300"/><br/>
                    <img src="imageView.php?image_id= <?php echo $row2["Imagen"]; ?>" width="600" height="300"/><br/>
                    <img src="imageView.php?image_id= <?php echo $row3["Imagen"]; ?>" width="600" height="300"/><br/>
                    <img src="Imagenes/tenis-2.jpg" width="600" height="300"/> <!--Ejemplo-->
                </div>
            </div>
        </div>

        <!-- Columna izquierda -->
        <div id="second">
            <h4 class="text-center">Tenis Nike Kyrie V SpongeBob</h4>
            <h4 class="text-center">Nike</h4>
            <h4 class="text-center">$13,000</h4>
            <br><br>
            <h5>Talla</5>
            <br>
            <mat-form-field appearance="fill" method="POST" required>
            <select matNativeControl required>
                <option value="t1">25 cm</option>
                <option value="t2">26 cm</option>
                <option value="t3">27 cm</option>
                <option value="t4">28 cm</option>
            </select>
            </mat-form-field>
            <br><br>
            <form name="form-cant" method="POST">
                <h5>Cantidad</h5> 
                    <input type="number" name="cantidad" min="1" value="0" required>
                    <br><br>   
                    <form method="get">
                        <input type="submit" value="Añadir al carrito">
                    </form>
            </form>
            <!-- Verificar stock -->
            <?php 
                    $sql = "SELECT Stock FROM articulo WHERE ID_Articulo = 5";
                    $stmt = sqlsrv_query($conn, $sql);
                    $row=sqlsrv_fetch_array($stmt); //Obtiene el valor de stock de la bd

                    echo("Cantidad de artículos: ");
                    isset($_POST["cantidad"]) ? print $_POST["cantidad"] : "";//Imprime valor ingresado en pagina web
                    //$cantidad = isset($_POST["cantidad"]) ? : ""; //Obtiene el valor ingresado en la pagina web

                    echo("Stock: ");
                    echo $row['Stock']; //Imprime la cantidad en el stock de la bd
                    

                    if(isset($_POST["cantidad"]) == $row['Stock']){      
                        echo ("   Si hay");
                    }else{
                        echo ("   No hay");
                    }
            ?>


                
        </div>  
    </div>
</div> 

</body>
</html>


<?php
    
    error_reporting(0);
    $varsesion = $_SESSION['usuario'];
    $varsesion2 = $_SESSION['IDusuario'];
    $varsesion3 = $_SESSION['IDcarrito'];
?>
<?php
/*if($varsesion == null || $varsesion == ''){
    echo'<script type="text/javascript">
        alert("Sesion cerrada.");
        window.location.href = "Index.php";
        </script>';
}*/
?>
<!DOCTYPE html>
<html lang="en">

<?php
    include ("conexion.php");
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
                        <a class="nav-link border-right" href="verProductoBoys.php">HOMBRES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="verProductoGirls.php">MUJERES</a>
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
<div class="card mt-5 ml-5 mr-5 mb-5" id="wrapper">
    <div class="card-body col-md-12 col-sm-12"> 
        <!-- columna derecha -->
        <div id="first"> 
            <div>
            <?php
            //<!-- Obtencion de los datos de verProducto a verUnProducto -->
            
                $modelo = $_POST['modelo'];
                $marca = $_POST['marca'];
                $precio = $_POST['precio'];
                $talla = $_POST['talla'];
                $IDArticulo = $_POST['ID_Articulo'];
                $pagina = $_POST['Genero'];
                $imagen = $_POST['imagen'];
                
            
                $sql2 = "SELECT Stock FROM articulo";
            ?>
                <div class="galeria">
                   <!--Almacenar la imagen en la bd -->
                    <input type="radio" name="navegacion" id="_1" checked>
                    
                    <img src="Imagenes/<?php echo $imagen;?>" width="500" height="300"/> <!--Ejemplo-->
                </div>
            </div>
        </div>

            
        <!-- Columna izquierda -->
        <div id="second">
            <h4 class="text-center"><?php echo ("<b>Modelo: </b>".$modelo)?></h4>
            <h4 class="text-center"><?php echo ("<b>Marca: </b>".$marca)?></h4>
            <h4 class="text-center"><?php echo ("<b>Precio:</b> $".$precio)?></h4>
            <br><br>
            <h5>Talla</5>
            <br>
            <h4 class=><?php echo ($talla)?></h4>
            
            <form name="form-cant" action="carrito.php" method="POST">
                <h5>Cantidad</h5> 
                    <input type="number" name="cantidad" min="1" required>
                    <br><br>   
                    <input type="hidden" name="ID_Articulo" value="<?php echo $IDArticulo;?>">
                    <input type="submit" value="Añadir al carrito">
            </form>


             <!-- Verificar stock -->
             <!-- Verificar stock -->
            <?php 
                $sql = "SELECT Stock FROM articulo WHERE ID_Articulo = '".$IDArticulo."'";
                $stmt = sqlsrv_query($conn, $sql);
                $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC); //Obtiene el valor de stock de la bd
                $cantidad = $_POST['cantidad']; //Obtiene el valor de la página web
                $var = (int)$row['Stock']; //Casteo
                echo "Stock: ";
                echo $row['Stock'];
                $pagina = (int)$pagina;
                

                while($cantidad == 0){
                    echo (" ");
                }
                if($cantidad < $var || $cantidad == $var){ 
                ?>
                    <!-- Referencia para añadir al carrito -->
                    
                <?php
                }
                else
                {                      
                    
                    echo "<script>alert('No hay suficiente stock');</script>";
                    echo '<script type="text/javascript">
                    window.location = "Index.php"
                    </script>';
                    
                }
            ?>         
        </div>  
    </div>
</div> 

</body>
</html>


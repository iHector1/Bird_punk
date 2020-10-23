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

<html>
<head>
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="Styles/styleAgregarAlEdPer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="Styles/IndexStyle.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<div class="pos-f-t">
<section id="Nav-bar">
        <div class="navbar border-bottom navbar-expand-md navbar-light navbar-fixed-top">
        </div>
        <nav class="navbar border-bottom navbar-expand-md navbar-light">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item ">
                        <a class="nav-link border-right" href="verProductosBoys.php">HOMBRES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link border-right" href="verProductosGirls.php">MUJERES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="agregarAlmacenista.php">ALMACENISTAS</a>
                    </li>
                    <li class="nav-item">
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
</div>

<header>
    <img src="Imagenes/punk_bird.png" width="150px" height="150px" alt="profile picture">
</header>

<body>

    

    <div class="contenedorAlmacenista">
        <table>
        <?php
            include 'conexion.php';
            include 'Backend/buscarAlmacenista.php';
            //include 'Backend/eliminarAlmacenista.php';
            while($row = sqlsrv_fetch_array($Almacenistas))
            {              
        ?>
            <form method="POST" action="./Backend/eliminarAlmacenistaBE.php">
                <tr>
                    <td>
                        <p><?php echo $row[1]." ".$row[2]." ".$row[3];?><br> Calle: <?php echo $row[8]; ?>,<br> No.Exterior: <?php echo $row[9];?><br>No.Interior: <?php echo $row[10];?> <br>Colonia: <?php echo $row[11]; ?> <br>CP: <?php echo $row[12];?><br> Correo: <?php echo $row[4]; ?> <br> </p>
                    </td>
                    <td>
                        <button type="submit" onClick="return confirm('¿Desea eliminar este almacenista?');" class="btn btn-default btn-circle"><b>X</b></button>
                    </td>
                </tr>
                <input type="hidden" name="idalmacenista" value="<?php echo $row[0];?>">
            </form>
        <?php
            }
        ?>
        </table>
    
        
        <button type="submit" type="button" class="btn btn-light"><a href="RegistroAlmacenista.php">Agregar Almacenista</a></button>
            
        
    </div>
    
</body>

</html>
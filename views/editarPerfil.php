<?php
    session_start();
    error_reporting(0);
    $usuario = $_GET['usuario'];
    $idu = $_GET['idu'];
    $idc=$_GET['idc'];
    $idt = $_GET['idt'];
    ?>
    <?php
    if($varsesion == null || $varsesion == ''){
        echo'<script type="text/javascript">
            alert("Sesion cerrada.");
            window.location.href = "Index.php";
            </script>';
            
    }
    $control=$_GET['control'];
    $id=$idu;
   if($control!=1){    
        header('Location:http://25.68.231.36/distribuidos/Bird_punk/views/Backend/infoUsuario.php?id='.$id); 
    }
    $datos=unserialize($_GET['datos']);
    
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

<body>
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
                <a href="Index.php <?php "?usuario=$usuario&idu=$idu&idc=$idc&idt=$idt"?> ><img src="imagenes/logo.PNG" width="60%" style="margin-left:150px;"></a>
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


    <div>
        <div class="padre">
            <div align="center"><img src="Imagenes/pp_user.png" width="100px" height="100px" alt="profile picture"></div>
            <br>
            <div class="contenedorEdi">
            <?php
            foreach($datos as $row)
            {
            ?>
                <div class="izq">
                    <p><b>Nombre:</b> <?php echo $row['nombre']." ".$row['paterno']." ".$row['materno'];?></p>
                    <p><b>Correo:</b> <?php echo $row['correo'];?></p>
                    <p><b>Calle:</b> <?php echo $row['calle'];?></p>
                    <p><b>Numero exterior:</b> <?php echo $row['exterior'];?></p>
                    <p><b>CP:</b> <?php echo $row['cp'];?></p>
                </div>
            <?php
            }
            ?>
                <div class="der">
                    <img src="Imagenes/punk_bird.png" width="100px" height="100px" alt="bird_punk_logo">
                    <div class="buttonEd"><button type="button" class="btn btn-light"><a href="modificarInfo.php?id=<?php echo $id;?>&control=0s">EDITAR</a></button></div>
                </div> 
            </div>
        </div> 
    </div>  
</body>
  

</html>

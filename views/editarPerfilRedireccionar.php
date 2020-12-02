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
    ?>
    <?php
    if($varsesion == null || $varsesion == ''){
        echo'<script type="text/javascript">
            alert("Sesion cerrada.");
            window.location.href = "Index.php";
            </script>';
    }
    ?>

    <?php
    if($_SESSION['IDtipousuario'] == '1'){
            header("Location: http://localhost/Bird_punk/views/index.php?usuario=$usuario&idu=$idc&idc=$idc&idt=$idt");
    }
    if($_SESSION['IDtipousuario'] == '2'){
        echo'<script type="text/javascript">
            window.location.href = "IndexAlmacenista.php";
            </script>';
    }
    if($_SESSION['IDtipousuario'] == '3'){
        echo'<script type="text/javascript">
            window.location.href = "IndexAdministrador.php";
            </script>';
    }


?>
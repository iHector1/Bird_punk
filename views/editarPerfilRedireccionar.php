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
    if($idt == '1'){
            header("Location: http://localhost/Bird_punk/views/index.php?usuario=$usuario&idu=$idu&idc=$idc&idt=$idt");
    }
    if($idt == '2'){
            header("Location: http://localhost/Bird_punk/views/indexAlmacenista.php?idu=$idu&idt=$idt");
    }
    if($idt == '3'){
            header("Location: http://localhost/Bird_punk/views/indexAdministrador.php?idu=$idu&idt=$idt");
    }


?>
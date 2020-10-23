<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];
$varsesion2 = $_SESSION['IDusuario'];
$varsesion4 = $_SESSION['IDtipousuario'];
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
    echo'<script type="text/javascript">
        window.location.href = "Index.php";
        </script>';
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
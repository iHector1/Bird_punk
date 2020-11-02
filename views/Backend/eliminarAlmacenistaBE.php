<?php
    include '../conexion.php';
    $id = $_POST['idalmacenista'];

    $sql = "DELETE FROM usuario WHERE ID_Usuario= '".$id."'";

    $queryDelete=sqlsrv_query($conn,$sql);
    echo '<script type="text/javascript">
                  window.location = " http://localhost/Bird_punk/views/agregarAlmacenista.php"
                  </script>';
                  
?>
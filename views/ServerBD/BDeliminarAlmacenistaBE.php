<?php
    include '../conexion.php';
    $id = $_GET['idalmacenista'];

    $sql = "DELETE FROM usuario WHERE ID_Usuario= '".$id."'";

    $queryDelete=sqlsrv_query($conn,$sql);
    /*echo '<script type="text/javascript">
                  window.location = " http://localhost/Bird_punk/views/agregarAlmacenista.php"
                  </script>';*/

    header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/BackendP/BEPeliminarAlmacenistaBE.php?&control=1");
                  
?>
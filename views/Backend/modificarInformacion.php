<?php
    
    $idUsuario = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apePaterno = $_POST['apePaterno'];
    $apeMaterno = $_POST['apeMaterno'];
    $contraseña = $_POST['contraseña'];
    $calle = $_POST['calle'];
    $noexterior = $_POST['noexterior'];
    $nointerior = $_POST['nointerior'];
    $colonia = $_POST['colonia'];
    $estado = $_POST['estado'];
    $cp = $_POST['cp'];

    $control = $_GET['control'];
    $idu = $_GET['idu'];

    if($control != 1)
    {
        ?>
            <form id="myForm" action="http://25.90.201.164/distribuidos/Bird_punk/views/BackendP/BEPmodificarInformacion.php" method="post">
                <input type="hidden" name="id" value="<?php echo $idUsuario;?>" />
                <input type="hidden" name="nombre" value="<?php echo $nombre;?>" />
                <input type="hidden" name="apePaterno" value="<?php echo $apePaterno;?>" />
                <input type="hidden" name="apeMaterno" value="<?php echo $apeMaterno;?>" />
                <input type="hidden" name="contraseña" value="<?php echo $contraseña;?>" />
                <input type="hidden" name="calle" value="<?php echo $calle;?>" />
                <input type="hidden" name="noexterior" value="<?php echo $noexterior;?>" />
                <input type="hidden" name="nointerior" value="<?php echo $nointerior;?>" />
                <input type="hidden" name="colonia" value="<?php echo $colonia;?>" />
                <input type="hidden" name="estado" value="<?php echo $estado;?>" />
                <input type="hidden" name="cp" value="<?php echo $cp;?>" />
            </form>

            <script type="text/javascript">
                document.getElementById("myForm").submit();
            </script> 
        <?php

    }else
    {
        header("Location: http://localhost/Bird_punk/views/editarPerfil.php?id=".$idu."&control=0");
    }

?>
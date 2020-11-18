<?php
    include '../conexion.php';
    $IDusuario = $_GET['idu'];
    $control = $_GET['control'];
    $arreglo = unserialize($_POST['arreglo']);
    $arreglo1 = unserialize($_POST['arreglo1']);
    $arreglo2 = unserialize($_POST['arreglo2']);


    if($control != 1)
    {
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/BackendP/BEPProductoBoys.php?idu=".$IDusuario);
    }else
    {
        ?>
        <form id="myForm" action="http://localhost/Bird_punk/views/Historial.php?control=1&idu=<?php echo $IDusuario;?>" method="post">
            <input type="hidden" name="arreglo" value="<?php echo htmlentities(serialize($arreglo));?>" />
            <input type="hidden" name="arreglo1" value="<?php echo htmlentities(serialize($arreglo1));?>" />
            <input type="hidden" name="arreglo2" value="<?php echo htmlentities(serialize($arreglo2));?>" />
        </form>
    
        <script type="text/javascript">
            document.getElementById("myForm").submit();
        </script> 
        <?php
    }


?>
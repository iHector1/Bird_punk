<?php
    $nombre = $_POST['name'];
    $appaterno = $_POST['lastName1'];
    $apmaterno = $_POST['lastName2'];
    $correo = $_POST['email'];
    $contra = $_POST['password'];
    $calle = $_POST['address'];
    $exterior = $_POST['numberExt'];
    $interior = $_POST['numberInt'];
    $colonia = $_POST['suburb'];
    $postal = $_POST['cp'];
    $estado = $_POST['state'];

    $control = $_GET['control'];
    $error = $_GET['error'];

    if($control != 1)
    {
        ?>
            <form id="myForm" action="http://25.61.144.153/distribuidos/Bird_punk/views/BackendP/BEPRegistrar_Insert.php" method="post">
                <input type="hidden" name="name" value="<?php echo $nombre;?>" />
                <input type="hidden" name="lastName1" value="<?php echo $appaterno;?>" />
                <input type="hidden" name="lastName2" value="<?php echo $apmaterno;?>" />
                <input type="hidden" name="email" value="<?php echo $correo;?>" />
                <input type="hidden" name="password" value="<?php echo $contra;?>" />
                <input type="hidden" name="address" value="<?php echo $calle;?>" />
                <input type="hidden" name="numberExt" value="<?php echo $exterior;?>" />
                <input type="hidden" name="numberInt" value="<?php echo $interior;?>" />
                <input type="hidden" name="suburb" value="<?php echo $colonia;?>" />
                <input type="hidden" name="cp" value="<?php echo $postal;?>" />
                <input type="hidden" name="state" value="<?php echo $estado;?>" />
            </form>

            <script type="text/javascript">
                document.getElementById("myForm").submit();
            </script> 
        <?php
    }else
    {
        if($error == 1)
        {
            echo'<script type="text/javascript">
            alert("Correo no valido, error en la insercion.");
            </script>';
            header("Location: http://localhost/Bird_punk/views/Registro.php"); 
        }
        else if($error == 0)
        {
            echo'<script type="text/javascript">
            alert("Usuario registrado correctamente.");
            </script>';
            header("Location: http://localhost/Bird_punk/views/Index.php"); 
        }
        else if($error == 2)
        {
            echo'<script type="text/javascript">
            alert("Error en la insercion del usuario.");
            </script>';
            header("Location: http://localhost/Bird_punk/views/Registro.php"); 
        }  
    }
?>
    

 <?php 
 $nombre = $_GET['name'];
 $appaterno = $_GET['lastName1'];
 $apmaterno = $_GET['lastName2'];
 $correo = $_GET['email'];
 $contra = $_GET['password']; 
 
 $calle = $_GET['address'];
 $exterior = $_GET['numberExt'];
 $interior = $_GET['numberInt'];
 $colonia = $_GET['suburb'];
 $postal = $_GET['cp'];
 $estado = $_GET['state'];
 $control = $_GET['control'];
 
 if($control != 1)
{
    header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/ServerBD/BDRegistrar_Insert_Almacenistas.php?name=".$nombre."&lastName1=".$appaterno."&lastName2=".$apmaterno."&email=".$correo."&password=".$contra."&address=".$calle."&numberExt=".$exterior."&numberInt=".$interior."&suburb=".$colonia."&cp=".$postal."&state=".$estado);
}else
{
    header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/Backend/Registrar_Insert_Almacenistas.php?control=1");
}
 
 ?>
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


if($control != 1)
{
    header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/agregarAlmacenista.php");
}else
{
    header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/BackendP/BEPRegistrar_Insert_Alamcenistas.php?name=".$nombre."&lastName1=".$appaterno."&lastName2=".$apmaterno."&email=".$correo."&password=".$contra."&address=".$calle."&numberExt=".$exterior."&numberInt=".$interior."&suburb=".$colonia."&cp=".$postal."&state=".$estado);
}


?>
<?php

$nombre = $_POST['name'];
$appaterno = $_POST['lastName1'];
$apmaterno = $_POST['lastName2'];
$correo = $_POST['email'];
$contra = $_POST['password']; 

$control = $_GET['control'];


if($control != 1)
{
    
    header("Location: http://25.90.201.164/distribuidos/Bird_punk/views/BackendP/BEPRegistrar_Insert_Almacenistas.php?name=".$nombre."&lastName1=".$appaterno."&lastName2=".$apmaterno."&email=".$correo."&password=".$contra);
}else
{
    header("Location: http://25.90.201.164/distribuidos/Bird_punk/views/agregarAlmacenista.php");
}
?>
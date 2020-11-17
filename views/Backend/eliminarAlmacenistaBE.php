<?php
   $id = $_POST['idalmacenista'];
   $control = $_GET['control'];
   
   if($control != 1)
   {
       header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/BackendP/BEPeliminarAlmacenistaBE.php?idalmacenista=".$id);
   }else
   {
       header("Location: http://localhost/Bird_punk/views/agregarAlmacenista.php");
   }     
?>
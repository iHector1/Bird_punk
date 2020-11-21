<?php
    
    $nombremodelo = $_POST['nombre'];
    $id_marca = $_POST['marca'];
    $id_talla = $_POST['talla'];
    $genero = $_POST['genero'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $control=$_GET['control'];
    if($control!=1){
        header("Location: http://25.90.201.164/distribuidos/Bird_punk/views/BackendP/BEPagregarArticulo.php?marca=".$id_marca."&talla=".$id_talla."&genero=".$genero."&precio=".$precio."&nombre=".$nombremodelo."&stock=".$stock."&control=3");
    }else{
        header("Location:http://localhost/Bird_punk/views/AnadirProducto.php");
    }
?>
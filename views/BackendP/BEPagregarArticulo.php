<?php 
    $nombremodelo = $_GET['nombre'];
    $id_marca = $_GET['marca'];
    $id_talla = $_GET['talla'];
    $genero = $_GET['genero'];
    $precio = $_GET['precio'];
    $stock = $_GET['stock'];
    $control=$_GET['control'];
    if($control!=1){
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/ServerBD/BDagregarArticulo.php?marca=".$id_marca."&talla=".$id_talla."&genero=".$genero."&precio=".$precio."&nombre=".$nombremodelo."&stock=".$stock);
    }else{
        header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/Backend/agregarArticulo.php?&control=1");
    }

?>
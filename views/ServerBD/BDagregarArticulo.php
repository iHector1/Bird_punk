<?php
    
    include '../conexion.php';
    $nombremodelo = $_GET['nombre'];
    $id_marca = $_GET['marca'];
    $id_talla = $_GET['talla'];
    $genero = $_GET['genero'];
    $precio = $_GET['precio'];
    $stock = $_GET['stock'];
    //$imagen = $_GET['imagen'];

    $param = array($nombremodelo);
    $id = sqlsrv_query($conn, "INSERT INTO modelo (Modelo) VALUES (?)", $param);
    sqlsrv_free_stmt($id); 

    $sql = "SELECT * FROM modelo WHERE Modelo = '".$nombremodelo."'"; 
    $buscarID = sqlsrv_query($conn,$sql);

    while( $row = sqlsrv_fetch_array($buscarID, SQLSRV_FETCH_NUMERIC)) {
        $ID_Modelo = (int)"$row[0]";
    }
    echo $ID_Modelo;

    $nombreIMG = $nombremodelo . "" . $ID_Modelo;

    $nombreIMGInsert = $nombremodelo . "" . $ID_Modelo. ".jpg";

    $param2 = array($ID_Modelo, $id_marca, $id_talla, $genero, $precio, $stock,$nombreIMGInsert);
    $agregar = sqlsrv_query($conn, "INSERT INTO articulo (ID_Modelo, ID_Marca, ID_Talla, Genero, Precio, Stock, Imagen) VALUES (?,?,?,?,?,?,?)", $param2);

    if($agregar)
        echo "Artículo agregado correctamente. <br>";
    else
        echo "Error, no se pudo agregar el artículo. <br>";

    $file = addslashes($_FILES['browse']['tmp_name']);
    $filename = addslashes($_FILES['browse']['name']);
    $file = file_get_contents($file);
    $file = base64_encode($file);
    move_uploaded_file($_FILES['browse']['tmp_name'], '../Imagenes/'.$nombreIMG.'.jpg');
    echo '<script type="text/javascript">
                alert("Articulo añadido correctamente.")
                window.location = " http://localhost/Bird_punk/views/AnadirProducto.php"
                </script>';

    sqlsrv_close($conn);
    header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/BackendP/BEPagregarArticulo.php?&control=1");
?>
<?php

include ("../conexion.php");

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

$ValdiarCorreo = "/^(([^<>()\[\]\\.,;:\s@”]+(\.[^<>()\[\]\\.,;:\s@”]+)*)|(“.+”))@((\[[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}])|(([a-zA-Z\-0–9]+\.)+[a-zA-Z]{2,}))$/";

if(preg_match($ValdiarCorreo, $correo) == false){
    echo'<script type="text/javascript">
        alert("Verifique su correo electronico");
        window.location.href = "RegistroAlmacenista.php";
        </script>';
        sqlsrv_close($conn);
}


$params = array($nombre, $appaterno, $apmaterno, $correo, $contra);

$stmt = sqlsrv_query($conn, "INSERT INTO usuario (Nombre_s, Apellido_Paterno, Apellido_materno, Correo, Contrasena, ID_Tipo_Usuario) VALUES (?, ?, ?, ?, ?, '2')", $params);
sqlsrv_free_stmt($stmt);



 $sql = "SELECT ID_Usuario FROM usuario WHERE Nombre_s = '$nombre' and Apellido_Paterno = '$appaterno' and Apellido_Materno = '$apmaterno' and Correo = '$correo' and Contrasena = '$contra'";
 $stmt2 = sqlsrv_query( $conn, $sql );
 
 if( $stmt2 === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt2, SQLSRV_FETCH_NUMERIC) ) {
    
    //echo "$row[0]";
    $idd = (int)"$row[0]";
}

sqlsrv_free_stmt( $stmt2);


echo "$idd";


$params3 = array($idd, $calle, $exterior, $interior, $colonia,$postal, $estado);

$stmt3 = sqlsrv_query($conn, "INSERT INTO info_cliente (ID_Usuario, Calle, NoExterior, NoInterior, Colonia, CP, Estado) VALUES (?, ?, ?, ?, ?, ?, ?)", $params3);

sqlsrv_free_stmt($stmt3); 
sqlsrv_close($conn);  

if ($stmt && $stmt3){
    echo'<script type="text/javascript">
        alert("Almacenista registrado correctamente.");
        window.location.href = " http://localhost/Bird_punk/views/agregarAlmacenista.php";
        </script>';
}else{
    echo'<script type="text/javascript">
        alert("Error al insertar almacenista.");
        window.location.href = " http://localhost/Bird_punk/views/agregarAlmacenista.php";
        </script>';
}
header("Location: http://25.61.144.153/distribuidos/Bird_punk/views/BackendP/BEPRegistrar_Insert_Alamcenistas.php?control=1");
?>
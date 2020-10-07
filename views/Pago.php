<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago</title>
    

    <link rel="stylesheet" href="Styles/stylesPago.css" />
</head>
<body>
    <div>
        <h1>Finalizar la compra</h1>
    </div>

    <div class="contenedor1">
        <div class="Parte1">
            <h2>IDENTIFICACIÓN</h2>
            <hr color=#1C2331 size=1 width= 100%>
            <!-- IMPRESIÓN DEL NOMBRE E EMAIL DEL USUARIO
            <output class="prueba" id="name" for="datos usuario" placeholder="Nombre del usuario"></output>
            <output class="prueba" id="email" for="datos usuario"></output> -->
            <input type="text" class="InfoUsuario" id="name" name="name" placeholder="Nombre del usuario" disabled>
            <input type="email" id="user" class="InfoUsuario" name="email" placeholder="Correo electrónico" disabled>
        </div>

        <div class="Parte2">
            <h2>DIRECCIÓN DE ENVÍO</h2>
            <hr color=#1C2331 size=1 width= 100%>
            <!-- IMPRESIÓN DE LA CALLE, NÚMERO, COLONIA Y C.P.
            <output class="prueba" id="address" for="direccion"></output>
            <output class="prueba" id="number" for="direccion"></output>
            <output class="prueba" id="suburb" for="direccion"></output>
            <output class="prueba" id="cp" for="direccion"></output>-->
            <input type="text" class="InfoUsuario" id="address" name="address" placeholder="Calle" disabled>
            <input type="number" id="number" class="InfoUsuario" name="number" placeholder="Número" disabled>
            <input type="text" class="InfoUsuario" id="colonia" name="colonia" placeholder="Colonia" disabled>
            <input type="number" id="cp" class="InfoUsuario" name="cp" placeholder="C.P." disabled>
            <a href="EditarDomicilio.html" target="_blank">Editar</a>
        </div>
        
    </div>

    <div class="contenedor2">
        <h2>PAGO</h2>
        <hr color=#1C2331 size=1 width= 100%>
        <h3>BearPay</h3>

        <form method="POST" action="./Index.php">
        <input type="email" id="user" class="fadeIn second" name="email" placeholder="Correo electrónico" required>
        <input type="password" id="password" class="fadeIn second" name="password" placeholder="Contraseña" required>
        <input type="submit" class="btt" value="COMPRAR AHORA">
    </form>
    </div>
    
    <div class="contenedor3">
        <h4>RESUMEN DE LA COMPRA</h4>
        <div class="img">
            <img class="imagen" src="tenis.jpg" alt="tenis">
        </div>

        <div class="Info">
        <p>Nombre del artículo: </p>
        <p>Cantidad:</p>
        <p>Precio: $</p>
        </div>

        <a class="Resumen" href="carrito.php" target="_blank">Volver al carrito</a>
        <p>SUBTOTAL: </p>
        <p>COSTO DE ENVÍO: </p>
        <p>TOTAL: </p>
    </div>

    
</body>
</html>
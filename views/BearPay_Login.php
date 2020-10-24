<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BearPay</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="Styles/BearPay.css" />
</head>
<body>
<div class="wrapper fadeInDown">
    


<div id="formContent" class="mt-5">
        <!-- Tabs Titles -->
        <div class="Login">
            <h2 >BEAR PAY </h2>
            <img src="Imagenes/BearPay.png" alt="" class="rounded  ml-3">
        </div>


        <!-- Login Form -->
        <form method="POST" action="Backend/loginBearPay.php">
            <input type="text" id="user" class="fadeIn second" name="user" placeholder="Usuario" required>
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="Contraseña" required>
            <input type="submit" class="fadeIn fourth" value="Iniciar Sesión">
        </form>


    </div>
    </div>
</div> 
</body>
</html>


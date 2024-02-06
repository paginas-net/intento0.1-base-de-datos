<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form method="post">
    <h2>Hola</h2>
    <p>Inicia tu registro.</p>

    <div class="input-wrapper">
    <input type="text" name="name" placeholder="Nombre">
        <img class="input-icon" src="images/name.svg" alt="">
    
    </div>

    <div class="input-wrapper">
    <input type="text" name="email" placeholder="Correo electrónico"> 
        <img class="input-icon" src="images/email.svg" alt="">
    
    </div>

    <div class="input-wrapper">
    <input type="text" name="direction" placeholder="Dirección">
        <img class="input-icon" src="images/direction.svg" alt="">
    
    </div>

    <div class="input-wrapper">
        <input type="text" name="phone" placeholder="Teléfono"> 
        <img class="input-icon" src="images/phone.svg" alt="">
    
    </div>

    <div class="input-wrapper">
        <input type="password" name="password" placeholder="contraseña"> 
    
    </div>

    <input class="btn" type="submit" name="register" value="enviar">


</form>

<?php


 include("registrar.php");
?>

</body>
</html>

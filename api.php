<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto integrador. Aplicación Web con JavaScript</title>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="box.css">
    
</head>
<img src="img/logo.png" alt="logo" height="28%" width="12%">


<body>

<?php

$error;
   if (!empty($_POST['user']) && !empty($_POST['contra'])) {
       $user=$_POST['user'];
       $contra=$_POST['contra'];
       if ($user == "udgv@gmail.com" && $contra == "admin") {
           echo"<script>alert('Acceso completado.');</script>";
       }else{
           $error = "incorrecto";
           header("Location: index.php?error=$error");
       }
   }else{
    $error = "vacio";
    header("Location: index.php?error=$error");
   }

?>

    <div class="contenedor-texto">
        <h2 class="enlace">Realiza tus registros de <span class="typed"></span></h2>
   </div>
   
    <main>
        <img src="img/logo.png" alt="logo" id="logocentro" height="35%" width="19%">
        <h1>Check List <font id="palabra">UDG</font> <font id="palabra1">Virtual</font></h1>
        <div id="lists">
        </div>
        <div id="add-container">
            <form action="" id="formitnew">
                <input type="text" id="itnew" autocomplete="off" placeholder="Crear nueva tarea...">
                <select name="" id="slist"></select>
            </form>
        </div>
        <div id="todos">
        </div>
    </main>

    <div class="texto">
<h2>Registra tus actividades en el  Check List, así podrás llevar un control en ellas y será más fácil el realizarlas.</h2>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
    <script src="app.js"></script>
    <script src="text.js"></script>
    <script>
    </script>
</body>
</html>
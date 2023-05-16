<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Login</title>
</head>

<?php
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        if ($error == "incorrecto") {
             echo '<script language="javascript">alert("Usuario o contraseña no validos");</script>'; 
        }
        if ($error == "vacio") {
           echo '<script language="javascript">alert("Llenar todos los campos requeridos");</script>'; 
        }
    }
?>
<body>

<div class="container">
    <h2 class="titulo-form">Iniciar sesión</h2>
    <form class="formulario" action="api.php" method="post">
        <label for="user">Usuario</label>
        <input type="mail" name="user">
        <label for="contra">Contraseña</label>
        <input type="password" name="contra" id="">
        <input type="submit" value="Iniciar sesión">
    </form>

</div>
</body>
</html>
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
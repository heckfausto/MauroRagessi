<?php
    $destino = "fausto.heck@gmail.com";
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];
    $consulta = "Nombre: " . $nombre . "\Telefono: " . $telefono . "\Correo: " . $correo . "\Mensaje: " . $mensaje;
    mail($destino, "Consulta", $consulta);
    header("Location:../index.html");
 ?>

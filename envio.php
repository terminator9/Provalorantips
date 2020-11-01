<?php
    $destino = "timburtonsonw@gmail.com";
    $nombre = $_Post["Nombre"];
    $correo = $_Post["Correo"];
    $Telefono = $_Post["Telefono"];
    $mensaje = $_Post["mensaje"];
    $contenido= "Nombre: " . $nombre . "\nCorreo: " . "\mTelefono: " .   $Telefono . "\mensaje: " . $mensaje;
    mail($destino,"FORMULARIO",$contenido);
    header(Location:PUZZLE.HTML);

?> 
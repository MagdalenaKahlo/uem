<?php

$mysqli = new mysqli("localhost:3307", "root", "usbw", "cosmos");

/* comprobar la conexión */
if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}



?>
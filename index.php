<?php

// CONTROLADOR SIMPLE
if ($_POST) {
    $nombre = $_POST['nombre'] ?? '';
    $mensaje = $_POST['mensaje'] ?? '';

    echo "<p>Mensaje recibido de $nombre</p>";
}

// CARGAR VISTA
require 'app/views/home.php';

?>

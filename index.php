<?php

$mensajeConfirmacion = "";

// PROCESAR FORMULARIO
if ($_POST) {
    if (isset($_POST['nombre']) && isset($_POST['mensaje'])) {
        $nombre = $_POST['nombre'];
        $mensaje = $_POST['mensaje'];

        $mensajeConfirmacion = "Mensaje recibido de $nombre";
    }
}

// CARGAR VISTA
require 'app/views/home.php';

?>

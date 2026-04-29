<?php
require_once 'app/models/Usuario.php';

class UsuarioController {

    public function guardar() {
        $usuario = new Usuario();
        $usuario->nombre = $_POST['usuario'];
        $usuario->correo = $_POST['correo'];

        return $usuario->guardar();
    }
}

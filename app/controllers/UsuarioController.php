<?php
require_once __DIR__ . '/../models/Usuario.php';

class UsuarioController {

    public function mostrarRegistro() {
        require __DIR__ . '/../views/usuario/registro.php';
    }

    public function registrar() {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $usuario = new Usuario($nombre, $email, $password);
        $usuario->guardar();

        header('Location: /?mensaje=Registro exitoso');
        exit();
    }

    public function mostrarLogin() {
        require __DIR__ . '/../views/usuario/login.php';
    }
}
?>

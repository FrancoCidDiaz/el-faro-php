<?php
require_once __DIR__ . '/../../config/database.php';

class Usuario {
    private $nombre;
    private $email;
    private $password;

    public function __construct($nombre, $email, $password) {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_BCRYPT);
    }

    public function guardar() {
        $db = Database::connect();
        $stmt = $db->prepare("INSERT INTO usuarios (nombre, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $this->nombre, $this->email, $this->password);
        $stmt->execute();
    }
}
?>

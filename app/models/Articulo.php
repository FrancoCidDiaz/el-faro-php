<?php
require_once __DIR__ . '/../../config/database.php';

class Articulo {

    public function listarTodos() {
        $db = Database::connect();
        $result = $db->query("SELECT * FROM articulos");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function buscarPorId($id) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM articulos WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}
?>

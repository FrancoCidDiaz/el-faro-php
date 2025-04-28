<?php
class Database {
    public static function connect() {
        $db = new mysqli('localhost', 'root', '1234', 'elfaro');
        if ($db->connect_error) {
            die("Conexión fallida: " . $db->connect_error);
        }
        return $db;
    }
}
?>

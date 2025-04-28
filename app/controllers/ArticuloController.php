<?php
require_once __DIR__ . '/../models/Articulo.php';

class ArticuloController {

    public function listar() {
        $articulo = new Articulo();
        $articulos = $articulo->listarTodos();
        require __DIR__ . '/../views/articulo/listado.php';
    }

    public function detalle($id) {
        $articulo = new Articulo();
        $detalle = $articulo->buscarPorId($id);
        require __DIR__ . '/../views/articulo/detalle.php';
    }
}
?>

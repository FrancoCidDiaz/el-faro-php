<?php
$request = $_SERVER['REQUEST_URI'];

if (strpos($request, '?') !== false) {
    $request = strstr($request, '?', true);
}

switch ($request) {
    case '/':
        require __DIR__ . '/../app/controllers/ArticuloController.php';
        (new ArticuloController())->listar();
        break;

    case '/usuario/registro':
        require __DIR__ . '/../app/controllers/UsuarioController.php';
        (new UsuarioController())->mostrarRegistro();
        break;

    case '/usuario/registrar':
        require __DIR__ . '/../app/controllers/UsuarioController.php';
        (new UsuarioController())->registrar();
        break;

    case '/usuario/login':
        require __DIR__ . '/../app/controllers/UsuarioController.php';
        (new UsuarioController())->mostrarLogin();
        break;

    case (preg_match('#^/articulo/detalle$#', $request) ? true : false):
        require __DIR__ . '/../app/controllers/ArticuloController.php';
        $id = $_GET['id'];
        (new ArticuloController())->detalle($id);
        break;

    default:
        http_response_code(404);
        echo "Página no encontrada.";
        break;
}
?>

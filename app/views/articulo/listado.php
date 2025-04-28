<?php include __DIR__ . '/../partials/header.php'; ?>

<div class="container mt-5">
    <h2>Listado de Artículos</h2>
    <div class="row">
        <?php foreach($articulos as $articulo): ?>
            <div class="col-md-4 mt-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($articulo['titulo']) ?></h5>
                        <p class="card-text"><?= substr(htmlspecialchars($articulo['contenido']), 0, 100) ?>...</p>
                        <a href="/articulo/detalle?id=<?= $articulo['id'] ?>" class="btn btn-primary">Leer más</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include __DIR__ . '/../partials/footer.php'; ?>

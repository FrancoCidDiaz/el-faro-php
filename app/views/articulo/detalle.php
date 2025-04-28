<?php include __DIR__ . '/../partials/header.php'; ?>

<div class="container mt-5">
    <h2><?= htmlspecialchars($detalle['titulo']) ?></h2>
    <p><?= nl2br(htmlspecialchars($detalle['contenido'])) ?></p>
    <a href="/" class="btn btn-secondary mt-3">Volver al listado</a>
</div>

<?php include __DIR__ . '/../partials/footer.php'; ?>

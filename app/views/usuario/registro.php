<?php include __DIR__ . '/../partials/header.php'; ?>

<div class="container mt-5">
    <h2>Registro de Usuario</h2>
    <form method="POST" action="/usuario/registrar">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" required>
        </div>

        <div class="form-group mt-3">
            <label for="email">Correo</label>
            <input type="email" class="form-control" name="email" required>
        </div>

        <div class="form-group mt-3">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" name="password" required>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Registrarse</button>
    </form>
</div>

<?php include __DIR__ . '/../partials/footer.php'; ?>

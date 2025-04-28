<?php include __DIR__ . '/../partials/header.php'; ?>

<div class="container mt-5">
    <h2>Login de Usuario</h2>
    <form method="POST" action="/usuario/login">
        <div class="form-group">
            <label for="email">Correo</label>
            <input type="email" class="form-control" name="email" required>
        </div>

        <div class="form-group mt-3">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" name="password" required>
        </div>

        <button type="submit" class="btn btn-success mt-4">Iniciar Sesión</button>
    </form>
</div>

<?php include __DIR__ . '/../partials/footer.php'; ?>

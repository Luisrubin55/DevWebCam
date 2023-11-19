<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo ?></h2>
    <p class="auth__texto">Regístrate en DevWebcamp </p>

    <?php 
        require_once __DIR__ . '/../templates/alertas.php'
    ?>

    <form action="/registro" method="POST" class="formulario">
        <div class="formulario__campo">
            <label for="nombre" for="formulario__label">Nombre: </label>
            <input type="text" class="formulario__input" placeholder="Tu Nombre" id="nombre" name="nombre" value="<?php echo $usuario->nombre ?>">
        </div>
        <div class="formulario__campo">
            <label for="apellido" for="formulario__label">Apellido: </label>
            <input type="text" class="formulario__input" placeholder="Tu Apellido" id="apellido" name="apellido" value="<?php echo $usuario->apellido ?>">
        </div>
        <div class="formulario__campo">
            <label for="email" for="formulario__label">Email: </label>
            <input type="email" class="formulario__input" placeholder="Tu Email de Registro" id="email" name="email" value="<?php echo $usuario->email ?>">
        </div>
        <div class="formulario__campo">
            <label for="password" for="formulario__label">Password: </label>
            <input type="password" class="formulario__input" placeholder="Tu Password" id="password" name="password">
        </div>
        <div class="formulario__campo">
            <label for="password2" for="formulario__label">Repetir Password: </label>
            <input type="password" class="formulario__input" placeholder="Repetir Password" id="password2" name="password2">
        </div>
        <input type="submit" class="formulario__submit" value="Crear Cuenta">
    </form>
    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes cuenta? Iniciar Sesión</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu Password?</a>
    </div>
</main>
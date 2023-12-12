<h2>Registro de usuario</h2>

<form action="index.php?controller=Usuario&action=save" method="post">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" required>
    
    <label for="apellidos">Apellidos</label>                    
    <input type="text" name="apellidos" required>

    <label for="email">Email</label>
    <input type="email" name="email" required>

    <label for="contraseña">Contraseña</label>
    <input type="password" name="contraseña" required>

    <input type="submit" value="Registrar">
</form>
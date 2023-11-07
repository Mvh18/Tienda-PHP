<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Camisas</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <!-- Cabecera -->
    <header id="header">
        <div id="logo">
            <img src="assets/img/camiseta.png" alt="Camiseta logo">
            <a href="index.php">
                Tienda de camisetas
            </a>
        </div>

    </header>
    <!-- Menú -->
    <nav id="menu">
        <ul>
            <li>
                <a href="#">Inicio</a>
            </li>
            <li>
                <a href="#">Categoría 1</a>
            </li>
            <li>
                <a href="#">Categoría 2</a>
            </li>
            <li>
                <a href="#">Categoría 3</a>
            </li>
        </ul>
    </nav>

    <div id="content">
        <!-- Barra laterl -->
        <aside id="lateral">
            <div id="login" class="block_aside">

                <form action="#" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password">
                    <input type="submit" value="Enviar">
                </form>

                <a href="#">Mis pedidos</a>
                <a href="#">Gestionar pedidos</a>
                <a href="#">Gestionar categorías</a>
            </div>
        </aside>

        <!-- Contenido Central -->
        <div id="central">
            <h1>Productos destacados</h1>
            <div class="product">
                <img src="assets/img/camiseta.png" alt="">
                <h2>Camiseta Azul Ancha</h2>
                <p>30 euros</p>
                <a href="#" class="button">Comprar</a>
            </div>
            <div class="product">
                <img src="assets/img/camiseta.png" alt="">
                <h2>Camiseta Azul Ancha</h2>
                <p>30 euros</p>
                <a href="#" class="button">Comprar</a>
            </div>
            <div class="product">
                <img src="assets/img/camiseta.png" alt="">
                <h2>Camiseta Azul Ancha</h2>
                <p>30 euros</p>
                <a href="#" class="button">Comprar</a>
            </div>
        </div>
        <!-- Pie de página -->
        <footer id="footer">
            <p>Desarrollado por Marlon Vásquez Web &copy; <?= date('Y') ?> </p>
        </footer>
    </div>
</body>

</html>
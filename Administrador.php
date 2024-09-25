<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="css/estilosAdmin.css">
</head>
<body>
    <header>
        <div class="container-header">
            <nav>
                <ul>
                    <li><a href="#compras">Pedidos</a></li>
                    <li><a href="#actualizar">Actualizar Datos</a></li>
                </ul>
            </nav>
            <div class="user-info">
                <img id="userPhoto" src="usuario.jpg" alt="Foto de usuario">
                <span id="userName"></span>
                <button id="logoutBtn">Cerrar Sesión</button>
            </div>
        </div>
    </header>

    <main>
        <section id="productos">
            <h2>Productos Solicitados</h2>
            <div class="cards-container" id="productsContainer">
                
            </div>
        </section>



    </main>

    <footer>
        <p>© 2024 The best Fashion. Todos los derechos reservados.</p>
    </footer>

    <script src="js/Admin.js"></script>
</body>
</html>

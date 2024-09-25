<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Best Fashion - Tienda de Ropa</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

    <!-- Encabezado -->
    <header>
        <div class="container-header">
            <h1>The Best Fashion</h1>
            <nav>
                <ul>
                    <li><a href="#nosotros">Nosotros</a></li>
                    <li><a href="#services">Servicios</a></li>
                    <li><a href="#contact">Contactos</a></li>
                </ul>
            </nav>
            <!-- Botones de login y registro -->
            <div class="auth-buttons">
                <button class="btn-login" id="loginBtn">Iniciar Sesión</button>
                <button class="btn-login" id="registerBtn">Registrarse</button>
            </div>
        </div>
    </header>

    <!-- Sección de imagen de fondo con título centrado -->
    <section id="hero">
        <div class="hero-text">
            <h2>The Best Fashion</h2>
        </div>
    </section>

    <!-- Sección de "Nosotros" -->
    <section id="nosotros">
        <h2>Nosotros</h2>
        <p>Somos una tienda de ropa moderna, linda, fashion y elegante que ofrece prendas únicas para mujeres que quieren destacar y sentirse su mejor versión. Nos especializamos en ofrecer productos de alta calidad, diseñados para brindar confort y estilo en cada ocasión para que destaques en donde quiera que vayas.</p>
        <p>En The Best Fashion, nuestra prioridad es hacer que cada cliente se sienta única y especial. Te ofrecemos las últimas tendencias y prendas cuidadosamente seleccionadas, así como asesorías personalizadas para que puedas saber cuál es el estilo que más se adpta a ti.</p>
    </section>

    <!-- Sección de "Servicios y Productos" -->
    <section id="services">
        <h2>Servicios y Productos</h2>
        <div class="cards-container">
           
            <div class="card">
                <img src="img/Vestido1.jpg" alt="Vestidos">
                <h3>Vestidos modernos</h3>
                <p>Vestidos elegantes, lindos y modernos para cualquier ocasión, escoge el que más se ajuste a lo que necesitas.</p>
            </div>
            <div class="card">
                <img src="img/Estilo.jpg" alt="Asesorías">
                <h3>Asesorías y diseños únicos</h3>
                <p>Solicita asesoría para ver cuál estilo te favorece, las asesorías son completamente personalizadas.</p>
            </div>
            <div class="card">
                <img src="img/zapatos.jpg" alt="Zapatos">
                <h3>Zapatos de Moda</h3>
                <p>Los mejores calzados, para que selecciones el par que más te guste y con el que quieres caminar hacia el éxito.</p>
            </div>
        </div>
    </section>

    <!-- Sección de contacto -->
    <section id="contact">
        <h2>Contacto</h2>
        <p>Deja tus datos y nos pondremos en contacto contigo, anímate a encontrar tu estilo.</p>
        <form class="contact-form" action="#" method="post">
            <input type="text" name="name" placeholder="Tu Nombre">
            <input type="email" name="email" placeholder="Tu Correo Electrónico">
            <textarea name="message" placeholder="Tu Mensaje"></textarea>
            <button type="submit">Enviar</button>
        </form>
    </section>

    <!-- Sección del footer -->
    <footer>
        <p>© 2024 The Best Fashion. Todos los derechos reservados.</p>
        <p>Síguenos en nuestras redes sociales:</p>
        <div class="social-media">
            <a href="#">Facebook</a>
            <a href="#">Instagram</a>
            <a href="#">Twitter</a>
        </div>
    </footer>

    <!-- Modal de inicio de sesión -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Iniciar Sesión</h2>
            <form action="#" method="post">
                <input type="text" name="username" placeholder="Usuario" required><!-- Correo -->
                <input type="password" name="password" placeholder="Contraseña" required>
                <button type="submit">Ingresar</button>
            </form>
        </div>
    </div>

    <!-- Modal de registro -->
    <div id="registroModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Registrarse</h2>
            <form id="registerForm">
                <input type="text" id="firstName" placeholder="Nombres" required>
                <input type="text" id="lastName" placeholder="Apellidos" required>
                <input type="email" id="email" placeholder="Correo" required>
                <input type="password" id="password" placeholder="Contraseña" required>
                <button type="submit">Registrarse</button>
            </form>
        </div>
    </div>

    <!-- Archivo JavaScript -->
    <script src="js/script.js"></script>
</body>
</html>

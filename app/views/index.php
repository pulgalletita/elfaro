<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>El Faro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>El Faro</h1>
    <img src="https://via.placeholder.com/100" alt="Logo El Faro">

    <!-- RELOJ -->
    <div id="fechaHora"></div>
</header>

<nav>
    <ul>
        <li><a href="#inicio">Inicio</a></li>
        <li><a href="#deporte">Deporte</a></li>
        <li><a href="#negocios">Negocios</a></li>
    </ul>
</nav>

<section id="inicio">
    <h2>Noticias Generales</h2>

    <!-- CONTADOR -->
    <p>Total artículos: <span id="contador">0</span></p>

    <!-- FORMULARIO -->
    <h3>Agregar artículo</h3>
    <input type="text" id="titulo" placeholder="Título">
    <input type="text" id="descripcion" placeholder="Descripción">
    <button onclick="agregarArticulo()">Agregar</button>

    <!-- LISTA DINÁMICA -->
    <div id="listaArticulos"></div>

    <h3>Video</h3>
    <video width="400" controls>
        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
    </video>

    <h3>Audio</h3>
    <audio controls>
        <source src="https://www.w3schools.com/html/horse.mp3" type="audio/mpeg">
    </audio>
</section>

<section id="deporte">
    <h2>Deportes</h2>
    <p>Contenido deportivo del sitio.</p>
</section>

<section id="negocios">
    <h2>Negocios</h2>
    <p>Contenido de negocios del sitio.</p>
</section>

<!-- FORMULARIO CONTACTO -->
<section>
    <h2>Contacto</h2>
    <input type="text" id="nombre" placeholder="Nombre">
    <textarea id="mensaje" placeholder="Mensaje"></textarea>
    <button onclick="enviarMensaje()">Enviar</button>
</section>

<footer>
    <p>© 2026 El Faro</p>
</footer>

<!-- JS EXTERNO -->
<script src="script.js"></script>

</body>
</html>

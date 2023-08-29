<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biblioteca Online - Bienvenido</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }
        header {
            background-color: #2c3e50;
            color: #ffffff;
            text-align: center;
            padding: 1rem;
        }
        nav ul {
            background-color: #2c3e50;
            margin: 0;
            padding: 0;
            list-style: none;
            overflow: hidden;
            text-align: center;
        }
        nav ul li {
            display: inline-block;
            margin-right: 20px;
        }
        nav ul li:last-child {
            margin-right: 0;
        }
        nav ul li a {
            color: #ffffff;
            text-decoration: none;
        }
        nav ul li a:hover {
            color: #e74c3c;
        }
        main {
            padding: 2rem;
        }
        section {
            margin-bottom: 2rem;
        }
        footer {
            text-align: center;
            padding: 1rem 0;
            background-color: #2c3e50;
            color: #ffffff;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #e74c3c;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #c0392b;
        }
        /* Agrega más estilos aquí si es necesario... */
    </style>
</head>
<body>
    <header>
        <h1>Biblioteca Online</h1>
        <p>Bienvenido a nuestra plataforma para guardar libros y autores.</p>
    </header>
    <nav>
        <ul>
            <li><a href="#">Inicio</a></li>
            @if (Route::has('login'))
            
            @auth
               <li> <a href="{{ url('/home') }}" class="button">Home</a> </li>
            @else
               <li> <a href="{{ route('login') }}" class="button">Ingresar</a></li>
                @if (Route::has('register'))
                 <li>   <a href="{{ route('register') }}" class="button">Registrarse</a></li>
                @endif
            @endauth
    @endif
        </ul>
    </nav>
    <main>
        <section>
            <h2>Explorar</h2>
            <p>Descubre la amplia variedad de libros que los usuarios han compartido en nuestra plataforma.</p>
            <p>Los usuarios pueden subir sus propios libros, ya sean novelas, cuentos, ensayos o cualquier otro género literario. Explora y sumérgete en el mundo de las historias creativas y originales que nuestros usuarios comparten.</p>
        </section>
        <section>
            <h2>Autores</h2>
            <p>Conoce a los autores detrás de las obras.</p>
            <p>Cada libro en nuestra plataforma tiene su propio autor. Puedes explorar perfiles de autores, descubrir su biografía, su inspiración para escribir y su contribución al mundo literario.</p>
        </section>
    </main>
    <footer>
        <p>© 2023 Biblioteca Online. Todos los derechos reservados.</p>
        <!-- Agrega aquí información adicional de contacto o enlaces -->
    </footer>
</body>
</html>

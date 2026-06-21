<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ClearMind</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .gold { color: #D4AF37; }
        .bg-gold { background: #D4AF37; }
        .text-gold { color: #D4AF37; }
        .border-gold { border-color: #D4AF37; }
        body { background: #000000; color: #FFFFFF; }
    </style>

</head>

<body class="bg-black text-white font-sans">

<!-- HEADER -->
<header class="border-b border-gold bg-black">

    <div class="max-w-7xl mx-auto px-6 py-6 flex justify-between items-center">

        <h1 class="text-3xl font-bold tracking-wider">
            <span class="gold">Clear</span> Mind
        </h1>

        <nav class="space-x-8 text-sm font-semibold">

            <a href="{{ route('home') }}" class="gold hover:text-white transition duration-300">
                Inicio
            </a>

            <a href="{{ route('programa') }}" class="gold hover:text-white transition duration-300">
                Programa
            </a>

            <a href="{{ route('marketplace') }}" class="gold hover:text-white transition duration-300">
                Marketplace
            </a>

            <a href="{{ route('contact') }}" class="gold hover:text-white transition duration-300">
                Contacto
            </a>

            <a href="{{ route('comunidad') }}" class="gold hover:text-white transition duration-300">
                Comunidad
            </a>

        </nav>

    </div>

</header>


<!-- HERO / INTRODUCCION -->


<!-- CONTENIDO PRINCIPAL -->

<main class="max-w-6xl mx-auto px-6 py-20 bg-black">

    @yield('content')

</main>


<!-- SECCION SOBRE EL PROYECTO -->

<section class="bg-black border-t border-gold py-20">

    <div class="max-w-6xl mx-auto px-6">

        <h3 class="text-4xl font-bold mb-10 text-gold text-center">
            Objetivo del Programa
        </h3>

        <div class="grid md:grid-cols-2 gap-10">

            <div class="border border-gold p-8">
                <p class="text-gray-300 leading-relaxed">

                    Ofrecemos un entorno digital seguro que facilita el acompañamiento 
                    en procesos de recuperación personal. A través de contenido educativo, 
                    herramientas de seguimiento y una comunidad solidaria.

                </p>
            </div>

            <div class="border border-gold p-8">
                <p class="text-gray-300 leading-relaxed">

                    Promovemos empatía, respeto y superación personal, permitiendo 
                    que cada usuario encuentre apoyo y recursos adecuados para avanzar 
                    en su transformación.

                </p>
            </div>

        </div>

    </div>

</section>


<!-- SECCION MODELOS DEL SISTEMA -->

<section class="bg-black border-t border-gold py-20">

    <div class="max-w-6xl mx-auto px-6">

        <h3 class="text-4xl font-bold mb-16 text-gold text-center">
            Estructura Total
        </h3>

        <div class="grid md:grid-cols-3 gap-6">

            <div class="border border-gold p-6 hover:bg-gray-900 transition duration-300">
                <h4 class="text-gold font-bold mb-3 text-lg">Comunidad</h4>
                <p class="text-gray-300 text-sm">Gestión de gruposdentro de la plataforma.</p>
                <p class="text-gray-500 text-xs mt-3"></p>
            </div>

            <div class="border border-gold p-6 hover:bg-gray-900 transition duration-300">
                <h4 class="text-gold font-bold mb-3 text-lg">Reseñas</h4>
                <p class="text-gray-300 text-sm">Opiniones y experiencias compartidas para mejorar el servicio.</p>
                <p class="text-gray-500 text-xs mt-3"></p>
            </div>

            <div class="border border-gold p-6 hover:bg-gray-900 transition duration-300">
                <h4 class="text-gold font-bold mb-3 text-lg">Recursos</h4>
                <p class="text-gray-300 text-sm">Acceso a apoyo remoto, herramientas y materiales disponibles.</p>
                <p class="text-gray-500 text-xs mt-3"></p>
            </div>

            <div class="border border-gold p-6 hover:bg-gray-900 transition duration-300">
                <h4 class="text-gold font-bold mb-3 text-lg">Inventario</h4>
                <p class="text-gray-300 text-sm">Control de disponibilidad de los recursos adquiridos.</p>
                <p class="text-gray-500 text-xs mt-3"></p>
            </div>

            <div class="border border-gold p-6 hover:bg-gray-900 transition duration-300">
                <h4 class="text-gold font-bold mb-3 text-lg">Solicitudes</h4>
                <p class="text-gray-300 text-sm">Registro de solicitudes de usuarios para ayuda externa.</p>
                <p class="text-gray-500 text-xs mt-3"></p>
            </div>

            <div class="border border-gold p-6 hover:bg-gray-900 transition duration-300">
                <h4 class="text-gold font-bold mb-3 text-lg">Pagos</h4>
                <p class="text-gray-300 text-sm">Gestión de transacciones o efectos financieros.</p>
                <p class="text-gray-500 text-xs mt-3"></p>
            </div>
        </div>

    </div>

</section>


<!-- FOOTER -->

<footer class="bg-black border-t border-gold">

    <div class="max-w-6xl mx-auto px-6 py-16">

        <div class="grid md:grid-cols-3 gap-10 mb-10">

            <div>
                <h4 class="gold font-bold mb-3 text-lg">Camino Claro</h4>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Plataforma dedicada a la recuperación personal, 
                    apoyo emocional y crecimiento a través de la disciplina, mejora y continuidad en la comunidad.
                </p>
            </div>

            <div>
                <h4 class="gold font-bold mb-3 text-lg">Proyecto Académico</h4>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Sistema desarrollado para crear plataformas 
                    de apoyo social y bienestar emocional en forma de servicio social y voluntariado.
                </p>
            </div>

            <div>
                <h4 class="gold font-bold mb-3 text-lg">Usuarios y tecnologías</h4>
                <ul class="text-gray-400 text-sm space-y-1">
                    <li>• Administrador LGA</li>
                    <li>• Laravel</li>
                    <li>• Blade</li>
                    <li>• PHP</li>
                </ul>
            </div>

        </div>

        <div class="border-t border-gold pt-8 text-center text-gray-500 text-xs space-y-2">
            <p>© {{ date('Y') }} ClearMind - Plataforma de apoyo y recuperación.</p>
            <p class="space-x-4">
                <a href="{{ route('terms') }}" class="text-gold hover:text-white underline transition duration-200">
                    Términos y Condiciones
                </a>
                <span class="text-gray-500">|</span>
                <a href="{{ route('privacy') }}" class="text-gold hover:text-white underline transition duration-200">
                    Aviso de Privacidad
                </a>
            </p>
        </div>

    </div>

</footer>

</body>
</html>
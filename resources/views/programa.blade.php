@extends('plantilla')

@section('content')

<div class="bg-black text-white">

    <!-- HERO PROGRAM SECTION -->
    <section class="min-h-screen flex flex-col justify-center items-center text-center px-6 py-20">
        <h2 class="text-5xl md:text-6xl font-extrabold leading-tight mb-6">
            Programa digital de <span class="text-gold">apoyo y crecimiento</span>
        </h2>

        <p class="max-w-3xl text-gray-300 text-lg mb-10">
            Un espacio diseñado para ayudarte a superar adicciones y construir hábitos saludables con cursos, recursos digitales,
            productos de apoyo y una comunidad accesible desde el móvil o en puntos de encuentro reales.
        </p>

        <div class="flex flex-col md:flex-row gap-4">
            <a href="{{ route('contact') }}" class="bg-white text-black px-8 py-4 rounded-3xl font-semibold hover:bg-gold hover:text-black transition duration-300 shadow-lg">
                Quiero unirme
            </a>
            <a href="{{ route('home') }}" class="border-2 border-gold text-gold px-8 py-4 rounded-3xl font-semibold hover:bg-gold hover:text-black transition duration-300">
                Volver al inicio
            </a>
        </div>
    </section>

    <!-- PROGRAM FEATURES -->
    <section class="py-24 px-6 border-t border-gold">
        <div class="max-w-6xl mx-auto">
            <h3 class="text-4xl font-bold text-gold text-center mb-16">
                Qué incluye el programa
            </h3>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="border border-gold p-8 hover:bg-gray-900 transition duration-300 rounded-3xl">
                    <h4 class="text-2xl font-semibold text-gold mb-4">Cursos digitales</h4>
                    <p class="text-gray-300 leading-relaxed">
                        Acceso a módulos de aprendizaje sobre control emocional, hábitos de recuperación y estrategias para evitar recaídas.
                    </p>
                </div>

                <div class="border border-gold p-8 hover:bg-gray-900 transition duration-300 rounded-3xl">
                    <h4 class="text-2xl font-semibold text-gold mb-4">Mini mercado digital</h4>
                    <p class="text-gray-300 leading-relaxed">
                        Reúne recursos, guías, herramientas y productos de apoyo práctico disponibles para compra o descarga rápida.
                    </p>
                </div>

                <div class="border border-gold p-8 hover:bg-gray-900 transition duration-300 rounded-3xl">
                    <h4 class="text-2xl font-semibold text-gold mb-4">Comunidad segura</h4>
                    <p class="text-gray-300 leading-relaxed">
                        Conecta con otras personas en procesos similares, recibe apoyo en grupo y comparte avances sin juicios.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- MOVIL Y PRESENCIAL -->
    <section class="py-20 px-6 bg-black border-t border-gold">
        <div class="max-w-6xl mx-auto grid lg:grid-cols-2 gap-10 items-center">
            <div>
                <h3 class="text-4xl font-bold text-gold mb-6">Disponible en tu celular</h3>
                <p class="text-gray-300 leading-relaxed mb-6">
                    Navega el programa desde cualquier dispositivo. Accede a cursos, charlas, soporte y productos desde tu teléfono con una interfaz clara y minimalista.
                </p>
                <p class="text-gray-300 leading-relaxed">
                    Recibe notificaciones de apoyo, sigue tus avances y usa herramientas prácticas cuando más lo necesites.
                </p>
            </div>
            <div class="border border-gold rounded-3xl p-8 bg-[#0a0a0a]">
                <h4 class="text-xl font-semibold text-gold mb-4">Encuentros presenciales</h4>
                <p class="text-gray-300 leading-relaxed mb-3">
                    El apoyo también puede ser cara a cara. Consulta direcciones reales para reuniones, talleres y grupos de acompañamiento.</p>
                <ul class="text-gray-400 list-disc list-inside space-y-2">
                    <li>Puntos de apoyo local en la ciudad</li>
                    <li>Encuentros de grupo con espacio seguro</li>
                    <li>Asesorías personalizadas con horarios convenientes</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- CTA FINAL -->
    <section class="py-20 px-6 text-center border-t border-gold">
        <h3 class="text-4xl font-bold mb-8 text-gold">La ayuda está en varios formatos</h3>
        <p class="text-gray-300 mb-10 max-w-2xl mx-auto">
            Explora los cursos, visita el mercado virtual y únete a una comunidad con apoyo real. Nuestra plataforma está pensada para que puedas avanzar desde donde estés.
        </p>
        <a href="{{ route('contact') }}" class="inline-block bg-white text-black px-12 py-4 font-bold text-lg rounded-3xl hover:bg-gold hover:text-black transition duration-300 shadow-lg">
            Conocer opciones
        </a>
    </section>

</div>

@endsection

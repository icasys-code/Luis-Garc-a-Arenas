@extends('plantilla')

@section('content')

<div class="bg-black text-white">

    <!-- HERO SECTION -->
    <section class="min-h-screen flex flex-col justify-center items-center text-center px-6 py-20">
        <h2 class="text-5xl md:text-6xl font-extrabold leading-tight mb-6">
            Un espacio seguro para <span class="text-gold">sanar y mejorar</span>
        </h2>

        <p class="max-w-2xl text-gray-300 text-lg mb-10">
            Supera adicciones a drogas, alcohol o conductas compulsivas
            con apoyo emocional, herramientas prácticas y una comunidad
            que camina contigo sin juicios.
        </p>

        <div class="flex flex-col md:flex-row gap-4">
            <a href="{{ route ('contact') }}" class="bg-white text-black px-8 py-4 font-semibold hover:bg-gold hover:text-black transition duration-300 shadow-lg">
                Comenzar ahora
            </a>

            <a href="#programas" class="border-2 border-gold text-gold px-8 py-4 font-semibold hover:bg-gold hover:text-black transition duration-300">
                Saber más
            </a>
        </div>

        <div class="mt-16 opacity-70 animate-pulse">
            <p class="text-sm text-gray-400">Este es un lugar seguro.</p>
        </div>
    </section>

    <!-- PROGRAMAS SECTION -->
    <section id="programas" class="py-24 px-6 border-t border-gold">
        <div class="max-w-6xl mx-auto">
            <h3 class="text-4xl font-bold text-gold text-center mb-16">
                Nuestros Programas de Apoyo
            </h3>

            <div class="grid md:grid-cols-3 gap-8">

                <div class="border border-gold p-8 hover:bg-gray-900 transition duration-300">
                    <h4 class="text-2xl font-semibold text-gold mb-4">Sustancias ilicitas y alcoholicas</h4>
                    <p class="text-gray-300 leading-relaxed">
                        Métodos estructurados y acompañamiento personalizado para recuperar el control y construir una vida libre.
                    </p>
                </div>

                <div class="border border-gold p-8 hover:bg-gray-900 transition duration-300">
                    <h4 class="text-2xl font-semibold text-gold mb-4">Adicción Sexual</h4>
                    <p class="text-gray-300 leading-relaxed">
                        Espacio privado y confidencial con herramientas para reconstruir tu equilibrio emocional.
                    </p>
                </div>

                <div class="border border-gold p-8 hover:bg-gray-900 transition duration-300">
                    <h4 class="text-2xl font-semibold text-gold mb-4">Ludopatía</h4>
                    <p class="text-gray-300 leading-relaxed">
                        Control del juego compulsivo mediante estrategias personalizadas y apoyo comunitario.
                    </p>
                </div>

                <div class="border border-gold p-8 hover:bg-gray-900 transition duration-300">
                    <h4 class="text-2xl font-semibold text-gold mb-4">Adicción a Tecnología</h4>
                    <p class="text-gray-300 leading-relaxed">
                        Recupera el equilibrio con el uso digital y desarrolla hábitos saludables.
                    </p>
                </div>

                <div class="border border-gold p-8 hover:bg-gray-900 transition duration-300">
                    <h4 class="text-2xl font-semibold text-gold mb-4">Adicción a Comida</h4>
                    <p class="text-gray-300 leading-relaxed">
                        Programa integral para desarrollar una relación saludable con la alimentación.
                    </p>
                </div>

                <div class="border border-gold p-8 hover:bg-gray-900 transition duration-300">
                    <h4 class="text-2xl font-semibold text-gold mb-4">Caso personalizado</h4>
                    <p class="text-gray-300 leading-relaxed">
                        Seccion dedicada a casos específicos de adicción, con un enfoque personalizado y adaptado a las necesidades individuales.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- PRIVACIDAD SECTION -->
    <section class="py-20 px-6 border-t border-gold bg-black text-center">
        <div class="max-w-4xl mx-auto">
            <h3 class="text-4xl font-bold text-gold mb-6">
                Privacidad y Confidencialidad
            </h3>
            <p class="text-gray-300 text-lg leading-relaxed">
                Toda tu información está protegida bajo los más altos estándares de seguridad. 
                Este es un espacio de respeto, seguridad y crecimiento personal donde puedes ser tú mismo.
            </p>
        </div>
    </section>

    <!-- CTA FINAL SECTION -->
    <section class="py-20 px-6 text-center border-t border-gold">
        <h3 class="text-4xl font-bold mb-8">
            Tu proceso de recuperación comienza hoy
        </h3>

        <p class="text-gray-300 mb-10 max-w-2xl mx-auto">
            No estás solo. Contamos con un equipo dedicado y una comunidad que te apoyará en cada paso del camino.
        </p>

        <a href="{{ route('contact') }}" class="inline-block bg-white text-black px-12 py-4 font-bold text-lg hover:bg-gold hover:text-black transition duration-300 shadow-lg">
            Crear cuenta gratuita
        </a>
    </section>

</div>

@endsection
@extends('plantilla')

@section('content')

<div class="bg-black text-white">

    <!-- HERO COMUNIDAD -->
    <section class="min-h-screen flex flex-col justify-center items-center text-center px-6 py-20">
        <h2 class="text-5xl md:text-6xl font-extrabold leading-tight mb-6">
            Comunidad de apoyo para el <span class="text-gold">cambio real</span>
        </h2>

        <p class="max-w-3xl text-gray-300 text-lg mb-10">
            Conecta con personas que también buscan salir adelante, participa en grupos de apoyo,
            comparte experiencias y recibe acompañamiento desde el móvil y en espacios presenciales.
        </p>

        <div class="flex flex-col md:flex-row gap-4">
            <a href="{{ route('programa') }}" class="bg-white text-black px-8 py-4 rounded-3xl font-semibold hover:bg-gold hover:text-black transition duration-300 shadow-lg">
                Ver programa
            </a>
            <a href="{{ route('contact') }}" class="border-2 border-gold text-gold px-8 py-4 rounded-3xl font-semibold hover:bg-gold hover:text-black transition duration-300">
                Contacto de apoyo
            </a>
        </div>
    </section>

    <!-- CONEXION DIGITAL -->
    <section class="py-24 px-6 border-t border-gold">
        <div class="max-w-6xl mx-auto">
            <h3 class="text-4xl font-bold text-gold text-center mb-16">
                Apoyo activo en línea y desde tu celular
            </h3>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="border border-gold p-8 hover:bg-gray-900 transition duration-300 rounded-3xl">
                    <h4 class="text-2xl font-semibold text-gold mb-4">Chats seguros</h4>
                    <p class="text-gray-300 leading-relaxed">
                        Communidades privadas donde puedes hablar con moderadores y compañeros que entienden tu proceso.
                    </p>
                </div>
                <div class="border border-gold p-8 hover:bg-gray-900 transition duration-300 rounded-3xl">
                    <h4 class="text-2xl font-semibold text-gold mb-4">Eventos digitales</h4>
                    <p class="text-gray-300 leading-relaxed">
                        Talleres, charlas y encuentros en línea para apoyarte en tu recuperación y mantenerte motivado.
                    </p>
                </div>
                <div class="border border-gold p-8 hover:bg-gray-900 transition duration-300 rounded-3xl">
                    <h4 class="text-2xl font-semibold text-gold mb-4">Compartir avances</h4>
                    <p class="text-gray-300 leading-relaxed">
                        Publica tu progreso, celebra pequeños logros y encuentra inspiración en historias reales.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ENCUENTROS REALES -->
    <section class="py-20 px-6 bg-black border-t border-gold">
        <div class="max-w-6xl mx-auto grid lg:grid-cols-2 gap-10 items-center">
            <div>
                <h3 class="text-4xl font-bold text-gold mb-6">Encuentros en persona</h3>
                <p class="text-gray-300 leading-relaxed mb-6">
                    Nuestro programa también te conecta con ubicaciones reales para acudir en grupo,
                    recibir apoyo directo y fortalecer tu red en la vida diaria.
                </p>
                <p class="text-gray-300 leading-relaxed">
                    Consulta direcciones reales y eventos cercanos para participar en un ambiente seguro y respetuoso.
                </p>
            </div>
            <div class="border border-gold rounded-3xl p-8 bg-[#0a0a0a]">
                <h4 class="text-xl font-semibold text-gold mb-4">Puntos de encuentro</h4>
                <ul class="text-gray-400 list-disc list-inside space-y-3">
                    <li>Reuniones de grupo en espacios seguros</li>
                    <li>Talleres de crecimiento personal</li>
                    <li>Apoyos presenciales con horarios flexibles</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- COMENTARIOS DE LA COMUNIDAD -->
    <section class="py-20 px-6 text-center border-t border-gold">
        <h3 class="text-4xl font-bold mb-8 text-gold">Experiencias de la comunidad</h3>
        <p class="text-gray-300 mb-10 max-w-2xl mx-auto">
            Lee lo que dicen quienes han encontrado apoyo y transformación en nuestra comunidad.
        </p>

        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <div class="border border-gold p-6 rounded-3xl bg-[#0a0a0a] hover:bg-gray-900 transition duration-300">
                <p class="text-gray-300 italic mb-4">"La comunidad me dio la fuerza que necesitaba. No me sentí solo en mi lucha contra la adicción."</p>
                <div class="text-gold font-semibold">María G.</div>
                <div class="text-gray-500 text-sm">Hace 3 meses</div>
            </div>

            <div class="border border-gold p-6 rounded-3xl bg-[#0a0a0a] hover:bg-gray-900 transition duration-300">
                <p class="text-gray-300 italic mb-4">"Los grupos en línea me ayudaron a mantener la motivación. Ahora tengo herramientas reales para mi recuperación."</p>
                <div class="text-gold font-semibold">Carlos R.</div>
                <div class="text-gray-500 text-sm">Hace 2 meses</div>
            </div>

            <div class="border border-gold p-6 rounded-3xl bg-[#0a0a0a] hover:bg-gray-900 transition duration-300">
                <p class="text-gray-300 italic mb-4">"Encontré apoyo genuino aquí. Los encuentros presenciales cambiaron mi perspectiva sobre la recuperación."</p>
                <div class="text-gold font-semibold">Ana L.</div>
                <div class="text-gray-500 text-sm">Hace 1 mes</div>
            </div>
        </div>
    </section>

</div>

@endsection
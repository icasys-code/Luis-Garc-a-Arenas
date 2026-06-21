@extends('plantilla')

@section('content')
<section class="bg-black py-20">
    <div class="max-w-7xl mx-auto px-6 text-white">
        <div class="text-center mb-14">
            <h2 class="text-5xl font-bold mb-4 text-gold">Marketplace de Desarrollo Personal</h2>
            <p class="max-w-3xl mx-auto text-gray-300 text-lg leading-relaxed">
                Explora libros, cursos y recursos especializados en autoconocimiento, psicología aplicada, crecimiento emocional y hábitos saludables. Cada oferta está seleccionada para brindarte herramientas reales en tu camino de bienestar.
            </p>
        </div>

        <div class="grid gap-8 md:grid-cols-2 xl:grid-cols-3">
            <div class="border border-gold rounded-3xl overflow-hidden bg-gray-950 shadow-xl">
                <img src="https://images.unsplash.com/photo-1516979187457-637abb4f9353?auto=format&fit=crop&w=800&q=80" alt="Libro Reconócete" class="w-full h-56 object-cover" />
                <div class="p-6">
                    <span class="text-gold text-sm uppercase tracking-widest">Libro</span>
                    <h3 class="text-2xl font-bold mt-3">Reconócete.</h3>
                    <p class="text-gray-300 mt-3">Un libro profundo sobre autoconocimiento, identidad y decisiones conscientes para mejorar tu relación contigo mismo.</p>
                    <p class="mt-6 text-xl font-bold">$349 MXN</p>
                    <button class="mt-6 w-full rounded-3xl bg-gold py-3 font-semibold text-black hover:bg-white transition duration-300">Comprar</button>
                </div>
            </div>

            <div class="border border-gold rounded-3xl overflow-hidden bg-gray-950 shadow-xl">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=800&q=80" alt="Curso Psicología Aplicada" class="w-full h-56 object-cover" />
                <div class="p-6">
                    <span class="text-gold text-sm uppercase tracking-widest">Curso</span>
                    <h3 class="text-2xl font-bold mt-3">Psicología aplicada para la vida</h3>
                    <p class="text-gray-300 mt-3">Curso en línea que enseña cómo aplicar principios psicológicos al manejo del estrés, la confianza y las relaciones.</p>
                    <p class="mt-6 text-xl font-bold">$899 MXN</p>
                    <button class="mt-6 w-full rounded-3xl bg-gold py-3 font-semibold text-black hover:bg-white transition duration-300">Comprar</button>
                </div>
            </div>

            <div class="border border-gold rounded-3xl overflow-hidden bg-gray-950 shadow-xl">
                <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?auto=format&fit=crop&w=800&q=80" alt="Libro El Viaje Interior" class="w-full h-56 object-cover" />
                <div class="p-6">
                    <span class="text-gold text-sm uppercase tracking-widest">Libro</span>
                    <h3 class="text-2xl font-bold mt-3">El viaje interior</h3>
                    <p class="text-gray-300 mt-3">Una guía para explorar pensamientos, emociones y encontrar propósito con ejercicios prácticos y reflexivos.</p>
                    <p class="mt-6 text-xl font-bold">$295 MXN</p>
                    <button class="mt-6 w-full rounded-3xl bg-gold py-3 font-semibold text-black hover:bg-white transition duration-300">Comprar</button>
                </div>
            </div>

            <div class="border border-gold rounded-3xl overflow-hidden bg-gray-950 shadow-xl">
                <img src="https://images.unsplash.com/photo-1496318447583-f524534e9ce1?auto=format&fit=crop&w=800&q=80" alt="Masterclass Inteligencia Emocional" class="w-full h-56 object-cover" />
                <div class="p-6">
                    <span class="text-gold text-sm uppercase tracking-widest">Masterclass</span>
                    <h3 class="text-2xl font-bold mt-3">Inteligencia emocional</h3>
                    <p class="text-gray-300 mt-3">Sesión intensiva para reconocer, regular y emplear emociones con mayor eficacia en tu vida diaria.</p>
                    <p class="mt-6 text-xl font-bold">$1,199 MXN</p>
                    <button class="mt-6 w-full rounded-3xl bg-gold py-3 font-semibold text-black hover:bg-white transition duration-300">Comprar</button>
                </div>
            </div>

            <div class="border border-gold rounded-3xl overflow-hidden bg-gray-950 shadow-xl">
                <img src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&w=800&q=80" alt="Guía hábitos mentales" class="w-full h-56 object-cover" />
                <div class="p-6">
                    <span class="text-gold text-sm uppercase tracking-widest">Guía</span>
                    <h3 class="text-2xl font-bold mt-3">Hábitos mentales saludables</h3>
                    <p class="text-gray-300 mt-3">Libro práctico con rutinas, ejercicios y estrategias para construir hábitos psicológicos positivos.</p>
                    <p class="mt-6 text-xl font-bold">$279 MXN</p>
                    <button class="mt-6 w-full rounded-3xl bg-gold py-3 font-semibold text-black hover:bg-white transition duration-300">Comprar</button>
                </div>
            </div>

            <div class="border border-gold rounded-3xl overflow-hidden bg-gray-950 shadow-xl">
                <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=800&q=80" alt="Taller Mindfulness" class="w-full h-56 object-cover" />
                <div class="p-6">
                    <span class="text-gold text-sm uppercase tracking-widest">Taller</span>
                    <h3 class="text-2xl font-bold mt-3">Mindfulness y autocompasión</h3>
                    <p class="text-gray-300 mt-3">Taller práctico con ejercicios de atención plena y autocuidado diseñados para calmar la mente y recuperar energía.</p>
                    <p class="mt-6 text-xl font-bold">$650 MXN</p>
                    <button class="mt-6 w-full rounded-3xl bg-gold py-3 font-semibold text-black hover:bg-white transition duration-300">Comprar</button>
                </div>
            </div>

            <div class="border border-gold rounded-3xl overflow-hidden bg-gray-950 shadow-xl">
                <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&w=800&q=80" alt="Libro Resiliencia" class="w-full h-56 object-cover" />
                <div class="p-6">
                    <span class="text-gold text-sm uppercase tracking-widest">Libro</span>
                    <h3 class="text-2xl font-bold mt-3">Resiliencia en acción</h3>
                    <p class="text-gray-300 mt-3">Historias inspiradoras y herramientas para recuperarte con firmeza de las crisis y los cambios personales.</p>
                    <p class="mt-6 text-xl font-bold">$319 MXN</p>
                    <button class="mt-6 w-full rounded-3xl bg-gold py-3 font-semibold text-black hover:bg-white transition duration-300">Comprar</button>
                </div>
            </div>

            <div class="border border-gold rounded-3xl overflow-hidden bg-gray-950 shadow-xl">
                <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=800&q=80" alt="Programa Gestión del Estrés" class="w-full h-56 object-cover" />
                <div class="p-6">
                    <span class="text-gold text-sm uppercase tracking-widest">Programa</span>
                    <h3 class="text-2xl font-bold mt-3">Gestión del estrés y ansiedad</h3>
                    <p class="text-gray-300 mt-3">Programa de 8 semanas con prácticas guiadas para reducir la ansiedad y recuperar equilibrio emocional.</p>
                    <p class="mt-6 text-xl font-bold">$1,499 MXN</p>
                    <button class="mt-6 w-full rounded-3xl bg-gold py-3 font-semibold text-black hover:bg-white transition duration-300">Comprar</button>
                </div>
            </div>

            <div class="border border-gold rounded-3xl overflow-hidden bg-gray-950 shadow-xl">
                <img src="https://images.unsplash.com/photo-1523475472560-d2df97ec485c?auto=format&fit=crop&w=800&q=80" alt="Libro Comunicación Asertiva" class="w-full h-56 object-cover" />
                <div class="p-6">
                    <span class="text-gold text-sm uppercase tracking-widest">Libro</span>
                    <h3 class="text-2xl font-bold mt-3">Comunicación asertiva</h3>
                    <p class="text-gray-300 mt-3">Guía para expresar ideas y emociones con seguridad, respeto y resultados más claros en tus relaciones.</p>
                    <p class="mt-6 text-xl font-bold">$289 MXN</p>
                    <button class="mt-6 w-full rounded-3xl bg-gold py-3 font-semibold text-black hover:bg-white transition duration-300">Comprar</button>
                </div>
            </div>

            <div class="border border-gold rounded-3xl overflow-hidden bg-gray-950 shadow-xl">
                <img src="https://images.unsplash.com/photo-1496337589252-7fed5b06bc75?auto=format&fit=crop&w=800&q=80" alt="Curso Terapia Cognitivo Conductual" class="w-full h-56 object-cover" />
                <div class="p-6">
                    <span class="text-gold text-sm uppercase tracking-widest">Curso</span>
                    <h3 class="text-2xl font-bold mt-3">Terapia cognitivo-conductual</h3>
                    <p class="text-gray-300 mt-3">Curso estructurado para comprender y aplicar técnicas TCC en la gestión de pensamientos y comportamientos.</p>
                    <p class="mt-6 text-xl font-bold">$799 MXN</p>
                    <button class="mt-6 w-full rounded-3xl bg-gold py-3 font-semibold text-black hover:bg-white transition duration-300">Comprar</button>
                </div>
            </div>

            <div class="border border-gold rounded-3xl overflow-hidden bg-gray-950 shadow-xl">
                <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=800&q=80" alt="Libro Descubre tus Valores" class="w-full h-56 object-cover" />
                <div class="p-6">
                    <span class="text-gold text-sm uppercase tracking-widest">Libro</span>
                    <h3 class="text-2xl font-bold mt-3">Descubre tus valores</h3>
                    <p class="text-gray-300 mt-3">Ejercicios y reflexiones para alinear tus decisiones con lo que realmente importa en tu vida.</p>
                    <p class="mt-6 text-xl font-bold">$269 MXN</p>
                    <button class="mt-6 w-full rounded-3xl bg-gold py-3 font-semibold text-black hover:bg-white transition duration-300">Comprar</button>
                </div>
            </div>

            <div class="border border-gold rounded-3xl overflow-hidden bg-gray-950 shadow-xl">
                <img src="https://images.unsplash.com/photo-1496317899792-9d7dbcd928a1?auto=format&fit=crop&w=800&q=80" alt="Curso Liderazgo Emocional" class="w-full h-56 object-cover" />
                <div class="p-6">
                    <span class="text-gold text-sm uppercase tracking-widest">Curso</span>
                    <h3 class="text-2xl font-bold mt-3">Liderazgo emocional</h3>
                    <p class="text-gray-300 mt-3">Aprende a gestionar tu energía y a liderar desde la calma, la empatía y la claridad mental.</p>
                    <p class="mt-6 text-xl font-bold">$999 MXN</p>
                    <button class="mt-6 w-full rounded-3xl bg-gold py-3 font-semibold text-black hover:bg-white transition duration-300">Comprar</button>
                </div>
            </div>

            <div class="border border-gold rounded-3xl overflow-hidden bg-gray-950 shadow-xl">
                <img src="https://images.unsplash.com/photo-1519241047957-be31d7379a5d?auto=format&fit=crop&w=800&q=80" alt="Libro Equilibrio Interior" class="w-full h-56 object-cover" />
                <div class="p-6">
                    <span class="text-gold text-sm uppercase tracking-widest">Libro</span>
                    <h3 class="text-2xl font-bold mt-3">Equilibrio interior</h3>
                    <p class="text-gray-300 mt-3">Lectura inspiradora para conectar con la serenidad y desarrollar una mentalidad más estable.</p>
                    <p class="mt-6 text-xl font-bold">$309 MXN</p>
                    <button class="mt-6 w-full rounded-3xl bg-gold py-3 font-semibold text-black hover:bg-white transition duration-300">Comprar</button>
                </div>
            </div>

            <div class="border border-gold rounded-3xl overflow-hidden bg-gray-950 shadow-xl">
                <img src="https://images.unsplash.com/photo-1511497584788-876760111969?auto=format&fit=crop&w=800&q=80" alt="Seminario Autocuidado" class="w-full h-56 object-cover" />
                <div class="p-6">
                    <span class="text-gold text-sm uppercase tracking-widest">Seminario</span>
                    <h3 class="text-2xl font-bold mt-3">Autocuidado diario</h3>
                    <p class="text-gray-300 mt-3">Seminario virtual para diseñar rutinas conscientes que preserven tu bienestar físico y mental cada día.</p>
                    <p class="mt-6 text-xl font-bold">$749 MXN</p>
                    <button class="mt-6 w-full rounded-3xl bg-gold py-3 font-semibold text-black hover:bg-white transition duration-300">Comprar</button>
                </div>
            </div>

            <div class="border border-gold rounded-3xl overflow-hidden bg-gray-950 shadow-xl">
                <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&w=800&q=80" alt="Club lectura terapéutica" class="w-full h-56 object-cover" />
                <div class="p-6">
                    <span class="text-gold text-sm uppercase tracking-widest">Club</span>
                    <h3 class="text-2xl font-bold mt-3">Club de lectura terapéutica</h3>
                    <p class="text-gray-300 mt-3">Suscripción mensual para leer y discutir textos de crecimiento personal en comunidad.</p>
                    <p class="mt-6 text-xl font-bold">$269 MXN / mes</p>
                    <button class="mt-6 w-full rounded-3xl bg-gold py-3 font-semibold text-black hover:bg-white transition duration-300">Comprar</button>
                </div>
            </div>

            <div class="border border-gold rounded-3xl overflow-hidden bg-gray-950 shadow-xl">
                <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=800&q=80" alt="Libro Atención Plena" class="w-full h-56 object-cover" />
                <div class="p-6">
                    <span class="text-gold text-sm uppercase tracking-widest">Libro</span>
                    <h3 class="text-2xl font-bold mt-3">El poder de la atención plena</h3>
                    <p class="text-gray-300 mt-3">Manual para cultivar la presencia, reducir distracciones y mejorar el enfoque emocional.</p>
                    <p class="mt-6 text-xl font-bold">$329 MXN</p>
                    <button class="mt-6 w-full rounded-3xl bg-gold py-3 font-semibold text-black hover:bg-white transition duration-300">Comprar</button>
                </div>
            </div>

            <div class="border border-gold rounded-3xl overflow-hidden bg-gray-950 shadow-xl">
                <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=800&q=80" alt="Curso Psicología Positiva" class="w-full h-56 object-cover" />
                <div class="p-6">
                    <span class="text-gold text-sm uppercase tracking-widest">Curso</span>
                    <h3 class="text-2xl font-bold mt-3">Psicología positiva</h3>
                    <p class="text-gray-300 mt-3">Curso con estrategias para potenciar fortalezas, gratitud y bienestar en la rutina cotidiana.</p>
                    <p class="mt-6 text-xl font-bold">$899 MXN</p>
                    <button class="mt-6 w-full rounded-3xl bg-gold py-3 font-semibold text-black hover:bg-white transition duration-300">Comprar</button>
                </div>
            </div>

            <div class="border border-gold rounded-3xl overflow-hidden bg-gray-950 shadow-xl">
                <img src="https://images.unsplash.com/photo-1496337589252-7fed5b06bc75?auto=format&fit=crop&w=800&q=80" alt="Paquete Coaching Personal" class="w-full h-56 object-cover" />
                <div class="p-6">
                    <span class="text-gold text-sm uppercase tracking-widest">Paquete</span>
                    <h3 class="text-2xl font-bold mt-3">Coaching personal</h3>
                    <p class="text-gray-300 mt-3">Paquete de sesiones enfocadas a establecer metas, mejorar hábitos y reforzar la autoeficacia.</p>
                    <p class="mt-6 text-xl font-bold">$1,999 MXN</p>
                    <button class="mt-6 w-full rounded-3xl bg-gold py-3 font-semibold text-black hover:bg-white transition duration-300">Comprar</button>
                </div>
            </div>

            <div class="border border-gold rounded-3xl overflow-hidden bg-gray-950 shadow-xl">
                <img src="https://images.unsplash.com/photo-1500534623283-312aade485b7?auto=format&fit=crop&w=800&q=80" alt="Libro Autoconfianza" class="w-full h-56 object-cover" />
                <div class="p-6">
                    <span class="text-gold text-sm uppercase tracking-widest">Libro</span>
                    <h3 class="text-2xl font-bold mt-3">Autoconfianza paso a paso</h3>
                    <p class="text-gray-300 mt-3">Guía práctica que enseña a fortalecer la confianza personal con ejercicios diarios comprobados.</p>
                    <p class="mt-6 text-xl font-bold">$289 MXN</p>
                    <button class="mt-6 w-full rounded-3xl bg-gold py-3 font-semibold text-black hover:bg-white transition duration-300">Comprar</button>
                </div>
            </div>

            <div class="border border-gold rounded-3xl overflow-hidden bg-gray-950 shadow-xl">
                <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=800&q=80" alt="Curso Relaciones saludables" class="w-full h-56 object-cover" />
                <div class="p-6">
                    <span class="text-gold text-sm uppercase tracking-widest">Curso</span>
                    <h3 class="text-2xl font-bold mt-3">Relación sana contigo mismo</h3>
                    <p class="text-gray-300 mt-3">Curso para construir una relación más amable, estable y respetuosa con tu propia mente.</p>
                    <p class="mt-6 text-xl font-bold">$749 MXN</p>
                    <button class="mt-6 w-full rounded-3xl bg-gold py-3 font-semibold text-black hover:bg-white transition duration-300">Comprar</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
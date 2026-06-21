<a href="{{ route ('welcome') }}"></a>
<a href="{{ route ('contacto') }}"></a>

@extends('plantilla')

@section('content')

<div class="bg-black text-white">

    <section class="min-h-screen flex flex-col justify-center items-center text-center px-6 py-20">
        <h2 class="text-5xl md:text-6xl font-extrabold leading-tight mb-6">
            Contacto
        </h2>

        <p class="max-w-2xl text-gray-300 text-lg mb-10">
            Si necesitas apoyo, estamos aquí para escucharte.
            Completa el formulario y uno de nuestros asesores se pondrá en contacto contigo.
        </p>

        <div class="w-full max-w-3xl bg-white/5 border border-gold rounded-3xl p-8 shadow-xl">
            <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label class="block text-gold font-semibold mb-2" for="name">Nombre</label>
                    <input id="name" name="name" type="text" class="w-full rounded-xl border border-gray-700 bg-black px-4 py-3 text-white focus:border-gold focus:outline-none" />
                </div>

                <div>
                    <label class="block text-gold font-semibold mb-2" for="phone">Telefono</label>
                    <input id="phone" name="phone" type="text" class="w-full rounded-xl border border-gray-700 bg-black px-4 py-3 text-white focus:border-gold focus:outline-none" />
                </div>

                <div>
                    <label class="block text-gold font-semibold mb-2" for="email">Correo</label>
                    <input id="email" name="email" type="email" class="w-full rounded-xl border border-gray-700 bg-black px-4 py-3 text-white focus:border-gold focus:outline-none" />
                </div>

                <div>
                    <label class="block text-gold font-semibold mb-2" for="message">Mensaje</label>
                    <textarea id="message" name="message" rows="6" class="w-full rounded-xl border border-gray-700 bg-black px-4 py-3 text-white focus:border-gold focus:outline-none"></textarea>
                </div>

                <button type="submit" class="w-full bg-white text-black px-6 py-4 font-bold rounded-3xl hover:bg-gold hover:text-black transition duration-300">
                    Enviar mensaje
                </button>
            </form>
        </div>
    </section>

</div>

@endsection
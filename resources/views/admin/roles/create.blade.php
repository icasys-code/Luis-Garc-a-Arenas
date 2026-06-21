@extends('admin.layout')

@section('title', 'Nuevo Rol')

@section('content')
<div class="max-w-2xl">
    <h2 class="text-3xl font-bold text-gold mb-6">Nuevo Rol</h2>

    @if($errors->any())
        <div class="bg-red-900 border border-red-500 text-red-100 px-4 py-3 rounded mb-6">
            <ul>
                @foreach($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.roles.store') }}" method="POST" class="space-y-6">
        @csrf

        <div>
            <label class="block text-gold font-bold mb-2">Nombre del Rol</label>
            <input type="text" name="name" required class="w-full bg-gray-900 border border-gold px-4 py-2 rounded text-white" placeholder="Ej: Moderador, Editor, Voluntario">
        </div>

        <div class="flex space-x-4">
            <button type="submit" class="bg-gold text-black px-6 py-2 font-bold rounded hover:bg-white transition">
                Crear Rol
            </button>
            <a href="{{ route('admin.roles.index') }}" class="border border-gold text-gold px-6 py-2 font-bold rounded hover:bg-gold hover:text-black transition">
                Cancelar
            </a>
        </div>
    </form>
</div>
@endsection

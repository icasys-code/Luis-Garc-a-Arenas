@extends('admin.layout')

@section('title', 'Editar Categoría')

@section('content')
<div class="max-w-2xl">
    <h2 class="text-3xl font-bold text-gold mb-6">Editar Categoría</h2>

    @if($errors->any())
        <div class="bg-red-900 border border-red-500 text-red-100 px-4 py-3 rounded mb-6">
            <ul>
                @foreach($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-gold font-bold mb-2">Nombre</label>
            <input type="text" name="name" required value="{{ $category->name }}" class="w-full bg-gray-900 border border-gold px-4 py-2 rounded text-white">
        </div>

        <div>
            <label class="block text-gold font-bold mb-2">Descripción</label>
            <textarea name="description" required class="w-full bg-gray-900 border border-gold px-4 py-2 rounded text-white h-32">{{ $category->description }}</textarea>
        </div>

        <div>
            <label class="flex items-center space-x-3 cursor-pointer">
                <input type="checkbox" name="active" value="1" {{ $category->active ? 'checked' : '' }} class="w-4 h-4">
                <span class="text-gold">Activo</span>
            </label>
        </div>

        <div class="flex space-x-4">
            <button type="submit" class="bg-gold text-black px-6 py-2 font-bold rounded hover:bg-white transition">
                Actualizar Categoría
            </button>
            <a href="{{ route('admin.categories.index') }}" class="border border-gold text-gold px-6 py-2 font-bold rounded hover:bg-gold hover:text-black transition">
                Cancelar
            </a>
        </div>
    </form>
</div>
@endsection

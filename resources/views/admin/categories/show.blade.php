@extends('admin.layouts.admin')

@section('title', 'Categoría')
@section('page-title', 'Detalles de la Categoría')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-2xl font-bold mb-6">{{ $category->name }}</h2>

        <div class="space-y-4">
            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">ID</label>
                <p class="text-gray-900">{{ $category->id }}</p>
            </div>

            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">Nombre</label>
                <p class="text-gray-900">{{ $category->name }}</p>
            </div>

            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">Descripción</label>
                <p class="text-gray-900">{{ $category->description ?? 'N/A' }}</p>
            </div>

            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">Fecha de Creación</label>
                <p class="text-gray-900">{{ $category->created_at->format('d/m/Y H:i') }}</p>
            </div>
        </div>

        <div class="flex items-center justify-between mt-8 pt-6 border-t">
            <div class="space-x-2">
                <a href="{{ route('admin.categories.edit', $category) }}" class="bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                    Editar
                </a>
                <a href="{{ route('admin.categories.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Volver
                </a>
            </div>
            <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" style="display:inline;" onclick="return confirm('¿Estás seguro de que deseas eliminar esta categoría?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                    Eliminar
                </button>
            </form>
        </div>
    </div>
</div>
@endsection

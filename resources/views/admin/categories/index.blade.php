@extends('admin.layout')

@section('title', 'Categorías')

@section('content')
<div class="mb-8">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-3xl font-bold text-gold">Gestión de Categorías</h2>
        <a href="{{ route('admin.categories.create') }}" class="bg-gold text-black px-6 py-2 font-bold rounded hover:bg-white transition">
            + Nueva Categoría
        </a>
    </div>

    @if($categories->isEmpty())
        <div class="border border-gold p-6 rounded text-center text-gray-400">
            No hay categorías registradas aún.
        </div>
    @else
        <div class="border border-gold rounded overflow-hidden">
            <table class="w-full">
                <thead class="bg-gold text-black">
                    <tr>
                        <th class="px-6 py-3 text-left">Nombre</th>
                        <th class="px-6 py-3 text-left">Descripción</th>
                        <th class="px-6 py-3 text-left">Estado</th>
                        <th class="px-6 py-3 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr class="border-t border-gold hover:bg-gray-900 transition">
                            <td class="px-6 py-3">{{ $category->name }}</td>
                            <td class="px-6 py-3 text-gray-400 max-w-xs truncate">{{ $category->description }}</td>
                            <td class="px-6 py-3">
                                <span class="px-3 py-1 rounded text-sm {{ $category->active ? 'bg-green-900 text-green-300' : 'bg-red-900 text-red-300' }}">
                                    {{ $category->active ? 'Activo' : 'Inactivo' }}
                                </span>
                            </td>
                            <td class="px-6 py-3 text-center space-x-2">
                                <a href="{{ route('admin.categories.edit', $category->id) }}" class="text-gold hover:text-white">Editar</a>
                                <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-300" onclick="return confirm('¿Eliminar?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection

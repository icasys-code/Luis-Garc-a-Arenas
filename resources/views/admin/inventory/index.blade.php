@extends('admin.layout')

@section('title', 'Inventario')

@section('content')
<div class="mb-8">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-3xl font-bold text-gold">Gestión de Inventario</h2>
        <a href="{{ route('admin.inventories.create') }}" class="bg-gold text-black px-6 py-2 font-bold rounded hover:bg-white transition">
            + Nuevo Inventario
        </a>
    </div>

    @if($items->isEmpty())
        <div class="border border-gold p-6 rounded text-center text-gray-400">
            No hay inventario registrado aún.
        </div>
    @else
        <div class="border border-gold rounded overflow-hidden">
            <table class="w-full">
                <thead class="bg-gold text-black">
                    <tr>
                        <th class="px-6 py-3 text-left">Producto</th>
                        <th class="px-6 py-3 text-center">Stock</th>
                        <th class="px-6 py-3 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                        <tr class="border-t border-gold hover:bg-gray-900 transition">
                            <td class="px-6 py-3">{{ $item->product->name ?? 'Producto no disponible' }}</td>
                            <td class="px-6 py-3 text-center">
                                <span class="px-3 py-1 rounded text-sm {{ $item->stock > 0 ? 'bg-green-900 text-green-300' : 'bg-red-900 text-red-300' }}">
                                    {{ $item->stock }}
                                </span>
                            </td>
                            <td class="px-6 py-3 text-center space-x-2">
                                <a href="{{ route('admin.inventories.edit', $item->id) }}" class="text-gold hover:text-white">Editar</a>
                                <form action="{{ route('admin.inventories.destroy', $item->id) }}" method="POST" style="display:inline;">
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

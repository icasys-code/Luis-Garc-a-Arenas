@extends('admin.layouts.admin')

@section('title', 'Especificación de Producto')
@section('page-title', 'Detalles de la Especificación')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-2xl font-bold mb-6">Especificación #{{ $productSpecification->id }}</h2>

        <div class="space-y-4">
            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">ID</label>
                <p class="text-gray-900">{{ $productSpecification->id }}</p>
            </div>

            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">Producto</label>
                <p class="text-gray-900">{{ $productSpecification->product->name ?? 'N/A' }}</p>
            </div>

            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">Nombre</label>
                <p class="text-gray-900">{{ $productSpecification->name }}</p>
            </div>

            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">Valor</label>
                <p class="text-gray-900">{{ $productSpecification->value }}</p>
            </div>

            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">Fecha de Creación</label>
                <p class="text-gray-900">{{ $productSpecification->created_at->format('d/m/Y H:i') }}</p>
            </div>
        </div>

        <div class="flex items-center justify-between mt-8 pt-6 border-t">
            <div class="space-x-2">
                <a href="{{ route('admin.product-specifications.edit', $productSpecification) }}" class="bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                    Editar
                </a>
                <a href="{{ route('admin.product-specifications.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Volver
                </a>
            </div>
            <form action="{{ route('admin.product-specifications.destroy', $productSpecification) }}" method="POST" style="display:inline;" onclick="return confirm('¿Estás seguro?')">
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

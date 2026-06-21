@extends('admin.layouts.admin')

@section('title', 'Imagen de Producto')
@section('page-title', 'Detalles de la Imagen')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-2xl font-bold mb-6">Imagen #{{ $productImage->id }}</h2>

        <div class="space-y-4">
            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">ID</label>
                <p class="text-gray-900">{{ $productImage->id }}</p>
            </div>

            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">Producto</label>
                <p class="text-gray-900">{{ $productImage->product->name ?? 'N/A' }}</p>
            </div>

            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">URL de Imagen</label>
                <p class="text-gray-900 break-all">{{ $productImage->image_url }}</p>
            </div>

            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">Vista Previa</label>
                <div class="max-w-xs">
                    <img src="{{ $productImage->image_url }}" alt="Imagen" class="w-full rounded" onerror="this.src='https://via.placeholder.com/300'">
                </div>
            </div>

            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">Fecha de Creación</label>
                <p class="text-gray-900">{{ $productImage->created_at->format('d/m/Y H:i') }}</p>
            </div>
        </div>

        <div class="flex items-center justify-between mt-8 pt-6 border-t">
            <div class="space-x-2">
                <a href="{{ route('admin.product-images.edit', $productImage) }}" class="bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                    Editar
                </a>
                <a href="{{ route('admin.product-images.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Volver
                </a>
            </div>
            <form action="{{ route('admin.product-images.destroy', $productImage) }}" method="POST" style="display:inline;" onclick="return confirm('¿Estás seguro?')">
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

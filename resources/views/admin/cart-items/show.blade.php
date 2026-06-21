@extends('admin.layouts.admin')

@section('title', 'Item de Carrito')
@section('page-title', 'Detalles del Item de Carrito')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-2xl font-bold mb-6">Item #{{ $cartItem->id }}</h2>

        <div class="space-y-4">
            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">ID</label>
                <p class="text-gray-900">{{ $cartItem->id }}</p>
            </div>

            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">Carrito</label>
                <p class="text-gray-900">
                    <a href="{{ route('admin.carts.show', $cartItem->cart) }}" class="text-blue-600 hover:text-blue-900">
                        Carrito #{{ $cartItem->cart->id }}
                    </a>
                </p>
            </div>

            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">Producto</label>
                <p class="text-gray-900">{{ $cartItem->product->name ?? 'N/A' }}</p>
            </div>

            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">Cantidad</label>
                <p class="text-gray-900 text-lg font-bold">{{ $cartItem->quantity }}</p>
            </div>
        </div>

        <div class="flex items-center justify-between mt-8 pt-6 border-t">
            <div class="space-x-2">
                <a href="{{ route('admin.cart-items.edit', $cartItem) }}" class="bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                    Editar
                </a>
                <a href="{{ route('admin.cart-items.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Volver
                </a>
            </div>
            <form action="{{ route('admin.cart-items.destroy', $cartItem) }}" method="POST" style="display:inline;" onclick="return confirm('¿Estás seguro?')">
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

@extends('admin.layouts.admin')

@section('title', 'Item de Pedido')
@section('page-title', 'Detalles del Item de Pedido')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-2xl font-bold mb-6">Item #{{ $orderItem->id }}</h2>

        <div class="space-y-4">
            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">ID</label>
                <p class="text-gray-900">{{ $orderItem->id }}</p>
            </div>

            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">Pedido</label>
                <p class="text-gray-900">
                    <a href="{{ route('admin.orders.show', $orderItem->order) }}" class="text-blue-600 hover:text-blue-900">
                        Pedido #{{ $orderItem->order->id }}
                    </a>
                </p>
            </div>

            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">Producto</label>
                <p class="text-gray-900">{{ $orderItem->product->name ?? 'N/A' }}</p>
            </div>

            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">Cantidad</label>
                <p class="text-gray-900">{{ $orderItem->quantity }}</p>
            </div>

            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">Precio</label>
                <p class="text-gray-900 text-lg font-bold">${{ number_format($orderItem->price, 2) }}</p>
            </div>
        </div>

        <div class="flex items-center justify-between mt-8 pt-6 border-t">
            <div class="space-x-2">
                <a href="{{ route('admin.order-items.edit', $orderItem) }}" class="bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                    Editar
                </a>
                <a href="{{ route('admin.order-items.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Volver
                </a>
            </div>
            <form action="{{ route('admin.order-items.destroy', $orderItem) }}" method="POST" style="display:inline;" onclick="return confirm('¿Estás seguro?')">
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

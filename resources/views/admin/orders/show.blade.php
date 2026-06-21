@extends('admin.layouts.admin')

@section('title', 'Pedido')
@section('page-title', 'Detalles del Pedido')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-2xl font-bold mb-6">Pedido #{{ $order->id }}</h2>

        <div class="grid grid-cols-2 gap-6 mb-6">
            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">ID</label>
                <p class="text-gray-900">{{ $order->id }}</p>
            </div>

            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">Usuario</label>
                <p class="text-gray-900">{{ $order->user->name ?? 'N/A' }}</p>
            </div>

            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">Precio Total</label>
                <p class="text-gray-900 text-lg font-bold">${{ number_format($order->total_price, 2) }}</p>
            </div>

            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">Estado</label>
                <p class="text-gray-900">
                    <span class="px-2 py-1 rounded text-white {{ $order->status == 'pending' ? 'bg-yellow-500' : ($order->status == 'completed' ? 'bg-green-500' : 'bg-red-500') }}">
                        {{ $order->status }}
                    </span>
                </p>
            </div>

            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">Fecha de Creación</label>
                <p class="text-gray-900">{{ $order->created_at->format('d/m/Y H:i') }}</p>
            </div>
        </div>

        <!-- Artículos del Pedido -->
        @if($order->items->count() > 0)
        <div class="mt-8 pt-6 border-t">
            <h3 class="text-xl font-bold mb-4">Artículos del Pedido</h3>
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Producto</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Cantidad</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Precio</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($order->items as $item)
                    <tr>
                        <td class="px-4 py-2 text-gray-900">{{ $item->product->name ?? 'N/A' }}</td>
                        <td class="px-4 py-2 text-gray-900">{{ $item->quantity }}</td>
                        <td class="px-4 py-2 text-gray-900">${{ number_format($item->price, 2) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif

        <div class="flex items-center justify-between mt-8 pt-6 border-t">
            <div class="space-x-2">
                <a href="{{ route('admin.orders.edit', $order) }}" class="bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                    Editar
                </a>
                <a href="{{ route('admin.orders.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Volver
                </a>
            </div>
            <form action="{{ route('admin.orders.destroy', $order) }}" method="POST" style="display:inline;" onclick="return confirm('¿Estás seguro de que deseas eliminar este pedido?')">
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

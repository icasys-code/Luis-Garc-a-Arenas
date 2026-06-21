@extends('admin.layouts.admin')

@section('title', 'Pago')
@section('page-title', 'Detalles del Pago')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-2xl font-bold mb-6">Pago #{{ $payment->id }}</h2>

        <div class="space-y-4">
            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">ID</label>
                <p class="text-gray-900">{{ $payment->id }}</p>
            </div>

            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">Pedido</label>
                <p class="text-gray-900">
                    <a href="{{ route('admin.orders.show', $payment->order) }}" class="text-blue-600 hover:text-blue-900">
                        Pedido #{{ $payment->order->id }}
                    </a>
                </p>
            </div>

            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">Monto</label>
                <p class="text-gray-900 text-lg font-bold">${{ number_format($payment->amount, 2) }}</p>
            </div>

            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">Método de Pago</label>
                <p class="text-gray-900">{{ $payment->method }}</p>
            </div>

            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">Estado</label>
                <p class="text-gray-900">
                    <span class="px-2 py-1 rounded text-white {{ $payment->status == 'pending' ? 'bg-yellow-500' : ($payment->status == 'completed' ? 'bg-green-500' : 'bg-red-500') }}">
                        {{ $payment->status }}
                    </span>
                </p>
            </div>

            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">Fecha de Creación</label>
                <p class="text-gray-900">{{ $payment->created_at->format('d/m/Y H:i') }}</p>
            </div>
        </div>

        <div class="flex items-center justify-between mt-8 pt-6 border-t">
            <div class="space-x-2">
                <a href="{{ route('admin.payments.edit', $payment) }}" class="bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                    Editar
                </a>
                <a href="{{ route('admin.payments.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Volver
                </a>
            </div>
            <form action="{{ route('admin.payments.destroy', $payment) }}" method="POST" style="display:inline;" onclick="return confirm('¿Estás seguro?')">
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

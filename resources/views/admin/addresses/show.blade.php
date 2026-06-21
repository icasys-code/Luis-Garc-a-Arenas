@extends('admin.layouts.admin')

@section('title', 'Dirección')
@section('page-title', 'Detalles de la Dirección')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-2xl font-bold mb-6">Dirección #{{ $address->id }}</h2>

        <div class="space-y-4">
            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">ID</label>
                <p class="text-gray-900">{{ $address->id }}</p>
            </div>

            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">Usuario</label>
                <p class="text-gray-900">{{ $address->user->name ?? 'N/A' }}</p>
            </div>

            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">Calle</label>
                <p class="text-gray-900">{{ $address->street }}</p>
            </div>

            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">Ciudad</label>
                <p class="text-gray-900">{{ $address->city }}</p>
            </div>

            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">Código Postal</label>
                <p class="text-gray-900">{{ $address->postal_code }}</p>
            </div>

            <div>
                <label class="block text-gray-600 text-sm font-bold mb-2">País</label>
                <p class="text-gray-900">{{ $address->country }}</p>
            </div>
        </div>

        <div class="flex items-center justify-between mt-8 pt-6 border-t">
            <div class="space-x-2">
                <a href="{{ route('admin.addresses.edit', $address) }}" class="bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                    Editar
                </a>
                <a href="{{ route('admin.addresses.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Volver
                </a>
            </div>
            <form action="{{ route('admin.addresses.destroy', $address) }}" method="POST" style="display:inline;" onclick="return confirm('¿Estás seguro?')">
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

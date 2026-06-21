@extends('admin.layouts.admin')

@section('title', 'Crear Pedido')
@section('page-title', 'Crear Nuevo Pedido')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="bg-white rounded-lg shadow p-6">
        <form action="{{ route('admin.orders.store') }}" method="POST">
            @csrf

            <!-- Usuario -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="user_id">
                    Usuario
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('user_id') border-red-500 @enderror" 
                    id="user_id" type="text" name="user_id" value="{{ old('user_id') }}" required>
                @error('user_id')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <!-- Precio Total -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="total_price">
                    Precio Total
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('total_price') border-red-500 @enderror" 
                    id="total_price" type="number" step="0.01" name="total_price" value="{{ old('total_price') }}" required>
                @error('total_price')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <!-- Estado -->
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="status">
                    Estado
                </label>
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('status') border-red-500 @enderror" 
                    id="status" name="status" required>
                    <option value="">Seleccionar estado</option>
                    <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pendiente</option>
                    <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Completado</option>
                    <option value="cancelled" {{ old('status') == 'cancelled' ? 'selected' : '' }}>Cancelado</option>
                </select>
                @error('status')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <!-- Botones -->
            <div class="flex items-center justify-between">
                <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" 
                    type="submit">
                    Crear Pedido
                </button>
                <a href="{{ route('admin.orders.index') }}" class="text-gray-600 hover:text-gray-900">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
</div>
@endsection

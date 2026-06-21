@extends('admin.layout')

@section('title', 'Editar Usuario')

@section('content')
<div class="max-w-2xl">
    <h2 class="text-3xl font-bold text-gold mb-6">Editar Usuario</h2>

    @if($errors->any())
        <div class="bg-red-900 border border-red-500 text-red-100 px-4 py-3 rounded mb-6">
            <ul>
                @foreach($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.users.update', $user->id) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-gold font-bold mb-2">Nombre</label>
            <input type="text" name="name" required value="{{ $user->name }}" class="w-full bg-gray-900 border border-gold px-4 py-2 rounded text-white">
        </div>

        <div>
            <label class="block text-gold font-bold mb-2">Email</label>
            <input type="email" name="email" required value="{{ $user->email }}" class="w-full bg-gray-900 border border-gold px-4 py-2 rounded text-white">
        </div>

        <div>
            <label class="block text-gold font-bold mb-2">Teléfono</label>
            <input type="text" name="phone" value="{{ $user->phone }}" class="w-full bg-gray-900 border border-gold px-4 py-2 rounded text-white">
        </div>

        <div>
            <label class="block text-gold font-bold mb-2">Rol</label>
            <select name="role_id" required class="w-full bg-gray-900 border border-gold px-4 py-2 rounded text-white">
                <option value="">Selecciona un rol</option>
                @foreach($roles as $role)
                    <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex space-x-4">
            <button type="submit" class="bg-gold text-black px-6 py-2 font-bold rounded hover:bg-white transition">
                Actualizar Usuario
            </button>
            <a href="{{ route('admin.users.index') }}" class="border border-gold text-gold px-6 py-2 font-bold rounded hover:bg-gold hover:text-black transition">
                Cancelar
            </a>
        </div>
    </form>
</div>
@endsection

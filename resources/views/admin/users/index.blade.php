@extends('admin.layout')

@section('title', 'Usuarios')

@section('content')
<div class="mb-8">
    <h2 class="text-3xl font-bold text-gold mb-6">Gestión de Usuarios</h2>

    @if($users->isEmpty())
        <div class="border border-gold p-6 rounded text-center text-gray-400">
            No hay usuarios registrados.
        </div>
    @else
        <div class="border border-gold rounded overflow-hidden">
            <table class="w-full">
                <thead class="bg-gold text-black">
                    <tr>
                        <th class="px-6 py-3 text-left">Nombre</th>
                        <th class="px-6 py-3 text-left">Email</th>
                        <th class="px-6 py-3 text-left">Teléfono</th>
                        <th class="px-6 py-3 text-left">Rol</th>
                        <th class="px-6 py-3 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr class="border-t border-gold hover:bg-gray-900 transition">
                            <td class="px-6 py-3">{{ $user->name }}</td>
                            <td class="px-6 py-3 text-gray-400">{{ $user->email }}</td>
                            <td class="px-6 py-3 text-gray-400">{{ $user->phone ?? '-' }}</td>
                            <td class="px-6 py-3">
                                <span class="px-3 py-1 rounded text-sm bg-blue-900 text-blue-300">
                                    {{ $user->role->name ?? 'Sin rol' }}
                                </span>
                            </td>
                            <td class="px-6 py-3 text-center space-x-2">
                                <a href="{{ route('admin.users.edit', $user->id) }}" class="text-gold hover:text-white">Editar</a>
                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline;">
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

@extends('admin.layout')

@section('title', 'Roles')

@section('content')
<div class="mb-8">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-3xl font-bold text-gold">Gestión de Roles</h2>
        <a href="{{ route('admin.roles.create') }}" class="bg-gold text-black px-6 py-2 font-bold rounded hover:bg-white transition">
            + Nuevo Rol
        </a>
    </div>

    @if($roles->isEmpty())
        <div class="border border-gold p-6 rounded text-center text-gray-400">
            No hay roles registrados.
        </div>
    @else
        <div class="border border-gold rounded overflow-hidden">
            <table class="w-full">
                <thead class="bg-gold text-black">
                    <tr>
                        <th class="px-6 py-3 text-left">Nombre del Rol</th>
                        <th class="px-6 py-3 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($roles as $role)
                        <tr class="border-t border-gold hover:bg-gray-900 transition">
                            <td class="px-6 py-3">{{ $role->name }}</td>
                            <td class="px-6 py-3 text-center space-x-2">
                                <a href="{{ route('admin.roles.edit', $role->id) }}" class="text-gold hover:text-white">Editar</a>
                                <form action="{{ route('admin.roles.destroy', $role->id) }}" method="POST" style="display:inline;">
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

@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
<div class="mb-8">
    <h2 class="text-3xl font-bold text-gold mb-6">Dashboard</h2>
    
    <div class="grid md:grid-cols-4 gap-6">
        <div class="border border-gold p-6 rounded">
            <div class="text-gray-400 text-sm mb-2">Total de Usuarios</div>
            <div class="text-4xl font-bold text-gold">{{ $total_users }}</div>
        </div>
        
        <div class="border border-gold p-6 rounded">
            <div class="text-gray-400 text-sm mb-2">Categorías</div>
            <div class="text-4xl font-bold text-gold">{{ $total_categories }}</div>
        </div>
        
        <div class="border border-gold p-6 rounded">
            <div class="text-gray-400 text-sm mb-2">Stock Total</div>
            <div class="text-4xl font-bold text-gold">{{ $total_inventory }}</div>
        </div>
        
        <div class="border border-gold p-6 rounded">
            <div class="text-gray-400 text-sm mb-2">Estado</div>
            <div class="text-2xl font-bold text-green-500">✓ Activo</div>
        </div>
    </div>
</div>

<div class="border border-gold p-6 rounded mt-8">
    <h3 class="text-xl font-bold text-gold mb-4">Bienvenido al Panel Administrativo</h3>
    <p class="text-gray-300">Aquí puedes gestionar:</p>
    <ul class="text-gray-400 mt-4 space-y-2">
        <li>• <span class="text-gold">Categorías</span>: Espacios de comunidad, programas de ayuda y recursos</li>
        <li>• <span class="text-gold">Inventario</span>: Herramientas y recursos disponibles</li>
        <li>• <span class="text-gold">Usuarios</span>: Gestionar permisos y roles de cada usuario</li>
        <li>• <span class="text-gold">Roles</span>: Crear y administrar roles del sistema</li>
    </ul>
</div>
@endsection

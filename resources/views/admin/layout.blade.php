<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Panel Administrativo') - ClearMind</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .gold { color: #D4AF37; }
        .bg-gold { background: #D4AF37; }
        .text-gold { color: #D4AF37; }
        .border-gold { border-color: #D4AF37; }
        body { background: #000000; color: #FFFFFF; }
    </style>
</head>
<body class="bg-black text-white">

<!-- NAVBAR -->
<nav class="border-b border-gold bg-black">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold"><span class="gold">Clear</span> Mind - Admin</h1>
        <a href="{{ route('home') }}" class="gold hover:text-white transition">← Volver al sitio</a>
    </div>
</nav>

<!-- SIDEBAR Y CONTENIDO -->
<div class="flex">
    <!-- SIDEBAR -->
    <aside class="w-64 border-r border-gold p-6 min-h-screen">
        <div class="space-y-4">
            <a href="{{ route('admin.dashboard') }}" class="block py-2 px-4 rounded text-gold hover:bg-gold hover:text-black transition">
                📊 Dashboard
            </a>
            <a href="{{ route('admin.categories.index') }}" class="block py-2 px-4 rounded text-gold hover:bg-gold hover:text-black transition">
                🏷️ Categorías
            </a>
            <a href="{{ route('admin.inventories.index') }}" class="block py-2 px-4 rounded text-gold hover:bg-gold hover:text-black transition">
                📦 Inventario
            </a>
            <a href="{{ route('admin.users.index') }}" class="block py-2 px-4 rounded text-gold hover:bg-gold hover:text-black transition">
                👥 Usuarios
            </a>
            <a href="{{ route('admin.roles.index') }}" class="block py-2 px-4 rounded text-gold hover:bg-gold hover:text-black transition">
                🔐 Roles
            </a>
        </div>
    </aside>

    <!-- CONTENIDO PRINCIPAL -->
    <main class="flex-1 p-8">
        @if(session('success'))
            <div class="bg-green-900 border border-green-500 text-green-100 px-4 py-3 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-900 border border-red-500 text-red-100 px-4 py-3 rounded mb-6">
                {{ session('error') }}
            </div>
        @endif

        @yield('content')
    </main>
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Panel de Administración')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 text-white shadow-lg overflow-y-auto">
            <!-- Logo -->
            <div class="p-6 border-b border-gray-700">
                <h1 class="text-2xl font-bold">Admin Panel</h1>
                <p class="text-gray-400 text-sm mt-1">Panel de Administración</p>
            </div>

            <!-- Navigation -->
            <nav class="p-6 space-y-2">
                <div class="mb-6">
                    <h2 class="text-gray-400 text-xs uppercase tracking-wider font-semibold mb-3">Gestión</h2>
                    
                    <a href="{{ route('admin.users.index') }}" class="block px-4 py-2 rounded hover:bg-gray-800 transition {{ request()->routeIs('admin.users.*') ? 'bg-blue-600' : '' }}">
                        <span class="text-sm">👥 Usuarios</span>
                    </a>
                    <a href="{{ route('admin.roles.index') }}" class="block px-4 py-2 rounded hover:bg-gray-800 transition {{ request()->routeIs('admin.roles.*') ? 'bg-blue-600' : '' }}">
                        <span class="text-sm">🔐 Roles</span>
                    </a>
                </div>

                <div class="mb-6">
                    <h2 class="text-gray-400 text-xs uppercase tracking-wider font-semibold mb-3">Productos</h2>
                    
                    <a href="{{ route('admin.categories.index') }}" class="block px-4 py-2 rounded hover:bg-gray-800 transition {{ request()->routeIs('admin.categories.*') ? 'bg-blue-600' : '' }}">
                        <span class="text-sm">📁 Categorías</span>
                    </a>
                    <a href="{{ route('admin.products.index') }}" class="block px-4 py-2 rounded hover:bg-gray-800 transition {{ request()->routeIs('admin.products.*') ? 'bg-blue-600' : '' }}">
                        <span class="text-sm">📦 Productos</span>
                    </a>
                    <a href="{{ route('admin.product-images.index') }}" class="block px-4 py-2 rounded hover:bg-gray-800 transition {{ request()->routeIs('admin.product-images.*') ? 'bg-blue-600' : '' }}">
                        <span class="text-sm">🖼️ Imágenes Producto</span>
                    </a>
                    <a href="{{ route('admin.product-specifications.index') }}" class="block px-4 py-2 rounded hover:bg-gray-800 transition {{ request()->routeIs('admin.product-specifications.*') ? 'bg-blue-600' : '' }}">
                        <span class="text-sm">📋 Especificaciones</span>
                    </a>
                    <a href="{{ route('admin.inventories.index') }}" class="block px-4 py-2 rounded hover:bg-gray-800 transition {{ request()->routeIs('admin.inventories.*') ? 'bg-blue-600' : '' }}">
                        <span class="text-sm">📊 Inventarios</span>
                    </a>
                </div>

                <div class="mb-6">
                    <h2 class="text-gray-400 text-xs uppercase tracking-wider font-semibold mb-3">Ventas</h2>
                    
                    <a href="{{ route('admin.orders.index') }}" class="block px-4 py-2 rounded hover:bg-gray-800 transition {{ request()->routeIs('admin.orders.*') ? 'bg-blue-600' : '' }}">
                        <span class="text-sm">🛒 Pedidos</span>
                    </a>
                    <a href="{{ route('admin.order-items.index') }}" class="block px-4 py-2 rounded hover:bg-gray-800 transition {{ request()->routeIs('admin.order-items.*') ? 'bg-blue-600' : '' }}">
                        <span class="text-sm">📦 Items Pedido</span>
                    </a>
                    <a href="{{ route('admin.payments.index') }}" class="block px-4 py-2 rounded hover:bg-gray-800 transition {{ request()->routeIs('admin.payments.*') ? 'bg-blue-600' : '' }}">
                        <span class="text-sm">💳 Pagos</span>
                    </a>
                </div>

                <div class="mb-6">
                    <h2 class="text-gray-400 text-xs uppercase tracking-wider font-semibold mb-3">Carrito</h2>
                    
                    <a href="{{ route('admin.carts.index') }}" class="block px-4 py-2 rounded hover:bg-gray-800 transition {{ request()->routeIs('admin.carts.*') ? 'bg-blue-600' : '' }}">
                        <span class="text-sm">🛍️ Carritos</span>
                    </a>
                    <a href="{{ route('admin.cart-items.index') }}" class="block px-4 py-2 rounded hover:bg-gray-800 transition {{ request()->routeIs('admin.cart-items.*') ? 'bg-blue-600' : '' }}">
                        <span class="text-sm">📝 Items Carrito</span>
                    </a>
                </div>

                <div>
                    <h2 class="text-gray-400 text-xs uppercase tracking-wider font-semibold mb-3">Otros</h2>
                    
                    <a href="{{ route('admin.addresses.index') }}" class="block px-4 py-2 rounded hover:bg-gray-800 transition {{ request()->routeIs('admin.addresses.*') ? 'bg-blue-600' : '' }}">
                        <span class="text-sm">📍 Direcciones</span>
                    </a>
                    <a href="{{ route('admin.reviews.index') }}" class="block px-4 py-2 rounded hover:bg-gray-800 transition {{ request()->routeIs('admin.reviews.*') ? 'bg-blue-600' : '' }}">
                        <span class="text-sm">⭐ Reseñas</span>
                    </a>
                </div>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
                    <h2 class="text-2xl font-bold text-gray-900">@yield('page-title', 'Dashboard')</h2>
                    <div class="flex items-center space-x-4">
                        <span class="text-gray-600 text-sm">Bienvenido</span>
                    </div>
                </div>
            </header>

            <!-- Content Area -->
            <main class="flex-1 overflow-auto">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                    <!-- Flash Messages -->
                    @if($message = Session::get('success'))
                        <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                            {{ $message }}
                        </div>
                    @endif

                    @if($message = Session::get('error'))
                        <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                            {{ $message }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @yield('content')
                </div>
            </main>

            <!-- Footer -->
            <footer class="bg-white border-t border-gray-200 py-4">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <p class="text-sm text-gray-600">© 2026 Panel de Administración. Todos los derechos reservados.</p>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>

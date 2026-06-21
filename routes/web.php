<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\PracticasController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\OrderItemController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\CartItemController;
use App\Http\Controllers\Admin\AddressController;
use App\Http\Controllers\Admin\InventoryController;
use App\Http\Controllers\Admin\ProductImageController;
use App\Http\Controllers\Admin\ProductSpecificationController;
use App\Http\Controllers\Admin\RoleController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/programa', function () {
    return view('Programa');
})->name('programa');

Route::get('/comunidad', function () {
    return view('Comunidad');
})->name('comunidad');

Route::get('/terminos', function () {
    return view('terms');
})->name('terms');

Route::get('/privacidad', function () {
    return view('privacy');
})->name('privacy');

Route::get('/contact', [PracticasController::class, 'ver_contacto'])->name('contact');
Route::get('/contacto', [PracticasController::class, 'ver_contacto'])->name('contacto');
Route::post('/contacto', [PracticasController::class, 'enviar_contacto'])->name('contact.send');

Route::get('/marketplace', function () {
    return view('marketplace');
})->name('marketplace');

// Ruta de prueba para enviar un correo de prueba al administrador (no autenticada, usar solo en entorno de desarrollo)
Route::get('/contacto/send-test', function () {
    try {
        $data = [
            'name' => 'Prueba',
            'phone' => '0000000000',
            'email' => 'prueba@example.com',
            'message' => 'Este es un correo de prueba enviado desde la ruta de verificación.'
        ];

        \Illuminate\Support\Facades\Mail::to('garciaarenasluis53@gmail.com')->send(new \App\Mail\ContactFormMail($data));

        return response('Correo de prueba enviado (revisa logs o inbox).', 200);
    } catch (\Exception $e) {
        Log::error('Error enviando correo de prueba: '.$e->getMessage());
        return response('Error al enviar correo de prueba: '.$e->getMessage(), 500);
    }
});

Route::get('/terminos', function () {
    return view('terms');
})->name('terms');


Route::get('/admin/dashboard', function () {
    $total_users = App\Models\User::count();
    $total_categories = App\Models\Categorie::count();
    $total_inventory = App\Models\Inventorie::sum('stock');

    return view('admin.dashboard', compact('total_users', 'total_categories', 'total_inventory'));
})->name('admin.dashboard');

// ADMIN ROUTES - CRUD Resources
Route::prefix('admin')->name('admin.')->group(function () {
    // Users
    Route::resource('users', UserController::class);
    
    // Products
    Route::resource('products', ProductController::class);
    
    // Categories
    Route::resource('categories', CategoryController::class);
    
    // Orders
    Route::resource('orders', OrderController::class);
    
    // Order Items
    Route::resource('order-items', OrderItemController::class);
    
    // Payments
    Route::resource('payments', PaymentController::class);
    
    // Reviews
    Route::resource('reviews', ReviewController::class);
    
    // Carts
    Route::resource('carts', CartController::class);
    
    // Cart Items
    Route::resource('cart-items', CartItemController::class);
    
    // Addresses
    Route::resource('addresses', AddressController::class);
    
    // Inventories
    Route::resource('inventories', InventoryController::class);
    
    // Product Images
    Route::resource('product-images', ProductImageController::class);
    
    // Product Specifications
    Route::resource('product-specifications', ProductSpecificationController::class);
    
    // Roles
    Route::resource('roles', RoleController::class);
});



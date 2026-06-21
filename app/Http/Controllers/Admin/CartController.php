<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::with('user')->paginate(10);
        return view('admin.carts.index', compact('carts'));
    }

    public function create()
    {
        $users = User::all();
        return view('admin.carts.create', compact('users'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
        ]);

        Cart::create($validated);
        return redirect()->route('admin.carts.index')->with('success', 'Carrito creado correctamente');
    }

    public function show(Cart $cart)
    {
        $cart->load('user', 'items');
        return view('admin.carts.show', compact('cart'));
    }

    public function edit(Cart $cart)
    {
        $users = User::all();
        return view('admin.carts.edit', compact('cart', 'users'));
    }

    public function update(Request $request, Cart $cart)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
        ]);

        $cart->update($validated);
        return redirect()->route('admin.carts.index')->with('success', 'Carrito actualizado correctamente');
    }

    public function destroy(Cart $cart)
    {
        $cart->delete();
        return redirect()->route('admin.carts.index')->with('success', 'Carrito eliminado correctamente');
    }
}

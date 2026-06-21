<?php

namespace App\Http\Controllers\Admin;

use App\Models\Carte_item;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartItemController extends Controller
{
    public function index()
    {
        $cartItems = Carte_item::with('cart', 'product')->paginate(10);
        return view('admin.cart-items.index', compact('cartItems'));
    }

    public function create()
    {
        $carts = Cart::all();
        $products = Product::all();
        return view('admin.cart-items.create', compact('carts', 'products'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'cart_id' => 'required|exists:carts,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        Carte_item::create($validated);
        return redirect()->route('admin.cart-items.index')->with('success', 'Item de carrito creado correctamente');
    }

    public function show(Carte_item $cartItem)
    {
        $cartItem->load('cart', 'product');
        return view('admin.cart-items.show', compact('cartItem'));
    }

    public function edit(Carte_item $cartItem)
    {
        $carts = Cart::all();
        $products = Product::all();
        return view('admin.cart-items.edit', compact('cartItem', 'carts', 'products'));
    }

    public function update(Request $request, Carte_item $cartItem)
    {
        $validated = $request->validate([
            'cart_id' => 'required|exists:carts,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $cartItem->update($validated);
        return redirect()->route('admin.cart-items.index')->with('success', 'Item de carrito actualizado correctamente');
    }

    public function destroy(Carte_item $cartItem)
    {
        $cartItem->delete();
        return redirect()->route('admin.cart-items.index')->with('success', 'Item de carrito eliminado correctamente');
    }
}

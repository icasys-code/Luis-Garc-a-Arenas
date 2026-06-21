<?php

namespace App\Http\Controllers\Admin;

use App\Models\Inventorie;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InventoryController extends Controller
{
    public function index()
    {
        $inventories = Inventorie::with('product')->paginate(10);
        return view('admin.inventories.index', compact('inventories'));
    }

    public function create()
    {
        $products = Product::all();
        return view('admin.inventories.create', compact('products'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:0',
        ]);

        Inventorie::create($validated);
        return redirect()->route('admin.inventories.index')->with('success', 'Inventario creado correctamente');
    }

    public function show(Inventorie $inventory)
    {
        $inventory->load('product');
        return view('admin.inventories.show', compact('inventory'));
    }

    public function edit(Inventorie $inventory)
    {
        $products = Product::all();
        return view('admin.inventories.edit', compact('inventory', 'products'));
    }

    public function update(Request $request, Inventorie $inventory)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:0',
        ]);

        $inventory->update($validated);
        return redirect()->route('admin.inventories.index')->with('success', 'Inventario actualizado correctamente');
    }

    public function destroy(Inventorie $inventory)
    {
        $inventory->delete();
        return redirect()->route('admin.inventories.index')->with('success', 'Inventario eliminado correctamente');
    }
}

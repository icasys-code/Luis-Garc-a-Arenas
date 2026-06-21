<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product_imagen;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductImageController extends Controller
{
    public function index()
    {
        $images = Product_imagen::with('product')->paginate(10);
        return view('admin.product-images.index', compact('images'));
    }

    public function create()
    {
        $products = Product::all();
        return view('admin.product-images.create', compact('products'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'image_url' => 'required|string',
        ]);

        Product_imagen::create($validated);
        return redirect()->route('admin.product-images.index')->with('success', 'Imagen de producto creada correctamente');
    }

    public function show(Product_imagen $productImage)
    {
        $productImage->load('product');
        return view('admin.product-images.show', compact('productImage'));
    }

    public function edit(Product_imagen $productImage)
    {
        $products = Product::all();
        return view('admin.product-images.edit', compact('productImage', 'products'));
    }

    public function update(Request $request, Product_imagen $productImage)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'image_url' => 'required|string',
        ]);

        $productImage->update($validated);
        return redirect()->route('admin.product-images.index')->with('success', 'Imagen de producto actualizada correctamente');
    }

    public function destroy(Product_imagen $productImage)
    {
        $productImage->delete();
        return redirect()->route('admin.product-images.index')->with('success', 'Imagen de producto eliminada correctamente');
    }
}

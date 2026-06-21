<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product_specification;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductSpecificationController extends Controller
{
    public function index()
    {
        $specifications = Product_specification::with('product')->paginate(10);
        return view('admin.product-specifications.index', compact('specifications'));
    }

    public function create()
    {
        $products = Product::all();
        return view('admin.product-specifications.create', compact('products'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'name' => 'required|string|max:255',
            'value' => 'required|string',
        ]);

        Product_specification::create($validated);
        return redirect()->route('admin.product-specifications.index')->with('success', 'Especificación de producto creada correctamente');
    }

    public function show(Product_specification $productSpecification)
    {
        $productSpecification->load('product');
        return view('admin.product-specifications.show', compact('productSpecification'));
    }

    public function edit(Product_specification $productSpecification)
    {
        $products = Product::all();
        return view('admin.product-specifications.edit', compact('productSpecification', 'products'));
    }

    public function update(Request $request, Product_specification $productSpecification)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'name' => 'required|string|max:255',
            'value' => 'required|string',
        ]);

        $productSpecification->update($validated);
        return redirect()->route('admin.product-specifications.index')->with('success', 'Especificación de producto actualizada correctamente');
    }

    public function destroy(Product_specification $productSpecification)
    {
        $productSpecification->delete();
        return redirect()->route('admin.product-specifications.index')->with('success', 'Especificación de producto eliminada correctamente');
    }
}

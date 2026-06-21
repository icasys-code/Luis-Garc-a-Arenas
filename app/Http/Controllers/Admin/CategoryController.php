<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Categorie::paginate(10);
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Categorie::create($validated);
        return redirect()->route('admin.categories.index')->with('success', 'Categoría creada correctamente');
    }

    public function show(Categorie $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    public function edit(Categorie $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Categorie $category)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $category->update($validated);
        return redirect()->route('admin.categories.index')->with('success', 'Categoría actualizada correctamente');
    }

    public function destroy(Categorie $category)
    {
        $category->delete();
        return redirect()->route('admin.categories.index')->with('success', 'Categoría eliminada correctamente');
    }
}

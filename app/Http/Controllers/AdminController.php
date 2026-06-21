<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Categorie;
use App\Models\Role;
use App\Models\Inventorie;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Dashboard
    public function dashboard()
    {
        $total_users = User::count();
        $total_categories = Categorie::count();
        $total_inventory = Inventorie::sum('stock');
        
        return view('admin.dashboard', [
            'total_users' => $total_users,
            'total_categories' => $total_categories,
            'total_inventory' => $total_inventory,
        ]);
    }

    // CATEGORIAS
    public function categories()
    {
        $categories = Categorie::all();
        return view('admin.categories.index', ['categories' => $categories]);
    }

    public function create_category()
    {
        return view('admin.categories.create');
    }

    public function store_category(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'active' => 'boolean',
        ]);

        Categorie::create($validated);
        return redirect()->route('admin.categories.index')->with('success', 'Categoría creada correctamente');
    }

    public function edit_category($id)
    {
        $category = Categorie::findOrFail($id);
        return view('admin.categories.edit', ['category' => $category]);
    }

    public function update_category(Request $request, $id)
    {
        $category = Categorie::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'active' => 'boolean',
        ]);

        $category->update($validated);
        return redirect()->route('admin.categories.index')->with('success', 'Categoría actualizada correctamente');
    }

    public function delete_category($id)
    {
        $category = Categorie::findOrFail($id);
        $category->delete();
        return redirect()->route('admin.categories.index')->with('success', 'Categoría eliminada correctamente');
    }

    // INVENTARIO
    public function inventory()
    {
        $items = Inventorie::with('product')->get();
        return view('admin.inventory.index', ['items' => $items]);
    }

    public function create_inventory()
    {
        $products = Product::all();
        return view('admin.inventory.create', ['products' => $products]);
    }

    public function store_inventory(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'stock' => 'required|integer|min:0',
        ]);

        Inventorie::create($validated);
        return redirect()->route('admin.inventories.index')->with('success', 'Inventario creado correctamente');
    }

    public function edit_inventory($id)
    {
        $item = Inventorie::findOrFail($id);
        $products = Product::all();
        return view('admin.inventory.edit', ['item' => $item, 'products' => $products]);
    }

    public function update_inventory(Request $request, $id)
    {
        $item = Inventorie::findOrFail($id);
        
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'stock' => 'required|integer|min:0',
        ]);

        $item->update($validated);
        return redirect()->route('admin.inventories.index')->with('success', 'Inventario actualizado correctamente');
    }

    public function delete_inventory($id)
    {
        $item = Inventorie::findOrFail($id);
        $item->delete();
        return redirect()->route('admin.inventories.index')->with('success', 'Inventario eliminado correctamente');
    }

    // USUARIOS
    public function users()
    {
        $users = User::with('role')->get();
        return view('admin.users.index', ['users' => $users]);
    }

    public function edit_user($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        return view('admin.users.edit', ['user' => $user, 'roles' => $roles]);
    }

    public function update_user(Request $request, $id)
    {
        $user = User::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'phone' => 'nullable|string|max:20',
            'role_id' => 'required|exists:roles,id',
        ]);

        $user->update($validated);
        return redirect()->route('admin.users.index')->with('success', 'Usuario actualizado correctamente');
    }

    public function delete_user($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'Usuario eliminado correctamente');
    }

    // ROLES
    public function roles()
    {
        $roles = Role::all();
        return view('admin.roles.index', ['roles' => $roles]);
    }

    public function create_role()
    {
        return view('admin.roles.create');
    }

    public function store_role(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:roles',
        ]);

        Role::create($validated);
        return redirect()->route('admin.roles.index')->with('success', 'Rol creado correctamente');
    }

    public function edit_role($id)
    {
        $role = Role::findOrFail($id);
        return view('admin.roles.edit', ['role' => $role]);
    }

    public function update_role(Request $request, $id)
    {
        $role = Role::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:roles,name,' . $id,
        ]);

        $role->update($validated);
        return redirect()->route('admin.roles.index')->with('success', 'Rol actualizado correctamente');
    }

    public function delete_role($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        return redirect()->route('admin.roles.index')->with('success', 'Rol eliminado correctamente');
    }
}

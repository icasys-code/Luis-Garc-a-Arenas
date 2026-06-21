<?php

namespace App\Http\Controllers\Admin;

use App\Models\Addresse;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddressController extends Controller
{
    public function index()
    {
        $addresses = Addresse::with('user')->paginate(10);
        return view('admin.addresses.index', compact('addresses'));
    }

    public function create()
    {
        $users = User::all();
        return view('admin.addresses.create', compact('users'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'street' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'postal_code' => 'required|string|max:20',
            'country' => 'required|string|max:255',
        ]);

        Addresse::create($validated);
        return redirect()->route('admin.addresses.index')->with('success', 'Dirección creada correctamente');
    }

    public function show(Addresse $address)
    {
        $address->load('user');
        return view('admin.addresses.show', compact('address'));
    }

    public function edit(Addresse $address)
    {
        $users = User::all();
        return view('admin.addresses.edit', compact('address', 'users'));
    }

    public function update(Request $request, Addresse $address)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'street' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'postal_code' => 'required|string|max:20',
            'country' => 'required|string|max:255',
        ]);

        $address->update($validated);
        return redirect()->route('admin.addresses.index')->with('success', 'Dirección actualizada correctamente');
    }

    public function destroy(Addresse $address)
    {
        $address->delete();
        return redirect()->route('admin.addresses.index')->with('success', 'Dirección eliminada correctamente');
    }
}

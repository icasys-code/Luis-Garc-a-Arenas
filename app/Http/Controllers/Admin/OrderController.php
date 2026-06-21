<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('user')->paginate(10);
        return view('admin.orders.index', compact('orders'));
    }

    public function create()
    {
        return view('admin.orders.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'total_price' => 'required|numeric|min:0',
            'status' => 'required|string',
        ]);

        Order::create($validated);
        return redirect()->route('admin.orders.index')->with('success', 'Pedido creado correctamente');
    }

    public function show(Order $order)
    {
        $order->load('user', 'items');
        return view('admin.orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        return view('admin.orders.edit', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $validated = $request->validate([
            'total_price' => 'required|numeric|min:0',
            'status' => 'required|string',
        ]);

        $order->update($validated);
        return redirect()->route('admin.orders.index')->with('success', 'Pedido actualizado correctamente');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('admin.orders.index')->with('success', 'Pedido eliminado correctamente');
    }
}

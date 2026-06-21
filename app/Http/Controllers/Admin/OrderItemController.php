<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order_item;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderItemController extends Controller
{
    public function index()
    {
        $orderItems = Order_item::with('order', 'product')->paginate(10);
        return view('admin.order-items.index', compact('orderItems'));
    }

    public function create()
    {
        $orders = Order::all();
        $products = Product::all();
        return view('admin.order-items.create', compact('orders', 'products'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'order_id' => 'required|exists:orders,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
        ]);

        Order_item::create($validated);
        return redirect()->route('admin.order-items.index')->with('success', 'Item de pedido creado correctamente');
    }

    public function show(Order_item $orderItem)
    {
        $orderItem->load('order', 'product');
        return view('admin.order-items.show', compact('orderItem'));
    }

    public function edit(Order_item $orderItem)
    {
        $orders = Order::all();
        $products = Product::all();
        return view('admin.order-items.edit', compact('orderItem', 'orders', 'products'));
    }

    public function update(Request $request, Order_item $orderItem)
    {
        $validated = $request->validate([
            'order_id' => 'required|exists:orders,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
        ]);

        $orderItem->update($validated);
        return redirect()->route('admin.order-items.index')->with('success', 'Item de pedido actualizado correctamente');
    }

    public function destroy(Order_item $orderItem)
    {
        $orderItem->delete();
        return redirect()->route('admin.order-items.index')->with('success', 'Item de pedido eliminado correctamente');
    }
}

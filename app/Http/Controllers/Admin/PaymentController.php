<?php

namespace App\Http\Controllers\Admin;

use App\Models\Payment;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::with('order')->paginate(10);
        return view('admin.payments.index', compact('payments'));
    }

    public function create()
    {
        $orders = Order::all();
        return view('admin.payments.create', compact('orders'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'order_id' => 'required|exists:orders,id',
            'amount' => 'required|numeric|min:0',
            'method' => 'required|string',
            'status' => 'required|string',
        ]);

        Payment::create($validated);
        return redirect()->route('admin.payments.index')->with('success', 'Pago creado correctamente');
    }

    public function show(Payment $payment)
    {
        $payment->load('order');
        return view('admin.payments.show', compact('payment'));
    }

    public function edit(Payment $payment)
    {
        $orders = Order::all();
        return view('admin.payments.edit', compact('payment', 'orders'));
    }

    public function update(Request $request, Payment $payment)
    {
        $validated = $request->validate([
            'amount' => 'required|numeric|min:0',
            'method' => 'required|string',
            'status' => 'required|string',
        ]);

        $payment->update($validated);
        return redirect()->route('admin.payments.index')->with('success', 'Pago actualizado correctamente');
    }

    public function destroy(Payment $payment)
    {
        $payment->delete();
        return redirect()->route('admin.payments.index')->with('success', 'Pago eliminado correctamente');
    }
}

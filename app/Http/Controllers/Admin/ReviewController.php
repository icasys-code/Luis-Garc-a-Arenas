<?php

namespace App\Http\Controllers\Admin;

use App\Models\Review;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::with('product', 'user')->paginate(10);
        return view('admin.reviews.index', compact('reviews'));
    }

    public function create()
    {
        $products = Product::all();
        $users = User::all();
        return view('admin.reviews.create', compact('products', 'users'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'user_id' => 'required|exists:users,id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string',
        ]);

        Review::create($validated);
        return redirect()->route('admin.reviews.index')->with('success', 'Reseña creada correctamente');
    }

    public function show(Review $review)
    {
        $review->load('product', 'user');
        return view('admin.reviews.show', compact('review'));
    }

    public function edit(Review $review)
    {
        $products = Product::all();
        $users = User::all();
        return view('admin.reviews.edit', compact('review', 'products', 'users'));
    }

    public function update(Request $request, Review $review)
    {
        $validated = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string',
        ]);

        $review->update($validated);
        return redirect()->route('admin.reviews.index')->with('success', 'Reseña actualizada correctamente');
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return redirect()->route('admin.reviews.index')->with('success', 'Reseña eliminada correctamente');
    }
}

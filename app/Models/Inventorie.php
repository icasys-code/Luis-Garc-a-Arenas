<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventorie extends Model
{
    use HasFactory;
    protected $fillable = [
    'inventories',
    'product_id',
    'stock',
];

    // Relación con Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

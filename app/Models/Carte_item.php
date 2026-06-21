<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carte_item extends Model
{
    use HasFactory;
    protected $fillable = [
        'carte_items',
        'carte_id',
        'product_id',
        'quantity',
        'price'
    ];
}

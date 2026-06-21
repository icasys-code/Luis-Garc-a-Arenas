<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
            'products',
            'category_id',
            'name',
            'slug',
            'short description',
            'description',
            'price',
            'weight',
            'unit',
            'is_featured',
            'active',
    ];

    // Relación con Inventorie
    public function inventory()
    {
        return $this->hasOne(Inventorie::class);
    }

    // Relación con Categorie
    public function category()
    {
        return $this->belongsTo(Categorie::class);
    }
}

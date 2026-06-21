<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productspecification extends Model
{
    use HasFactory;
    protected $fillable = [
            'product_specifications', 
            'product_id',
            'calories',
            'total_fat', 
            'saturated_fat', 
            'trans_fat', 
            'carbohydrates', 
            'sugars', 
            'protein', 
            'vitamins',
            'minerals',
            'benefits'

    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productimagen extends Model
{
    use HasFactory;
    protected $fillable = [
            'product_images',
            'product_id',
            'image_path',
            'is_primary'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addresse extends Model
{
    use HasFactory;
    protected $fillable = [
        'addresses',
        'user_id',
        'street',
        'city',
        'state',
        'postal_code',
        'country'
    ];
}

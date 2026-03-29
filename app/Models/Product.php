<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'marca',
        'description',
        'price',
        'stock',
        'category',
        'especificaciones',
        'imagen',
        'featured',
    ];

    protected $casts = [
        'price' => 'float',
        'stock' => 'integer',
        'featured' => 'boolean',
    ];
}
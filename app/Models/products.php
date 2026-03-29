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

    public function imagenes()
    {
        return $this->hasMany(ImagenProduct::class);
    }
}

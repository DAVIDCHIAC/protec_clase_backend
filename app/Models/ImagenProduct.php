<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImagenProduct extends Model
{
    protected $table = 'imagenes_product';

    protected $fillable = [
        'url',
        'product_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

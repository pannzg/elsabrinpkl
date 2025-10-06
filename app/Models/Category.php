<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description', 'image'];

    // Semua produk
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    // Hanya produk aktif
    public function activeProducts()
    {
        return $this->hasMany(Product::class)->where('is_active', true);
    }
}

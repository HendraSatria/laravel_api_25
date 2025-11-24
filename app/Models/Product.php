<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
       
        'name',
        'code',
        'description',
        'price',
        'product_category_id'
    ];

    // Relasi ke kategori
    public function category()
    {
        return $this->belongsTo(ProductCategories::class, 'product_category_id');
    }

    // Relasi ke product variants (opsional)
    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }
}

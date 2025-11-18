<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategories extends Model
{
    protected $fillable = ['name', 'description']; //field yang boleh diisi secara massal

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

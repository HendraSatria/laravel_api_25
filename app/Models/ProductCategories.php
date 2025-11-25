<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductCategories extends Model
{
    protected $guarded = ['id']; //field yang boleh diisi secara massal

    public function products() :HasMany
    {
        return $this->hasMany(related:Product::class);
    }
    public function variants()
    {
        return $this->hasMany(related:ProductVariant::class);
    }
}



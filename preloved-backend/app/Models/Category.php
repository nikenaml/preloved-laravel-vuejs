<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description'];

    public function products()
    {
        return $this->hasMany(Product::class, 'categories_id');
        // return $this->hasMany(Category::class, 'parent_id');
    }

}

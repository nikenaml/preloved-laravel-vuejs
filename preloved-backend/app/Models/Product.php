<?php
//untuk menambahkan relasi itu ditaruh di file model
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    // use SoftDeletes;

    // protected $fillable = [
    //     'name', 'type', 'description', 'price', 'slug', 'quantity'
    // ];

    // protected $hidden = [

    // ];

    // // relasi antara galeri product dengan product itu sendri yang datanya diambil secara langsung
    // // relasi ke galeri
    // public function galleries(){
    //     return $this->hasMany(ProductGallery::class,'products_id');
    // }

    use SoftDeletes;

    protected $fillable = [
        'categories_id', 'genders_id', 'name', 'type', 'description', 'price', 'slug', 'quantity',
    ];

    protected $hidden = [

    ];

    const PRICES = [
        'Less than 50000',
        'From 50000 to 100000',
        'From 100000 to 500000',
        'More than 500000',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id', 'id');
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class, 'genders_id', 'id');
    }

    public function galleries()
    {
        return $this->hasMany(ProductGallery::class, 'products_id');
    }

    public function scopeWithFilters($query)
    {
        return $query->when(count(request()->input('categories', [])), function ($query) {
            $query->whereIn('categories_id', request()->input('categories'));
        })
        ->when(count(request()->input('genders', [])), function ($query) {
            $query->whereIn('genders_id', request()->input('genders'));
        })
        ->when(count(request()->input('prices', [])), function ($query) {
            $query->where(function ($query) {
                $query->when(in_array(0, request()->input('prices')), function ($query) {
                    $query->orWhere('price', '<', '50000', request()->input('categories'));
                })
                ->when(in_array(1, request()->input('prices')), function ($query) {
                    $query->orWhereBetween('price', ['50000', '100000'], request()->input('categories'));
                })
                ->when(in_array(2, request()->input('prices')), function ($query) {
                    $query->orWhereBetween('price', ['100000', '500000'], request()->input('categories'));
                })
                ->when(in_array(3, request()->input('prices')), function ($query) {
                    $query->orWhere('price', '>', '500000', request()->input('categories'));
                });
            });
        });
           
    }
}

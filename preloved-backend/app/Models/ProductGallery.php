<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductGallery extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'products_id','photo','is_default'
    ];

    protected $hidden = [

    ];

    // relasi dengan modelnya milik product
    public function product(){
        return $this->belongsTo(Product::class,'products_id','id');
        // kenapa belongsTo = karna si produk galeri ini adalah milik dari si product
        // field yang berelasi = products_id
        // sumber yang berelasi = id
        // kenapa withTrashed() = karena pada awalnya setelah gambar di create, gambar tersebut tidak muncul, bisa kemungkinan besar, data sebelumnya
        // pernah ke hapus jadinya fotonya ga tampil, solvingnya pake cara withTrashed()
    }

    // accessor = mengganti url yang awalnya tidak ada http menjadi ada http fullnya agar bisa digunakan saat menggunakan api
    // accessor = untuk mengganti url photo
    // agar api bisa ambil data urlnya

    // mengubah field foto yang ada di database
    // ini menggunakan function bawaan dari laravel (lihat dokumentasi laravel)
    // public function getFirstNameAttribute($value);
    // artinya get(Nama field yang di database misal id_product berarti jadi IdProduct, _ diganti jadi huruf awalan menjadi kapital)
    // value itu di dapat dari isi database di field tersebut
    public function getPhotoAttribute($value){
        // untuk nambahin fungsi url
        // kenapa storage? karna gambar atau file akan masuk ke dalam folder storage
        return url('storage/' . $value);
        // jika ingin menggunakan file storage yang ada di dalam laravel, harus menjalankan perintah laravel terlebih dahulu
        // php artisan storage:link
        // yang dimana artinya proses menempelkan antara folder storage yang ada di laravel,
        // ditaro di publik, jadi file tsb bisa di akses langsung oleh user apapun
    }
}

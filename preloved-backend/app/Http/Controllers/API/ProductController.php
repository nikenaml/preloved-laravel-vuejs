<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
// memanggil model produk
use App\Models\Product;
use App\Models\Gender;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //fungsi all untuk mengambil data product berdasarkan id, nama, slug
    // lalu di filter berdasarkan harga dari range, misalnya harga dari 10k ke 20k dapat buat seperti itu ke dalam satu fungsi

    // public function all(Request $request)
    // {
    //     // ambil berdasarkan id, misalkan api/products?id=1
    //     $id = $request->input('id');
    //     $limit = $request->input('limit', 10);
    //     $name = $request->input('name');
    //     $slug = $request->input('slug');
    //     $type = $request->input('type');
    //     $price_from = $request->input('price_from');
    //     $price_to = $request->input('price_to');

    //     // fungsi untuk ambil datanya, parsing datanya tidak menggunakan view tapi menggunakan response formatter
    //     // ini terpisah karna biasanya datanya 1
    //     if($id)
    //     {
    //         // jika datanya ada, cari dengan id tersebut dengan relasi galleries
    //         $product = Product::with('galleries')->find($id);

    //         // jika produknya ada maka mengembalikan dengan return sukses, menampilkan data produk dan pesannya
    //         if($product)
    //             return ResponseFormatter::success($product,'Data produk berhasil diambil');
            
    //         // jika gagal akan mengembalikan error dengan data produk null dan pesan error beserta kodenya
    //         else
    //             return ResponseFormatter::error(null,'Data produk tidak ada', 404);
    //     }

    //     // ini terpisah karna biasanya datanya 1
    //     if($slug)
    //     {
    //         $product = Product::with('galleries')
    //             ->where('slug', $slug)
    //             ->first();

    //         if($product)
    //             return ResponseFormatter::success($product,'Data produk berhasil diambil');
    //         else
    //             return ResponseFormatter::error(null,'Data produk tidak ada', 404);
    //     }

    //     $product = Product::with('galleries');

    //     // ini datanya biasanya banyak jadi pisah dengan id dan slug
    //     if($name)
    //         $product->where('name', 'like', '%' . $name .'%');

    //     if($type)
    //         $product->where('type', 'like', '%' . $type .'%');

    //     if($price_from)
    //         $product->where('price', '>=', $price_from);

    //     if($price_to)
    //         $product->where('price', '<=', $price_to);

    //     return ResponseFormatter::success(
    //         // bisa memanggil halaman berdasarkan limitnya
    //         $product->paginate($limit),
    //         'Data list produk berhasil diambil'
    //     );



    // }

    public function index()
    {
        $products = Product::withFilters()->paginate(10);
        return ProductResource::collection($products);
        // return Product::paginate(10);

    }
    
    public function all(Request $request)
    {
        $id = $request->input('id');
        $idcat = $request->input('category'); 
        $idgender = $request->input('gender');     
        $limit = $request->input('limit', 10);
        $name = $request->input('name');
        $slug = $request->input('slug');
        $type = $request->input('type');
        $pricerange = $request->input('pricerange');
        $price_from = $request->input('price_from');
        $price_to = $request->input('price_to');

        if($id)
        {
            $product = Product::with('galleries')->find($id);

            if($product)
                return ResponseFormatter::success($product,'Data produk berhasil diambil');
            else
                return ResponseFormatter::error(null,'Data produk tidak ada', 404);
        }

        $product = Product::with('galleries');

        if($idcat)
        {
            $product = $product->where('categories_id','=',$idcat);

            // if($product)
            //     return ResponseFormatter::success($product,'Data category berhasil diambil');
            // else
            //     return ResponseFormatter::error(null,'Data category tidak ada', 404);
        }


        if($idgender)
        {
            // $product = Product::with('gender')->find($idgender);
            $product = $product->where('genders_id','=',$idgender);

            // if($product)
            //     return ResponseFormatter::success($product,'Data gender berhasil diambil');
            // else
            //     return ResponseFormatter::error(null,'Data gender tidak ada', 404);
        }


        // if($slug)
        // {
        //     $product = Product::with('galleries')
        //         ->where('slug', $slug)
        //         ->first();

        //     if($product)
        //         return ResponseFormatter::success($product,'Data produk berhasil diambil');
        //     else
        //         return ResponseFormatter::error(null,'Data produk tidak ada', 404);
        // }

        // $product = Product::with('galleries');

        if($name)
            $product->where('name', 'like', '%' . $name .'%');

        if($type)
            $product->where('type', 'like', '%' . $type .'%');

        if(!is_null($pricerange)) {

            if ($pricerange == 0)
                $product->where('price', '<', '50000');
            elseif ($pricerange == 1)
                $product->wherebetween('price', ['50000','100000']);
            elseif ($pricerange == 2)
                $product->wherebetween('price', ['100000','500000']);
            elseif ($pricerange == 3)
                $product->where('price', '>', '500000');         
            }


        if($price_from)
            $product->where('price', '>=', $price_from);

        if($price_to)
            $product->where('price', '<=', $price_to);

        return ResponseFormatter::success(
            $product->paginate($limit),
            'Data list produk berhasil diambil'
        );

        

    }

    public function getProducts()
    {
        $products = Product::where('quantity', '<>', 0)->get();
        return response()->json(['products' => $products], 200);
    }

}

<?php
// api untuk mengambil data transaksi detail
// transaksi detail akan dibutuhkan oleh front end saat mengambil detail transaksi yang sudah dibeli
// 
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    // mengambil atau get berdasarkan id
    public function get(Request $request, $id)
    {
        // ingin mengambil transactions detail dengan produknya, kita bisa tau si transaksi ini membeli produk apa saja
        $product = Transaction::with(['details.product'])->find($id);

        if($product)
            return ResponseFormatter::success($product, 'Data transaksi berhasil diambil');
        else
            return ResponseFormatter::error(null, 'Data transaksi tidak ada', 404);
    }
}

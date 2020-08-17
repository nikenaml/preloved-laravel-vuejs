<?php
// tahap nya adalah user membuka website nya lalu mengambil data produknya,
// lalu detail prduknya berupa id ke dalam cart, proses add to cart ada di front end nya
// setelah itu ada proses untuk checkout
// proses checkout yaitu mengirimkan data ke dalam api

// name, email, number, address data yang disimpan disaat checkout, yang nantinya untuk pengiriman, untuk mengontak dari si usernya sendiri
// transaction total, untuk melihat jumlah harga produk yang kita beli, ini bisa dirubah di front end
// transaction status secara default akan pending
// transaction detail dalam berbentuk array, misal checkout ada 3 barang, maka akan detail dari 3 barang tersebut
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
// untuk validasi request api
use App\Http\Requests\API\CheckoutRequest;
// model yang akan digunakan
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    // ini fungsi api checkout nya, checkoutrequest = validasi
    public function checkout(CheckoutRequest $request)
    {
        // isi datanya semua request kecuali transaction detail
        $data = $request->except('transaction_details');
        // mt_rand = generate integer random untuk sebagai uuid nya
        $data['uuid'] = 'TRX' . mt_rand(10000,99999) . mt_rand(100,999);

        $transaction = Transaction::create($data);

        foreach ($request->transaction_details as $product)
        {
            $details[] = new TransactionDetail([
                'transactions_id' => $transaction->id,
                'products_id' => $product,
            ]);
            
            // ini untuk update stok, misal yang awalnya stok 50, dibeli jadi berkurang
            // jadi stoknya 50-1 = 49
            // jika ada yang membeli produk 1 maka akan di kurangi quantiti nya
            Product::find($product)->decrement('quantity');
        }

        // untuk menyimpan data relasinya
        $transaction->details()->saveMany($details);

        // kalau misalkan sukses akan mengembalikan data dari transaksi nya
        return ResponseFormatter::success($transaction);

    }
}

// bedanya transaksi dengan transaksi detail adalah, jika transaksi itu
// menampilkan semua barang yang di beli
// kalau transaksi detail berisi detail dari transaksi user, jadi user udah
// beli apa aja sih


// penjelasan kodingan diatas
// yang pertama membuat variabel data, variabel data tersebut akan di simpan di dalam tabel transactions
// lalu di tambahkan uuid sebagai identifier transactions
// lalu membuat variabel transaksi dimana membuat data transaksi ke tabel transactions
// setelah itu di foreach untuk membuat array untuk memasukkan transa detail
// ada pengurangan di sisi produknya untuk mengurangi quantity
// lalu di simpan save many
// jika sudah dan sukses maka mengembalikan data transaction disini
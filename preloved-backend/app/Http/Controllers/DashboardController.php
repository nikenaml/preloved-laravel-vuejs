<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index (){
        // jadi hanya transaksi yang sukses aja yang masuk dengan menghitung
        // (sum) field transaksi total
        $income = Transaction::where('transaction_status','SUCCESS')->sum('transaction_total');

        // menghitung beberapa transaksi yang masuk ke website kita, ada yang pending sukses maupun gagal
        $sales = Transaction::count();
        // id desc = mengambil 5 data terakhir yang masuk ke sistem
        $items = Transaction::orderBy('id','DESC')->take(5)->get();
        
        $pie = [
            // ingin menghitung berapa transaksi yang statusnya pending
            'pending' => Transaction::where('transaction_status','PENDING')->count(),
            'failed' => Transaction::where('transaction_status','FAILED')->count(),
            'success' => Transaction::where('transaction_status','SUCCESS')->count(),
        ];
        
        // ini untuk memanggil data dari model
        return view('pages.dashboard')->with([
            'income' => $income,
            'sales' => $sales,
            'items' => $items,
            'pie' => $pie
        ]);
    }
}

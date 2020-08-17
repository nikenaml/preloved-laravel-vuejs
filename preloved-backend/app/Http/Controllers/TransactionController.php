<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\TransactionDetail;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TransactionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // digunakan agar cms backend ini tidak bisa dibuka jika tidak login
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // untuk mengambil semua data yang ada di db
        // $items = Transaction::all();

        if($request->has('search')){
            $items = Transaction::where('email','LIKE','%'.$request->search.'%')->paginate(10);
        }
        else {
        // untuk ambil data di db berdasarkan paginate halaman
        $items = Transaction::paginate(10);
        }

        return view('pages.transactions.index')->with([
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Transaction::with('details.product')->findOrFail($id);
        // dd($item);
        return view('pages.transactions.show')->with([
            'item' => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Transaction::findOrFail($id);

        return view('pages.transactions.edit')->with([
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // fungsi untuk mengambil semua request, validasi dilakukan di productrequest yang rules nya sudah ditentuin di productrequest
        // jika request nya tervalidasi di fungsi productrequest maka fungsinya akan masuk ke dalam sini, dibawah berikut
        $data = $request->all();
        
        // bikin variabel lalu panggil modelnya
        $item =  Transaction::findOrFail($id);
        // lalu panggil function update
        $item->update($data);
        Alert::success('Success to Update!', 'Data yang dirubah berhasil diupdate, Gomawoo~~');

        // untuk redirect, jika sudah berhasil data maka halaman ini akan dikembalikan ke halaman sebelumnya
        return redirect()->route('transactions.index');
        // kenapa ga di taro url full nya? karna bisa aja berubah, karna kalo berubah url nya ga perlu rubah semuanya di controller, jadi gunain
        // yg udh disediain di route
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $item = Transaction::findOrFail($id);
        $item->delete();
        Alert::success('Success to Delete!', 'Data berhasil dihapus, Gomawoo~~');
        return redirect()->route('transactions.index');
    }
    
    // untuk mengubah statusnya
    public function setStatus(Request $request, $id)
    {
        // fungsi validasi
        $request->validate([
            // status ini akan update jika pending, success, failed
            // diluar 3 inputan tersebut tidak berhasil
            'status' => 'required|in:PENDING,SUCCESS,FAILED'
        ]);
        
        // script untuk mengubah statusnya
        $item = Transaction::findOrFail($id);
        $item->transaction_status = $request->status;
        
        // menyimpan data item nya
        $item->save();

        return redirect()->route('transactions.index');
    }

    public function cetakPdf(){
        $items = Transaction::all();
        $pdf = PDF::loadView('pages.transactions.laporanpdf', ['items' => $items]);
        return $pdf->stream('Laporan Transaksi Pembayaran Toko Allbrands Preloved.pdf');
    }

    public function search(Request $request){
        $search = $request->get('search');
        $items = Transaction::all();
        if($search){
        $transactions = Transaction::where("name","LIKE","%$search%");
        }
        return view('pages.transactions.index',['transactions' => $transactions]);
        // return redirect()->route('subscribers.index');
    }
}

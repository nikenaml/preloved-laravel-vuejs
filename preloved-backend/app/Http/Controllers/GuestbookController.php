<?php

namespace App\Http\Controllers;

use App\Models\Guestbook;
// use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use PDF;
// use Barryvdh\DomPDF\Facade as PDF;
use RealRashid\SweetAlert\Facades\Alert;

class GuestbookController extends Controller
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
        // untuk ambil semua data yang ada di db
        // $items = Guestbook::all();

        if($request->has('search')){
            $items = Guestbook::where('nama_tamu','LIKE','%'.$request->search.'%')->paginate(10);
        } 
        else {
        // untuk ambil data di db berdasarkan paginate halaman
        $items = Guestbook::paginate(10);
        }

        return view('pages.guestbooks.index')->with([
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
        $item = Guestbook::findOrFail($id);
        // untuk cek isi array
        // dd($item);
        return view('pages.guestbooks.show')->with([
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
        $item = Guestbook::findOrFail($id);

        return view('pages.guestbooks.edit')->with([
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
        $item =  Guestbook::findOrFail($id);
        // lalu panggil function update
        $item->update($data);
        Alert::success('Success to Update!', 'Data yang dirubah berhasil diupdate, Gomawoo~~');
        

        // untuk redirect, jika sudah berhasil data maka halaman ini akan dikembalikan ke halaman sebelumnya
        return redirect()->route('guestbooks.index');
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
        $item = Guestbook::findOrFail($id);
        $item->delete();
        Alert::success('Success to Delete!', 'Data berhasil dihapus, Gomawoo~~');
        return redirect()->route('guestbooks.index');
      
    }
    
    // // untuk mengubah statusnya
    // public function setStatus(Request $request, $id)
    // {
    //     // fungsi validasi
    //     $request->validate([
    //         // status ini akan update jika pending, success, failed
    //         // diluar 3 inputan tersebut tidak berhasil
    //         'status' => 'required|in:PENDING,SUCCESS,FAILED'
    //     ]);
        
    //     // script untuk mengubah statusnya
    //     $item = Transaction::findOrFail($id);
    //     $item->transaction_status = $request->status;
        
    //     // menyimpan data item nya
    //     $item->save();

    //     return redirect()->route('guestbooks.index');
    // }

    public function cetakPdf(){
    
        $items = Guestbook::all();
        $pdf = PDF::loadView('pages.guestbooks.laporanpdf', ['items' => $items]);
        return $pdf->stream('Laporan Pengunjung Website Allbrands Preloved.pdf');
    }

    // public function search(Request $request){
    //     $search = $request->get('search');
    //     $items = Guestbook::all();
    //     if($search){
    //     $guestbooks = Guestbook::where("name","LIKE","%$search%");
    //     }
    //     return view('pages.guestbooks.index',['guestbooks' => $guestbooks]);
    //     // return redirect()->route('subscribers.index');
           
    // }
}

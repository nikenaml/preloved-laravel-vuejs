<?php

namespace App\Http\Controllers;


use App\Models\Subscriber;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request)
    {
        // untuk ambil semua data di db
        // $items = Subscriber::all();
        // dd($request->all());
        if($request->has('search')){
            $items = Subscriber::where('nama_berlangganan','LIKE','%'.$request->search.'%')->paginate(10);
        }
        else{
        // untuk ambil data di db berdasarkan paginate halaman
        $items = Subscriber::paginate(10);
        }

        return view('pages.subscribers.index')->with([
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Subscriber::findOrFail($id);

        return view('pages.subscribers.edit')->with([
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
        
        $data = $request->all();
        
        // bikin variabel lalu panggil modelnya
        $item =  Subscriber::findOrFail($id);
        // lalu panggil function update
        $item->update($data);
        Alert::success('Success to Update!', 'Data yang dirubah berhasil diupdate, Gomawoo~~');
        // toast('Your Post as been submited!','success');
        // Alert::toast('Toast Message', 'Toast Type');

        // untuk redirect, jika sudah berhasil data maka halaman ini akan dikembalikan ke halaman sebelumnya
        return redirect()->route('subscribers.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $item = Subscriber::findOrFail($id);
        $item->delete();
        Alert::success('Success to Delete!', 'Data berhasil dihapus, Gomawoo~~');
        return redirect()->route('subscribers.index');
       
    // return redirect()->back()->with('success','Post deleted successfully');
    }

    public function cetakPdf(){
    
        $items = Subscriber::all();
        $pdf = PDF::loadView('pages.subscribers.laporanpdf', ['items' => $items]);
        return $pdf->stream('Laporan Subscribers Website Allbrands Preloved.pdf');
    }

    // public function search(Request $request){
    // // // menangkap data pencarian
	// // 	$search = $request->search;
 
    // // // mengambil data dari table subscribers sesuai pencarian data
    // // $subscribers = DB::table('subscribers')
    // // ->where('nama_berlangganan','like',"%".$subscribers."%")
    // // ->paginate();

    // //     // mengirim data subscribers ke view index
    // // return view('subscribers.index',['subscribers' => $subscribers]);

    // $search = $request->get('search');
    // $items = Subscriber::all();
    // if($search){
    // $subscribers = Subscriber::where("name","LIKE","%$search%");
    // }
    // return view('pages.subscribers.index',['subscribers' => $subscribers]);
    // // return redirect()->route('subscribers.index');
    // }
}

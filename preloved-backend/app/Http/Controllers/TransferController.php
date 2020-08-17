<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use Illuminate\Http\Request;
// use PDF;
// use Barryvdh\DomPDF\Facade as PDF;
use RealRashid\SweetAlert\Facades\Alert;


class TransferController extends Controller
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
        // untuk ambil semua data yang ada di db
        // $items = Guestbook::all();
        if($request->has('search')){
            $items = Transfer::where('email_transfer','LIKE','%'.$request->search.'%')->paginate(10);
        } 
        else {
        // untuk ambil data di db berdasarkan paginate halaman
        $items = Transfer::paginate(10);
        }

        return view('pages.transfers.index')->with([
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
        // return view ('pages.transfers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'nama_transfer'=>'required',
        // ]);

        // if ($request->hasFile('image')){
        //     $image = $request->file('image');
        //     $imageName = $request->image->getClientOriginalName();
        //     Storage::disk('public')->put('images/'.$imageName, file_get_contents($image));

        //     //Save image into database
        //     $image =  new Image();
        //     $image->title = $request->title;
        //     $image->img = $imageName;
        //     $image->save();

        //     return response()->json(['sucsess'=>'You have successfully upload image.']);
        // }
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
        // $item = Transfer::findOrFail($id);

        // return view('pages.transfers.edit')->with([
        //     'item' => $item
        // ]);
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
        // $data = $request->all();
        // $item =  Transfer::findOrFail($id);

        // $item->update($data);
        // Alert::success('Success to Update!', 'Data yang dirubah berhasil diupdate, Gomawoo~~');

        // return redirect()->route('transfers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $item = Transfer::findOrFail($id);
        $item->delete();
        Alert::success('Success to Delete!', 'Data berhasil dihapus, Gomawoo~~');
        return redirect()->route('transfers.index');
      
    }

    // public function cetakPdf(){
    
    //     $items = Transfer::all();
    //     $pdf = PDF::loadView('pages.transfers.laporanpdf', ['items' => $items]);
    //     return $pdf->stream('Laporan Bukti Transfer Website Allbrands Preloved.pdf');
    // }

    // public function formSubmit(Request $request)
    // {
    // 	$imageName = time().'.'.$request->image->getClientOriginalExtension();
    //     $request->image->move(public_path('images'), $imageName);
        
    // 	return response()->json(['success'=>'You have successfully upload image.']);
    // }
}
